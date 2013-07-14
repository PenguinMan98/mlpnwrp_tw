<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiRssFeedsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiRssFeeds($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiRssFeeds($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($name, $rssVer)
    {
        $strSql = 'SELECT * FROM `tiki_rss_feeds` WHERE name=? AND rssVer=?';
        $params = array($name, $rssVer);
        return Model_Data_TikiRssFeedsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_rss_feeds` (
            name,
            rssVer,
            refresh,
            lastUpdated,
            cache
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getName(),
            $objRecord->getRssver(),
            $objRecord->getRefresh(),
            $objRecord->getLastupdated(),
            $objRecord->getCache()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_rss_feeds` (
            name,
            rssVer,
            refresh,
            lastUpdated,
            cache
        ) VALUES  (?, ?, ?, ?, ?)';
        $params = array($objRecord->getName(),
            $objRecord->getRssver(),
            $objRecord->getRefresh(),
            $objRecord->getLastupdated(),
            $objRecord->getCache()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_rss_feeds` SET 
            name=?,
            rssVer=?,
            refresh=?,
            lastUpdated=?,
            cache=?
        WHERE name=? AND rssVer=?';
        $arrSetParams = array(
            $objRecord->getName(),
            $objRecord->getRssver(),
            $objRecord->getRefresh(),
            $objRecord->getLastupdated(),
            $objRecord->getCache()
        );
        $arrKeyParams = array($objRecord->getOrigName(), $objRecord->getOrigRssver());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_rss_feeds` WHERE name=? AND rssVer=?';
        $params = array($objRecord->getName(), $objRecord->getRssver());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
