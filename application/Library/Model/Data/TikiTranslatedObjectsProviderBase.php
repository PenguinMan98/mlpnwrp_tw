<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiTranslatedObjectsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiTranslatedObjects($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiTranslatedObjects($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($type, $objId)
    {
        $strSql = 'SELECT * FROM `tiki_translated_objects` WHERE type=? AND objId=?';
        $params = array($type, $objId);
        return Model_Data_TikiTranslatedObjectsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_translated_objects` (
            traId,
            type,
            objId,
            lang
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getType(),
            $objRecord->getObjid(),
            $objRecord->getLang()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTraid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_translated_objects` (
            traId,
            type,
            objId,
            lang
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getType(),
            $objRecord->getObjid(),
            $objRecord->getLang()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setTraid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_translated_objects` SET 
            traId=?,
            type=?,
            objId=?,
            lang=?
        WHERE type=? AND objId=?';
        $arrSetParams = array(
            $objRecord->getTraid(),
            $objRecord->getType(),
            $objRecord->getObjid(),
            $objRecord->getLang()
        );
        $arrKeyParams = array($objRecord->getOrigType(), $objRecord->getOrigObjid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_translated_objects` WHERE type=? AND objId=?';
        $params = array($objRecord->getType(), $objRecord->getObjid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
