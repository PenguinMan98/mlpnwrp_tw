<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPageviewsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPageviews($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPageviews($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($day)
    {
        $strSql = 'SELECT * FROM `tiki_pageviews` WHERE day=?';
        $params = array($day);
        return Model_Data_TikiPageviewsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_pageviews` (
            day,
            pageviews
        ) VALUES  (?, ?)';
        $params = array($objRecord->getDay(),
            $objRecord->getPageviews()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_pageviews` (
            day,
            pageviews
        ) VALUES  (?, ?)';
        $params = array($objRecord->getDay(),
            $objRecord->getPageviews()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_pageviews` SET 
            day=?,
            pageviews=?
        WHERE day=?';
        $arrSetParams = array(
            $objRecord->getDay(),
            $objRecord->getPageviews()
        );
        $arrKeyParams = array($objRecord->getOrigDay());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_pageviews` WHERE day=?';
        $params = array($objRecord->getDay());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
