<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCategorizedObjectsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCategorizedObjects($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCategorizedObjects($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($catObjectId)
    {
        $strSql = 'SELECT * FROM `tiki_categorized_objects` WHERE catObjectId=?';
        $params = array($catObjectId);
        return Model_Data_TikiCategorizedObjectsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_categorized_objects` (
            catObjectId
        ) VALUES  (?)';
        $params = array($objRecord->getCatobjectid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_categorized_objects` (
            catObjectId
        ) VALUES  (?)';
        $params = array($objRecord->getCatobjectid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_categorized_objects` SET 
            catObjectId=?
        WHERE catObjectId=?';
        $arrSetParams = array(
            $objRecord->getCatobjectid()
        );
        $arrKeyParams = array($objRecord->getOrigCatobjectid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_categorized_objects` WHERE catObjectId=?';
        $params = array($objRecord->getCatobjectid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
