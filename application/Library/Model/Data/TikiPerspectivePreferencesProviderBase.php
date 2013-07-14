<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPerspectivePreferencesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPerspectivePreferences($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPerspectivePreferences($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($perspectiveId, $pref)
    {
        $strSql = 'SELECT * FROM `tiki_perspective_preferences` WHERE perspectiveId=? AND pref=?';
        $params = array($perspectiveId, $pref);
        return Model_Data_TikiPerspectivePreferencesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_perspective_preferences` (
            perspectiveId,
            pref,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getPerspectiveid(),
            $objRecord->getPref(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_perspective_preferences` (
            perspectiveId,
            pref,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getPerspectiveid(),
            $objRecord->getPref(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_perspective_preferences` SET 
            perspectiveId=?,
            pref=?,
            value=?
        WHERE perspectiveId=? AND pref=?';
        $arrSetParams = array(
            $objRecord->getPerspectiveid(),
            $objRecord->getPref(),
            $objRecord->getValue()
        );
        $arrKeyParams = array($objRecord->getOrigPerspectiveid(), $objRecord->getOrigPref());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_perspective_preferences` WHERE perspectiveId=? AND pref=?';
        $params = array($objRecord->getPerspectiveid(), $objRecord->getPref());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
