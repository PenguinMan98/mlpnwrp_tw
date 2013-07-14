<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiUrlShortenerProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiUrlShortener($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiUrlShortener($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($urlId)
    {
        $strSql = 'SELECT * FROM `tiki_url_shortener` WHERE urlId=?';
        $params = array($urlId);
        return Model_Data_TikiUrlShortenerProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_url_shortener` (
            urlId,
            user,
            longurl,
            longurl_hash,
            service,
            shorturl
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUser(),
            $objRecord->getLongurl(),
            $objRecord->getLongurlHash(),
            $objRecord->getService(),
            $objRecord->getShorturl()
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
        $strSql = ' REPLACE INTO `tiki_url_shortener` (
            urlId,
            user,
            longurl,
            longurl_hash,
            service,
            shorturl
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUser(),
            $objRecord->getLongurl(),
            $objRecord->getLongurlHash(),
            $objRecord->getService(),
            $objRecord->getShorturl()
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
        $strSql = 'UPDATE `tiki_url_shortener` SET 
            urlId=?,
            user=?,
            longurl=?,
            longurl_hash=?,
            service=?,
            shorturl=?
        WHERE urlId=?';
        $arrSetParams = array(
            $objRecord->getUrlid(),
            $objRecord->getUser(),
            $objRecord->getLongurl(),
            $objRecord->getLongurlHash(),
            $objRecord->getService(),
            $objRecord->getShorturl()
        );
        $arrKeyParams = array($objRecord->getOrigUrlid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_url_shortener` WHERE urlId=?';
        $params = array($objRecord->getUrlid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
