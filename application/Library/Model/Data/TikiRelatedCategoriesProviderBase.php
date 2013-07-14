<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiRelatedCategoriesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiRelatedCategories($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiRelatedCategories($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($categId, $relatedTo)
    {
        $strSql = 'SELECT * FROM `tiki_related_categories` WHERE categId=? AND relatedTo=?';
        $params = array($categId, $relatedTo);
        return Model_Data_TikiRelatedCategoriesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_related_categories` (
            categId,
            relatedTo
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCategid(),
            $objRecord->getRelatedto()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_related_categories` (
            categId,
            relatedTo
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCategid(),
            $objRecord->getRelatedto()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_related_categories` SET 
            categId=?,
            relatedTo=?
        WHERE categId=? AND relatedTo=?';
        $arrSetParams = array(
            $objRecord->getCategid(),
            $objRecord->getRelatedto()
        );
        $arrKeyParams = array($objRecord->getOrigCategid(), $objRecord->getOrigRelatedto());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_related_categories` WHERE categId=? AND relatedTo=?';
        $params = array($objRecord->getCategid(), $objRecord->getRelatedto());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
