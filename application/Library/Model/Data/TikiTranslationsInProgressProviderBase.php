<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiTranslationsInProgressProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiTranslationsInProgress($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiTranslationsInProgress($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($page_id, $language)
    {
        $strSql = 'SELECT * FROM `tiki_translations_in_progress` WHERE page_id=? AND language=?';
        $params = array($page_id, $language);
        return Model_Data_TikiTranslationsInProgressProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_translations_in_progress` (
            page_id,
            language
        ) VALUES  (?, ?)';
        $params = array($objRecord->getPageId(),
            $objRecord->getLanguage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_translations_in_progress` (
            page_id,
            language
        ) VALUES  (?, ?)';
        $params = array($objRecord->getPageId(),
            $objRecord->getLanguage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_translations_in_progress` SET 
            page_id=?,
            language=?
        WHERE page_id=? AND language=?';
        $arrSetParams = array(
            $objRecord->getPageId(),
            $objRecord->getLanguage()
        );
        $arrKeyParams = array($objRecord->getOrigPageId(), $objRecord->getOrigLanguage());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_translations_in_progress` WHERE page_id=? AND language=?';
        $params = array($objRecord->getPageId(), $objRecord->getLanguage());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
