<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiTrackerOptionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiTrackerOptions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiTrackerOptions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($trackerId, $name)
    {
        $strSql = 'SELECT * FROM `tiki_tracker_options` WHERE trackerId=? AND name=?';
        $params = array($trackerId, $name);
        return Model_Data_TikiTrackerOptionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_tracker_options` (
            trackerId,
            name,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getTrackerid(),
            $objRecord->getName(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_tracker_options` (
            trackerId,
            name,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getTrackerid(),
            $objRecord->getName(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_tracker_options` SET 
            trackerId=?,
            name=?,
            value=?
        WHERE trackerId=? AND name=?';
        $arrSetParams = array(
            $objRecord->getTrackerid(),
            $objRecord->getName(),
            $objRecord->getValue()
        );
        $arrKeyParams = array($objRecord->getOrigTrackerid(), $objRecord->getOrigName());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_tracker_options` WHERE trackerId=? AND name=?';
        $params = array($objRecord->getTrackerid(), $objRecord->getName());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
