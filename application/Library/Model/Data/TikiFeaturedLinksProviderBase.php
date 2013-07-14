<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiFeaturedLinksProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiFeaturedLinks($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiFeaturedLinks($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($url)
    {
        $strSql = 'SELECT * FROM `tiki_featured_links` WHERE url=?';
        $params = array($url);
        return Model_Data_TikiFeaturedLinksProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_featured_links` (
            url,
            title,
            description,
            hits,
            position,
            type
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUrl(),
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getHits(),
            $objRecord->getPosition(),
            $objRecord->getType()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_featured_links` (
            url,
            title,
            description,
            hits,
            position,
            type
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUrl(),
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getHits(),
            $objRecord->getPosition(),
            $objRecord->getType()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_featured_links` SET 
            url=?,
            title=?,
            description=?,
            hits=?,
            position=?,
            type=?
        WHERE url=?';
        $arrSetParams = array(
            $objRecord->getUrl(),
            $objRecord->getTitle(),
            $objRecord->getDescription(),
            $objRecord->getHits(),
            $objRecord->getPosition(),
            $objRecord->getType()
        );
        $arrKeyParams = array($objRecord->getOrigUrl());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_featured_links` WHERE url=?';
        $params = array($objRecord->getUrl());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
