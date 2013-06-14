<?php
define('DAO_DEBUG', true);
define('DAO_PROFILE', false);
require_once('DbCn.php');
class Dao
{
	const SLOW_QUERY_LIMIT = 5.00;

	private static $_intQueryCount = 0;
	private static $_dblQueryTime = 0;
	private static $_dblFetchTime = 0;

	public static function getQueryCount()
	{
		return(self::$_intQueryCount);
	}

	public static function getQueryTime()
	{
		return(self::$_dblQueryTime);
	}

	public static function getFetchTime()
	{
		return(self::$_dblFetchTime);
	}

	private static function getCn()
	{
		static $objDbCn;

		if (!(isset($objDbCn))) {
			$objDbCn = DbCn::getInstance();
			if ($objDbCn === null) {
                include($_SERVER['DOCUMENT_ROOT'] . '/admin/templates/error.phtml');
                header('Internal Server Error', TRUE, 500);
				exit(1);
			}
		}

		return($objDbCn);
	}

	public static function getAssoc($strSql, $arrParams, &$arrResults, &$arrErrors)
	{
        $arrResults = array();
		$objDbCn = self::getCn();
		
		// Prepare the actual text of the query
		$objRes = $objDbCn->prepare($strSql);
		$strQueryString = self::getQueryString($objDbCn, $strSql, $arrParams);
		if (DAO_PROFILE) {
			self::logQuery($strQueryString);
		}
		//echo $strQueryString . '<br>';
		
		// Execute the query
		self::$_intQueryCount++;
		$dblStart = microtime(true);
		try {
			$objRes->execute($arrParams);
		}catch (Exception $e) {
			$arrErrors = $objDbCn->errorInfo();
			self::logError(implode("|",$arrErrors), $strQueryString);
			return(false);
		}
		$dblEnd = microtime(true);
		self::$_dblQueryTime += ($dblEnd - $dblStart);
		self::logSlowQuery($strQueryString, ($dblEnd - $dblStart));

		if ($objRes->errorCode() != "00000") {
			$arrErrors = $objRes->errorInfo();
			self::logError(implode("|",$arrErrors), $strQueryString);
			return(false);
		}
		
		$objRes->setFetchMode(PDO::FETCH_ASSOC);
		// Get the results into an array
		$dblStart = microtime(true);
        while ($arrLine = $objRes->fetch()) {
        	$arrResults[] = $arrLine;
        }
		$dblEnd = microtime(true);
		self::$_dblFetchTime += ($dblEnd - $dblStart);
    	//@$objRes->free_result();

		return(true);
	}
    
    public static function getMultipleResults($strSql, $arrParams, &$multiResults, &$arrErrors)
    {
        $multiResults = array();
        $objDbCn = self::getCn();

        // Prepare the actual text of the query
        $strQueryString = self::getQueryString($objDbCn, $strSql, $arrParams);
        if (DAO_PROFILE) {
            self::logQuery($strQueryString);
        }

        // Execute the query
        self::$_intQueryCount++;
        $dblStart = microtime(true);
        $objRes = @$objDbCn->multi_query($strQueryString);
        $dblEnd = microtime(true);
        self::$_dblQueryTime += ($dblEnd - $dblStart);
        if ($objRes === false) {
            $strMessage = mysqli_error($objDbCn);
            $arrErrors[] = 'Error: ' . $strMessage;
            self::logError($strMessage, $strQueryString);
            return(false);
        }
        self::logSlowQuery($strQueryString, ($dblEnd - $dblStart));

        // Get the results into an array
        $dblStart = microtime(true);
        do {
            if ($result = @$objDbCn->use_result()) {
                $arrResults = array();
                while ($arrLine = $result->fetch_assoc()) {
                    $arrResults[] = $arrLine;
                }
                $result->close();
                $multiResults[] = $arrResults;
            }
        } while (@$objDbCn->next_result());
        $dblEnd = microtime(true);
        self::$_dblFetchTime += ($dblEnd - $dblStart);
        return(true);
    }

	public static function execute($strSql, $arrParams, &$arrErrors)
	{
	    $objDbCn = self::getCn();

		// Prepare the actual text of the query
		$strQueryString = self::getQueryString($objDbCn, $strSql, $arrParams);
		if (DAO_PROFILE) {
			self::logQuery($strQueryString);
		}
		$blnResult = $objDbCn->prepare($strSql);
		
		// Execute the query
		self::$_intQueryCount++;
		$dblStart = microtime(true);
		try {
			$blnResult->execute($arrParams);
			
		}catch (Exception $e) {
			$arrErrors = $objDbCn->errorInfo();
			self::logError(implode("|",$arrErrors), $strQueryString);
			return(false);
		}
		$dblEnd = microtime(true);
		self::$_dblQueryTime += ($dblEnd - $dblStart);
		if ($blnResult->errorCode() != "00000") {
			$arrErrors = $blnResult->errorInfo();
			self::logError(implode("|",$arrErrors), $strQueryString);
			return(false);
		}
		self::logSlowQuery($strQueryString, ($dblEnd - $dblStart));

		return(true);
	}

	private static function getQueryString($objDbCn, $strSql, $arrParams = null)
	{
		// If there aren't any parameters, then just return the base query string
		if ($arrParams == null) { return($strSql); }

		// Make sure all of the parameters are safe to use
		$intParamCount = count($arrParams);
		for ($i = 0; $i < $intParamCount; $i++) {
			if ($arrParams[$i] === null) {
				$arrParams[$i] = 'NULL';
			}
			elseif ($arrParams[$i] === 'CURRENT_TIMESTAMP') {
				// Deliberately empty; no need to surround this in quotes
			}
			elseif (!(is_numeric($arrParams[$i])) || is_string($arrParams[$i])) {
				$arrParams[$i] = "'" . addslashes($arrParams[$i]) . "'";
			}
		}

		// Now replace each ? parameter place holder with the proper corresponding value
		$arrPieces = explode('?', $strSql);
		$strQueryString = $arrPieces[0];
		$intPieceCount = count($arrPieces);
		for ($i = 1; $i < $intPieceCount; $i++) {
			$strQueryString .= $arrParams[$i - 1] . $arrPieces[$i];
		}

		// Return the final database query
		return($strQueryString);
	}

