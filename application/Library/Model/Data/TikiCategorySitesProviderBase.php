<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCategorySitesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCategorySites($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCategorySites($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($categId, $siteId)
    {
        $strSql = 'SELECT * FROM `tiki_category_sites` WHERE categId=? AND siteId=?';
        $params = array($categId, $siteId);
        return Model_Data_TikiCategorySitesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_category_sites` (
            categId,
            siteId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCategid(),
            $objRecord->getSiteid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_category_sites` (
            categId,
            siteId
        ) VALUES  (?, ?)';
        $params = array($objRecord->getCategid(),
            $objRecord->getSiteid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_category_sites` SET 
            categId=?,
            siteId=?
        WHERE categId=? AND siteId=?';
        $arrSetParams = array(
            $objRecord->getCategid(),
            $objRecord->getSiteid()
        );
        $arrKeyParams = array($objRecord->getOrigCategid(), $objRecord->getOrigSiteid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_category_sites` WHERE categId=? AND siteId=?';
        $params = array($objRecord->getCategid(), $objRecord->getSiteid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
