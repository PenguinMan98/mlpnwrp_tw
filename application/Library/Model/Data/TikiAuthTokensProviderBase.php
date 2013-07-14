<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiAuthTokensProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiAuthTokens($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiAuthTokens($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($tokenId)
    {
        $strSql = 'SELECT * FROM `tiki_auth_tokens` WHERE tokenId=?';
        $params = array($tokenId);
        return Model_Data_TikiAuthTokensProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_auth_tokens` (
            tokenId,
            creation,
            timeout,
            hits,
            maxhits,
            token,
            entry,
            email,
            parameters,
            groups
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCreation(),
            $objRecord->getTimeout(),
            $objRecord->getHits(),
            $objRecord->getMaxhits(),
            $objRecord->getToken(),
            $objRecord->getEntry(),
            $objRecord->getEmail(),
            $objRecord->getParameters(),
            $objRecord->getGroups()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTokenid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_auth_tokens` (
            tokenId,
            creation,
            timeout,
            hits,
            maxhits,
            token,
            entry,
            email,
            parameters,
            groups
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCreation(),
            $objRecord->getTimeout(),
            $objRecord->getHits(),
            $objRecord->getMaxhits(),
            $objRecord->getToken(),
            $objRecord->getEntry(),
            $objRecord->getEmail(),
            $objRecord->getParameters(),
            $objRecord->getGroups()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTokenid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_auth_tokens` SET 
            tokenId=?,
            creation=?,
            timeout=?,
            hits=?,
            maxhits=?,
            token=?,
            entry=?,
            email=?,
            parameters=?,
            groups=?
        WHERE tokenId=?';
        $arrSetParams = array(
            $objRecord->getTokenid(),
            $objRecord->getCreation(),
            $objRecord->getTimeout(),
            $objRecord->getHits(),
            $objRecord->getMaxhits(),
            $objRecord->getToken(),
            $objRecord->getEntry(),
            $objRecord->getEmail(),
            $objRecord->getParameters(),
            $objRecord->getGroups()
        );
        $arrKeyParams = array($objRecord->getOrigTokenid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_auth_tokens` WHERE tokenId=?';
        $params = array($objRecord->getTokenid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
