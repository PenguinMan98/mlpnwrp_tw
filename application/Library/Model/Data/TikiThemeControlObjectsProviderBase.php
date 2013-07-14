<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiThemeControlObjectsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiThemeControlObjects($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiThemeControlObjects($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($objId, $type)
    {
        $strSql = 'SELECT * FROM `tiki_theme_control_objects` WHERE objId=? AND type=?';
        $params = array($objId, $type);
        return Model_Data_TikiThemeControlObjectsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_theme_control_objects` (
            objId,
            type,
            name,
            theme
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getObjid(),
            $objRecord->getType(),
            $objRecord->getName(),
            $objRecord->getTheme()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_theme_control_objects` (
            objId,
            type,
            name,
            theme
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getObjid(),
            $objRecord->getType(),
            $objRecord->getName(),
            $objRecord->getTheme()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_theme_control_objects` SET 
            objId=?,
            type=?,
            name=?,
            theme=?
        WHERE objId=? AND type=?';
        $arrSetParams = array(
            $objRecord->getObjid(),
            $objRecord->getType(),
            $objRecord->getName(),
            $objRecord->getTheme()
        );
        $arrKeyParams = array($objRecord->getOrigObjid(), $objRecord->getOrigType());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_theme_control_objects` WHERE objId=? AND type=?';
        $params = array($objRecord->getObjid(), $objRecord->getType());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
