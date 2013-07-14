<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserLoginCookiesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserLoginCookies($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserLoginCookies($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($userId, $secret)
    {
        $strSql = 'SELECT * FROM `tiki_user_login_cookies` WHERE userId=? AND secret=?';
        $params = array($userId, $secret);
        return Model_Data_TikiUserLoginCookiesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_login_cookies` (
            userId,
            secret,
            expiration
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getUserid(),
            $objRecord->getSecret(),
            $objRecord->getExpiration()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_login_cookies` (
            userId,
            secret,
            expiration
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getUserid(),
            $objRecord->getSecret(),
            $objRecord->getExpiration()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_login_cookies` SET 
            userId=?,
            secret=?,
            expiration=?
        WHERE userId=? AND secret=?';
        $arrSetParams = array(
            $objRecord->getUserid(),
            $objRecord->getSecret(),
            $objRecord->getExpiration()
        );
        $arrKeyParams = array($objRecord->getOrigUserid(), $objRecord->getOrigSecret());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_login_cookies` WHERE userId=? AND secret=?';
        $params = array($objRecord->getUserid(), $objRecord->getSecret());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
