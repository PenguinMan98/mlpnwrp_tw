<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiThemeControlCategsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiThemeControlCategs($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiThemeControlCategs($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($categId)
    {
        $strSql = 'SELECT * FROM `tiki_theme_control_categs` WHERE categId=?';
        $params = array($categId);
        return Model_Data_TikiThemeControlCategsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_theme_control_categs` (
            categId,
            theme
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCategid(),
            $objRecord->getTheme()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_theme_control_categs` (
            categId,
            theme
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCategid(),
            $objRecord->getTheme()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_theme_control_categs` SET 
            categId=?,
            theme=?
        WHERE categId=?';
        $arrSetParams = array(
            $objRecord->getCategid(),
            $objRecord->getTheme()
        );
        $arrKeyParams = array($objRecord->getOrigCategid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_theme_control_categs` WHERE categId=?';
        $params = array($objRecord->getCategid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
