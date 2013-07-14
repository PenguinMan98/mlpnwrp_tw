<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCategoriesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCategories($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCategories($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($categId)
    {
        $strSql = 'SELECT * FROM `tiki_categories` WHERE categId=?';
        $params = array($categId);
        return Model_Data_TikiCategoriesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_categories` (
            categId,
            name,
            description,
            parentId,
            rootId,
            hits
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getParentid(),
            $objRecord->getRootid(),
            $objRecord->getHits()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCategid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_categories` (
            categId,
            name,
            description,
            parentId,
            rootId,
            hits
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getParentid(),
            $objRecord->getRootid(),
            $objRecord->getHits()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCategid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_categories` SET 
            categId=?,
            name=?,
            description=?,
            parentId=?,
            rootId=?,
            hits=?
        WHERE categId=?';
        $arrSetParams = array(
            $objRecord->getCategid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getParentid(),
            $objRecord->getRootid(),
            $objRecord->getHits()
        );
        $arrKeyParams = array($objRecord->getOrigCategid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_categories` WHERE categId=?';
        $params = array($objRecord->getCategid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
