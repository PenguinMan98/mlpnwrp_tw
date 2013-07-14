<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCategoryObjectsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCategoryObjects($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCategoryObjects($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($catObjectId, $categId)
    {
        $strSql = 'SELECT * FROM `tiki_category_objects` WHERE catObjectId=? AND categId=?';
        $params = array($catObjectId, $categId);
        return Model_Data_TikiCategoryObjectsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_category_objects` (
            catObjectId,
            categId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCatobjectid(),
            $objRecord->getCategid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_category_objects` (
            catObjectId,
            categId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCatobjectid(),
            $objRecord->getCategid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_category_objects` SET 
            catObjectId=?,
            categId=?
        WHERE catObjectId=? AND categId=?';
        $arrSetParams = array(
            $objRecord->getCatobjectid(),
            $objRecord->getCategid()
        );
        $arrKeyParams = array($objRecord->getOrigCatobjectid(), $objRecord->getOrigCategid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_category_objects` WHERE catObjectId=? AND categId=?';
        $params = array($objRecord->getCatobjectid(), $objRecord->getCategid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
