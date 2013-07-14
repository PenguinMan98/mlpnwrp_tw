<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiMenuLanguagesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiMenuLanguages($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiMenuLanguages($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($menuId, $language)
    {
        $strSql = 'SELECT * FROM `tiki_menu_languages` WHERE menuId=? AND language=?';
        $params = array($menuId, $language);
        return Model_Data_TikiMenuLanguagesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_menu_languages` (
            menuId,
            language
        ) VALUES  (?, ?)';
        $params = array(
            0,
            $objRecord->getLanguage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setMenuid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_menu_languages` (
            menuId,
            language
        ) VALUES  (?, ?)';
        $params = array(
            0,
            $objRecord->getLanguage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setMenuid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_menu_languages` SET 
            menuId=?,
            language=?
        WHERE menuId=? AND language=?';
        $arrSetParams = array(
            $objRecord->getMenuid(),
            $objRecord->getLanguage()
        );
        $arrKeyParams = array($objRecord->getOrigMenuid(), $objRecord->getOrigLanguage());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_menu_languages` WHERE menuId=? AND language=?';
        $params = array($objRecord->getMenuid(), $objRecord->getLanguage());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
