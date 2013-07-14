<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiLinkCacheProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiLinkCache($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiLinkCache($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($cacheId)
    {
        $strSql = 'SELECT * FROM `tiki_link_cache` WHERE cacheId=?';
        $params = array($cacheId);
        return Model_Data_TikiLinkCacheProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_link_cache` (
            cacheId,
            url,
            data,
            refresh
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUrl(),
            $objRecord->getData(),
            $objRecord->getRefresh()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCacheid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_link_cache` (
            cacheId,
            url,
            data,
            refresh
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUrl(),
            $objRecord->getData(),
            $objRecord->getRefresh()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCacheid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_link_cache` SET 
            cacheId=?,
            url=?,
            data=?,
            refresh=?
        WHERE cacheId=?';
        $arrSetParams = array(
            $objRecord->getCacheid(),
            $objRecord->getUrl(),
            $objRecord->getData(),
            $objRecord->getRefresh()
        );
        $arrKeyParams = array($objRecord->getOrigCacheid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_link_cache` WHERE cacheId=?';
        $params = array($objRecord->getCacheid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
