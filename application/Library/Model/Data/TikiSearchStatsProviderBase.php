<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiSearchStatsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiSearchStats($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiSearchStats($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($term)
    {
        $strSql = 'SELECT * FROM `tiki_search_stats` WHERE term=?';
        $params = array($term);
        return Model_Data_TikiSearchStatsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_search_stats` (
            term,
            hits
        ) VALUES  (?, ?)';
        $params = array($objRecord->getTerm(),
            $objRecord->getHits()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_search_stats` (
            term,
            hits
        ) VALUES  (?, ?)';
        $params = array($objRecord->getTerm(),
            $objRecord->getHits()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_search_stats` SET 
            term=?,
            hits=?
        WHERE term=?';
        $arrSetParams = array(
            $objRecord->getTerm(),
            $objRecord->getHits()
        );
        $arrKeyParams = array($objRecord->getOrigTerm());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_search_stats` WHERE term=?';
        $params = array($objRecord->getTerm());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
