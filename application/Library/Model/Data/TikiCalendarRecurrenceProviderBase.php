<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCalendarRecurrenceProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCalendarRecurrence($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCalendarRecurrence($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($recurrenceId)
    {
        $strSql = 'SELECT * FROM `tiki_calendar_recurrence` WHERE recurrenceId=?';
        $params = array($recurrenceId);
        return Model_Data_TikiCalendarRecurrenceProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_calendar_recurrence` (
            recurrenceId,
            calendarId,
            start,
            end,
            allday,
            locationId,
            categoryId,
            nlId,
            priority,
            status,
            url,
            lang,
            name,
            description,
            weekly,
            weekday,
            monthly,
            dayOfMonth,
            yearly,
            dateOfYear,
            nbRecurrences,
            startPeriod,
            endPeriod,
            user,
            created,
            lastmodif
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCalendarid(),
            $objRecord->getStart(),
            $objRecord->getEnd(),
            $objRecord->getAllday(),
            $objRecord->getLocationid(),
            $objRecord->getCategoryid(),
            $objRecord->getNlid(),
            $objRecord->getPriority(),
            $objRecord->getStatus(),
            $objRecord->getUrl(),
            $objRecord->getLang(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getWeekly(),
            $objRecord->getWeekday(),
            $objRecord->getMonthly(),
            $objRecord->getDayofmonth(),
            $objRecord->getYearly(),
            $objRecord->getDateofyear(),
            $objRecord->getNbrecurrences(),
            $objRecord->getStartperiod(),
            $objRecord->getEndperiod(),
            $objRecord->getUser(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRecurrenceid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_calendar_recurrence` (
            recurrenceId,
            calendarId,
            start,
            end,
            allday,
            locationId,
            categoryId,
            nlId,
            priority,
            status,
            url,
            lang,
            name,
            description,
            weekly,
            weekday,
            monthly,
            dayOfMonth,
            yearly,
            dateOfYear,
            nbRecurrences,
            startPeriod,
            endPeriod,
            user,
            created,
            lastmodif
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCalendarid(),
            $objRecord->getStart(),
            $objRecord->getEnd(),
            $objRecord->getAllday(),
            $objRecord->getLocationid(),
            $objRecord->getCategoryid(),
            $objRecord->getNlid(),
            $objRecord->getPriority(),
            $objRecord->getStatus(),
            $objRecord->getUrl(),
            $objRecord->getLang(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getWeekly(),
            $objRecord->getWeekday(),
            $objRecord->getMonthly(),
            $objRecord->getDayofmonth(),
            $objRecord->getYearly(),
            $objRecord->getDateofyear(),
            $objRecord->getNbrecurrences(),
            $objRecord->getStartperiod(),
            $objRecord->getEndperiod(),
            $objRecord->getUser(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setRecurrenceid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_calendar_recurrence` SET 
            recurrenceId=?,
            calendarId=?,
            start=?,
            end=?,
            allday=?,
            locationId=?,
            categoryId=?,
            nlId=?,
            priority=?,
            status=?,
            url=?,
            lang=?,
            name=?,
            description=?,
            weekly=?,
            weekday=?,
            monthly=?,
            dayOfMonth=?,
            yearly=?,
            dateOfYear=?,
            nbRecurrences=?,
            startPeriod=?,
            endPeriod=?,
            user=?,
            created=?,
            lastmodif=?
        WHERE recurrenceId=?';
        $arrSetParams = array(
            $objRecord->getRecurrenceid(),
            $objRecord->getCalendarid(),
            $objRecord->getStart(),
            $objRecord->getEnd(),
            $objRecord->getAllday(),
            $objRecord->getLocationid(),
            $objRecord->getCategoryid(),
            $objRecord->getNlid(),
            $objRecord->getPriority(),
            $objRecord->getStatus(),
            $objRecord->getUrl(),
            $objRecord->getLang(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getWeekly(),
            $objRecord->getWeekday(),
            $objRecord->getMonthly(),
            $objRecord->getDayofmonth(),
            $objRecord->getYearly(),
            $objRecord->getDateofyear(),
            $objRecord->getNbrecurrences(),
            $objRecord->getStartperiod(),
            $objRecord->getEndperiod(),
            $objRecord->getUser(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif()
        );
        $arrKeyParams = array($objRecord->getOrigRecurrenceid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_calendar_recurrence` WHERE recurrenceId=?';
        $params = array($objRecord->getRecurrenceid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
