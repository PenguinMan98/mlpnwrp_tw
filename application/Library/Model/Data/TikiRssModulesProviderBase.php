<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiRssModulesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiRssModules($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiRssModules($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($rssId)
    {
        $strSql = 'SELECT * FROM `tiki_rss_modules` WHERE rssId=?';
        $params = array($rssId);
        return Model_Data_TikiRssModulesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_rss_modules` (
            rssId,
            name,
            description,
            url,
            refresh,
            lastUpdated,
            showTitle,
            showPubDate,
            sitetitle,
            siteurl,
            actions
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getUrl(),
            $objRecord->getRefresh(),
            $objRecord->getLastupdated(),
            $objRecord->getShowtitle(),
            $objRecord->getShowpubdate(),
            $objRecord->getSitetitle(),
            $objRecord->getSiteurl(),
            $objRecord->getActions()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRssid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_rss_modules` (
            rssId,
            name,
            description,
            url,
            refresh,
            lastUpdated,
            showTitle,
            showPubDate,
            sitetitle,
            siteurl,
            actions
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getUrl(),
            $objRecord->getRefresh(),
            $objRecord->getLastupdated(),
            $objRecord->getShowtitle(),
            $objRecord->getShowpubdate(),
            $objRecord->getSitetitle(),
            $objRecord->getSiteurl(),
            $objRecord->getActions()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRssid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_rss_modules` SET 
            rssId=?,
            name=?,
            description=?,
            url=?,
            refresh=?,
            lastUpdated=?,
            showTitle=?,
            showPubDate=?,
            sitetitle=?,
            siteurl=?,
            actions=?
        WHERE rssId=?';
        $arrSetParams = array(
            $objRecord->getRssid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getUrl(),
            $objRecord->getRefresh(),
            $objRecord->getLastupdated(),
            $objRecord->getShowtitle(),
            $objRecord->getShowpubdate(),
            $objRecord->getSitetitle(),
            $objRecord->getSiteurl(),
            $objRecord->getActions()
        );
        $arrKeyParams = array($objRecord->getOrigRssid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_rss_modules` WHERE rssId=?';
        $params = array($objRecord->getRssid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
