<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiLogsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiLogs($arrResults[0]);
            }
        }
        return null;
    }

    protected function getArrayFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            $arrRecordList = array();
            foreach ($arrResults as $arrRecord) {
                $arrRecordList[] = new Model_Structure_TikiLogs($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($logId)
    {
        $strSql = 'SELECT * FROM `tiki_logs` WHERE logId=?';
        $params = array($logId);
        return Model_Data_TikiLogsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_logs` (
            logId,
            logtype,
            logmessage,
            loguser,
            logip,
            logclient,
            logtime
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getLogtype(),
            $objRecord->getLogmessage(),
            $objRecord->getLoguser(),
            $objRecord->getLogip(),
            $objRecord->getLogclient(),
            $objRecord->getLogtime()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setLogid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_logs` (
            logId,
            logtype,
            logmessage,
            loguser,
            logip,
            logclient,
            logtime
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getLogtype(),
            $objRecord->getLogmessage(),
            $objRecord->getLoguser(),
            $objRecord->getLogip(),
            $objRecord->getLogclient(),
            $objRecord->getLogtime()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setLogid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_logs` SET 
            logId=?,
            logtype=?,
            logmessage=?,
            loguser=?,
            logip=?,
            logclient=?,
            logtime=?
        WHERE logId=?';
        $arrSetParams = array(
            $objRecord->getLogid(),
            $objRecord->getLogtype(),
            $objRecord->getLogmessage(),
            $objRecord->getLoguser(),
            $objRecord->getLogip(),
            $objRecord->getLogclient(),
            $objRecord->getLogtime()
        );
        $arrKeyParams = array($objRecord->getOrigLogid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_logs` WHERE logId=?';
        $params = array($objRecord->getLogid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
