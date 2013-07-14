<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUntranslatedProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUntranslated($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUntranslated($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($source, $lang)
    {
        $strSql = 'SELECT * FROM `tiki_untranslated` WHERE source=? AND lang=?';
        $params = array($source, $lang);
        return Model_Data_TikiUntranslatedProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_untranslated` (
            id,
            source,
            lang
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getSource(),
            $objRecord->getLang()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_untranslated` (
            id,
            source,
            lang
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getSource(),
            $objRecord->getLang()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_untranslated` SET 
            id=?,
            source=?,
            lang=?
        WHERE source=? AND lang=?';
        $arrSetParams = array(
            $objRecord->getId(),
            $objRecord->getSource(),
            $objRecord->getLang()
        );
        $arrKeyParams = array($objRecord->getOrigSource(), $objRecord->getOrigLang());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_untranslated` WHERE source=? AND lang=?';
        $params = array($objRecord->getSource(), $objRecord->getLang());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
