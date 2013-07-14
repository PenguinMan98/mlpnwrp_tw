<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiLinksProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiLinks($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiLinks($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($fromPage, $toPage)
    {
        $strSql = 'SELECT * FROM `tiki_links` WHERE fromPage=? AND toPage=?';
        $params = array($fromPage, $toPage);
        return Model_Data_TikiLinksProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_links` (
            fromPage,
            toPage
        ) VALUES  (?, ?)';
        $params = array($objRecord->getFrompage(),
            $objRecord->getTopage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_links` (
            fromPage,
            toPage
        ) VALUES  (?, ?)';
        $params = array($objRecord->getFrompage(),
            $objRecord->getTopage()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_links` SET 
            fromPage=?,
            toPage=?
        WHERE fromPage=? AND toPage=?';
        $arrSetParams = array(
            $objRecord->getFrompage(),
            $objRecord->getTopage()
        );
        $arrKeyParams = array($objRecord->getOrigFrompage(), $objRecord->getOrigTopage());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_links` WHERE fromPage=? AND toPage=?';
        $params = array($objRecord->getFrompage(), $objRecord->getTopage());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
