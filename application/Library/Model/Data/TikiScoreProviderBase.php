<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiScoreProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiScore($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiScore($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($event)
    {
        $strSql = 'SELECT * FROM `tiki_score` WHERE event=?';
        $params = array($event);
        return Model_Data_TikiScoreProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_score` (
            event,
            score,
            expiration
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getEvent(),
            $objRecord->getScore(),
            $objRecord->getExpiration()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_score` (
            event,
            score,
            expiration
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getEvent(),
            $objRecord->getScore(),
            $objRecord->getExpiration()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_score` SET 
            event=?,
            score=?,
            expiration=?
        WHERE event=?';
        $arrSetParams = array(
            $objRecord->getEvent(),
            $objRecord->getScore(),
            $objRecord->getExpiration()
        );
        $arrKeyParams = array($objRecord->getOrigEvent());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_score` WHERE event=?';
        $params = array($objRecord->getEvent());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
