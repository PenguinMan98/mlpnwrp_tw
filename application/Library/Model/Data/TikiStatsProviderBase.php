<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiStatsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiStats($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiStats($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($object, $type, $day)
    {
        $strSql = 'SELECT * FROM `tiki_stats` WHERE object=? AND type=? AND day=?';
        $params = array($object, $type, $day);
        return Model_Data_TikiStatsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_stats` (
            object,
            type,
            day,
            hits
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getObject(),
            $objRecord->getType(),
            $objRecord->getDay(),
            $objRecord->getHits()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_stats` (
            object,
            type,
            day,
            hits
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getObject(),
            $objRecord->getType(),
            $objRecord->getDay(),
            $objRecord->getHits()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_stats` SET 
            object=?,
            type=?,
            day=?,
            hits=?
        WHERE object=? AND type=? AND day=?';
        $arrSetParams = array(
            $objRecord->getObject(),
            $objRecord->getType(),
            $objRecord->getDay(),
            $objRecord->getHits()
        );
        $arrKeyParams = array($objRecord->getOrigObject(), $objRecord->getOrigType(), $objRecord->getOrigDay());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_stats` WHERE object=? AND type=? AND day=?';
        $params = array($objRecord->getObject(), $objRecord->getType(), $objRecord->getDay());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
