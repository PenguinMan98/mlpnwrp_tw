<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCalendarLocationsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCalendarLocations($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCalendarLocations($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($callocId)
    {
        $strSql = 'SELECT * FROM `tiki_calendar_locations` WHERE callocId=?';
        $params = array($callocId);
        return Model_Data_TikiCalendarLocationsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_calendar_locations` (
            callocId,
            calendarId,
            name,
            description
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCalendarid(),
            $objRecord->getName(),
            $objRecord->getDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCallocid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_calendar_locations` (
            callocId,
            calendarId,
            name,
            description
        ) VALUES  (?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCalendarid(),
            $objRecord->getName(),
            $objRecord->getDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCallocid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_calendar_locations` SET 
            callocId=?,
            calendarId=?,
            name=?,
            description=?
        WHERE callocId=?';
        $arrSetParams = array(
            $objRecord->getCallocid(),
            $objRecord->getCalendarid(),
            $objRecord->getName(),
            $objRecord->getDescription()
        );
        $arrKeyParams = array($objRecord->getOrigCallocid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_calendar_locations` WHERE callocId=?';
        $params = array($objRecord->getCallocid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
