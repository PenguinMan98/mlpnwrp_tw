<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiNewsletterPagesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiNewsletterPages($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiNewsletterPages($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($nlId, $wikiPageName)
    {
        $strSql = 'SELECT * FROM `tiki_newsletter_pages` WHERE nlId=? AND wikiPageName=?';
        $params = array($nlId, $wikiPageName);
        return Model_Data_TikiNewsletterPagesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_newsletter_pages` (
            nlId,
            wikiPageName,
            validateAddrs,
            addToList
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getNlid(),
            $objRecord->getWikipagename(),
            $objRecord->getValidateaddrs(),
            $objRecord->getAddtolist()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_newsletter_pages` (
            nlId,
            wikiPageName,
            validateAddrs,
            addToList
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getNlid(),
            $objRecord->getWikipagename(),
            $objRecord->getValidateaddrs(),
            $objRecord->getAddtolist()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_newsletter_pages` SET 
            nlId=?,
            wikiPageName=?,
            validateAddrs=?,
            addToList=?
        WHERE nlId=? AND wikiPageName=?';
        $arrSetParams = array(
            $objRecord->getNlid(),
            $objRecord->getWikipagename(),
            $objRecord->getValidateaddrs(),
            $objRecord->getAddtolist()
        );
        $arrKeyParams = array($objRecord->getOrigNlid(), $objRecord->getOrigWikipagename());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_newsletter_pages` WHERE nlId=? AND wikiPageName=?';
        $params = array($objRecord->getNlid(), $objRecord->getWikipagename());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
