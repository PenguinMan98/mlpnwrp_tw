<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUserBookmarksUrlsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUserBookmarksUrls($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUserBookmarksUrls($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($urlId)
    {
        $strSql = 'SELECT * FROM `tiki_user_bookmarks_urls` WHERE urlId=?';
        $params = array($urlId);
        return Model_Data_TikiUserBookmarksUrlsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_user_bookmarks_urls` (
            urlId,
            name,
            url,
            data,
            lastUpdated,
            folderId,
            user
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getUrl(),
            $objRecord->getData(),
            $objRecord->getLastupdated(),
            $objRecord->getFolderid(),
            $objRecord->getUser()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setUrlid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_user_bookmarks_urls` (
            urlId,
            name,
            url,
            data,
            lastUpdated,
            folderId,
            user
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getUrl(),
            $objRecord->getData(),
            $objRecord->getLastupdated(),
            $objRecord->getFolderid(),
            $objRecord->getUser()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setUrlid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_user_bookmarks_urls` SET 
            urlId=?,
            name=?,
            url=?,
            data=?,
            lastUpdated=?,
            folderId=?,
            user=?
        WHERE urlId=?';
        $arrSetParams = array(
            $objRecord->getUrlid(),
            $objRecord->getName(),
            $objRecord->getUrl(),
            $objRecord->getData(),
            $objRecord->getLastupdated(),
            $objRecord->getFolderid(),
            $objRecord->getUser()
        );
        $arrKeyParams = array($objRecord->getOrigUrlid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_user_bookmarks_urls` WHERE urlId=?';
        $params = array($objRecord->getUrlid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
