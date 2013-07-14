<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiRssItemsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiRssItems($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiRssItems($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($rssItemId)
    {
        $strSql = 'SELECT * FROM `tiki_rss_items` WHERE rssItemId=?';
        $params = array($rssItemId);
        return Model_Data_TikiRssItemsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_rss_items` (
            rssItemId,
            rssId,
            guid,
            url,
            publication_date,
            title,
            author,
            description,
            content
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRssid(),
            $objRecord->getGuid(),
            $objRecord->getUrl(),
            $objRecord->getPublicationDate(),
            $objRecord->getTitle(),
            $objRecord->getAuthor(),
            $objRecord->getDescription(),
            $objRecord->getContent()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRssitemid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_rss_items` (
            rssItemId,
            rssId,
            guid,
            url,
            publication_date,
            title,
            author,
            description,
            content
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRssid(),
            $objRecord->getGuid(),
            $objRecord->getUrl(),
            $objRecord->getPublicationDate(),
            $objRecord->getTitle(),
            $objRecord->getAuthor(),
            $objRecord->getDescription(),
            $objRecord->getContent()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRssitemid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_rss_items` SET 
            rssItemId=?,
            rssId=?,
            guid=?,
            url=?,
            publication_date=?,
            title=?,
            author=?,
            description=?,
            content=?
        WHERE rssItemId=?';
        $arrSetParams = array(
            $objRecord->getRssitemid(),
            $objRecord->getRssid(),
            $objRecord->getGuid(),
            $objRecord->getUrl(),
            $objRecord->getPublicationDate(),
            $objRecord->getTitle(),
            $objRecord->getAuthor(),
            $objRecord->getDescription(),
            $objRecord->getContent()
        );
        $arrKeyParams = array($objRecord->getOrigRssitemid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_rss_items` WHERE rssItemId=?';
        $params = array($objRecord->getRssitemid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