	private static function logQuery($strSql)
	{
		echo '<div style="width: 800px; text-align: left;">', microtime(true), ' ', $strSql, '</div><br />';
		return;
	}

	private static function logError($strMessage, $strQueryString)
	{
		// Trim all extraneous whitespace from our query
		$strQueryString = str_replace(array("\r", "\n", "\t"), ' ', $strQueryString);
		$strQueryString = preg_replace("/\s\s+/", ' ', $strQueryString);
		$strQueryString = trim($strQueryString);

		syslog(LOG_ERR, 'PHP Dao: ' . $strMessage . ' : ' . $strQueryString);

		if (DAO_DEBUG) {
			echo 'Dao Error: ', $strMessage, '<br />';
		}

		return;
	}

	private static function logSlowQuery($strQueryString, $dblQueryTime)
	{
		if (self::SLOW_QUERY_LIMIT >= 0 && $dblQueryTime > self::SLOW_QUERY_LIMIT) {
			// Trim all extraneous whitespace from our query
			$strQueryString = str_replace(array("\r", "\n", "\t"), ' ', $strQueryString);
			$strQueryString = preg_replace("/\s\s+/", ' ', $strQueryString);
			$strQueryString = trim($strQueryString);

			syslog(LOG_ERR, 'PHP Dao: Slow Query [' . number_format($dblQueryTime, 2) . ' second(s)] : ' . $strQueryString);
		}

		return;
	}

	public static function getArrayFromObjectList($arrList)
	{
		$arrData = array();
		foreach ($arrList as $objRecord) {
			$arrData[] = $objRecord->getAsArray();
		}

		return($arrData);
	}

	public static function getInsertId()
	{
		$objDbCn = self::getCn();
		return($objDbCn->lastInsertId());
	}


    public static function getAssocServer($strSql, $arrParams, &$arrResults, &$arrErrors, $connectionName)
    {
        $arrResults = array();
        $objDbCn = self::getCnServer($connectionName);

        // Prepare the actual text of the query
        $strQueryString = self::getQueryString($objDbCn, $strSql, $arrParams);
        if (DAO_PROFILE) {
            self::logQuery($strQueryString);
        }

        // Execute the query
        self::$_intQueryCount++;
        $dblStart = microtime(true);
        $objRes = @$objDbCn->query($strQueryString);
        $dblEnd = microtime(true);
        self::$_dblQueryTime += ($dblEnd - $dblStart);
        if ($objRes === false) {
            $strMessage = mysqli_error($objDbCn);
            $arrErrors[] = 'Error: ' . $strMessage;
            self::logError($strMessage, $strQueryString);
            return(false);
        }
        self::logSlowQuery($strQueryString, ($dblEnd - $dblStart));

        // Get the results into an array
        $dblStart = microtime(true);
        while ($arrLine = $objRes->fetch_assoc()) {
            $arrResults[] = $arrLine;
        }
        $dblEnd = microtime(true);
        self::$_dblFetchTime += ($dblEnd - $dblStart);
        @$objRes->free_result();

        return(true);
    }

    public static function executeServer($strSql, $arrParams, &$arrErrors, $connectionName)
    {
        $objDbCn = self::getCnServer($connectionName);

        // Prepare the actual text of the query
        $strQueryString = self::getQueryString($objDbCn, $strSql, $arrParams);
        if (DAO_PROFILE) {
            self::logQuery($strQueryString);
        }

        // Execute the query
        self::$_intQueryCount++;
        $dblStart = microtime(true);
        $blnResult = @$objDbCn->real_query($strQueryString);
        $dblEnd = microtime(true);
        self::$_dblQueryTime += ($dblEnd - $dblStart);
        if ($blnResult === false) {
            $strMessage = mysqli_error($objDbCn);
            $arrErrors[] = 'Error: ' . $strMessage;
            self::logError($strMessage, $strQueryString);
            return(false);
        }
        self::logSlowQuery($strQueryString, ($dblEnd - $dblStart));

        return(true);
    }

    private static function getCnServer($connectionName)
    {
        static $objDbCn;

        if (!(isset($objDbCn))) {
            $objProvider = DbCn::getInstance();
            $objDbCn = $objProvider->getMySqliCn($connectionName);
            if ($objDbCn === null) {
                include($_SERVER['DOCUMENT_ROOT'] . '/admin/templates/error.phtml');
                header('Internal Server Error', TRUE, 500);
                exit(1);
            }
            /*if (::getIsProduction()) {
                // Reset the database to be in the same timezone as the web server(s)
                $blnResult = @$objDbCn->real_query('SET time_zone=MST7MDT');
                if (!($blnResult)) {
                    die('Error #2.');
                }
            }*/
        }

        return($objDbCn);
    }

    public static function getInsertIdServer($connectionName)
    {
        $objDbCn = self::getCnServer($connectionName);
        return(mysqli_insert_id($objDbCn));
    }
    
    public static function startTransaction()
    {
        $objDbCn = self::getCn();
        $objDbCn->beginTransaction();
    }
    
    public static function commit()
    {
        $objDbCn = self::getCn();
        $objDbCn->commit();
    }
    
    public static function rollback()
    {
        $objDbCn = self::getCn();
        return $objDbCn->rollback();
    }
}