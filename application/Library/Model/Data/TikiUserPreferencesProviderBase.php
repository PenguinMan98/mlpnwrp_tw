<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserPreferencesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserPreferences($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserPreferences($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($user, $prefName)
    {
        $strSql = 'SELECT * FROM `tiki_user_preferences` WHERE user=? AND prefName=?';
        $params = array($user, $prefName);
        return Model_Data_TikiUserPreferencesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_preferences` (
            user,
            prefName,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getPrefname(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_preferences` (
            user,
            prefName,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getPrefname(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_preferences` SET 
            user=?,
            prefName=?,
            value=?
        WHERE user=? AND prefName=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getPrefname(),
            $objRecord->getValue()
        );
        $arrKeyParams = array($objRecord->getOrigUser(), $objRecord->getOrigPrefname());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_preferences` WHERE user=? AND prefName=?';
        $params = array($objRecord->getUser(), $objRecord->getPrefname());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
