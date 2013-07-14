<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCalendarOptionsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCalendarOptions($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCalendarOptions($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($calendarId, $optionName)
    {
        $strSql = 'SELECT * FROM `tiki_calendar_options` WHERE calendarId=? AND optionName=?';
        $params = array($calendarId, $optionName);
        return Model_Data_TikiCalendarOptionsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_calendar_options` (
            calendarId,
            optionName,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getCalendarid(),
            $objRecord->getOptionname(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_calendar_options` (
            calendarId,
            optionName,
            value
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getCalendarid(),
            $objRecord->getOptionname(),
            $objRecord->getValue()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_calendar_options` SET 
            calendarId=?,
            optionName=?,
            value=?
        WHERE calendarId=? AND optionName=?';
        $arrSetParams = array(
            $objRecord->getCalendarid(),
            $objRecord->getOptionname(),
            $objRecord->getValue()
        );
        $arrKeyParams = array($objRecord->getOrigCalendarid(), $objRecord->getOrigOptionname());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_calendar_options` WHERE calendarId=? AND optionName=?';
        $params = array($objRecord->getCalendarid(), $objRecord->getOptionname());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
