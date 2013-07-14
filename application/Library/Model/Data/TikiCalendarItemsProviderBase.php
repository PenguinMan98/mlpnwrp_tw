<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCalendarItemsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCalendarItems($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCalendarItems($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($calitemId)
    {
        $strSql = 'SELECT * FROM `tiki_calendar_items` WHERE calitemId=?';
        $params = array($calitemId);
        return Model_Data_TikiCalendarItemsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_calendar_items` (
            calitemId,
            calendarId,
            start,
            end,
            locationId,
            categoryId,
            nlId,
            priority,
            status,
            url,
            lang,
            name,
            description,
            recurrenceId,
            changed,
            user,
            created,
            lastmodif,
            allday
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCalendarid(),
            $objRecord->getStart(),
            $objRecord->getEnd(),
            $objRecord->getLocationid(),
            $objRecord->getCategoryid(),
            $objRecord->getNlid(),
            $objRecord->getPriority(),
            $objRecord->getStatus(),
            $objRecord->getUrl(),
            $objRecord->getLang(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getRecurrenceid(),
            $objRecord->getChanged(),
            $objRecord->getUser(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getAllday()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCalitemid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_calendar_items` (
            calitemId,
            calendarId,
            start,
            end,
            locationId,
            categoryId,
            nlId,
            priority,
            status,
            url,
            lang,
            name,
            description,
            recurrenceId,
            changed,
            user,
            created,
            lastmodif,
            allday
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCalendarid(),
            $objRecord->getStart(),
            $objRecord->getEnd(),
            $objRecord->getLocationid(),
            $objRecord->getCategoryid(),
            $objRecord->getNlid(),
            $objRecord->getPriority(),
            $objRecord->getStatus(),
            $objRecord->getUrl(),
            $objRecord->getLang(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getRecurrenceid(),
            $objRecord->getChanged(),
            $objRecord->getUser(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getAllday()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCalitemid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_calendar_items` SET 
            calitemId=?,
            calendarId=?,
            start=?,
            end=?,
            locationId=?,
            categoryId=?,
            nlId=?,
            priority=?,
            status=?,
            url=?,
            lang=?,
            name=?,
            description=?,
            recurrenceId=?,
            changed=?,
            user=?,
            created=?,
            lastmodif=?,
            allday=?
        WHERE calitemId=?';
        $arrSetParams = array(
            $objRecord->getCalitemid(),
            $objRecord->getCalendarid(),
            $objRecord->getStart(),
            $objRecord->getEnd(),
            $objRecord->getLocationid(),
            $objRecord->getCategoryid(),
            $objRecord->getNlid(),
            $objRecord->getPriority(),
            $objRecord->getStatus(),
            $objRecord->getUrl(),
            $objRecord->getLang(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getRecurrenceid(),
            $objRecord->getChanged(),
            $objRecord->getUser(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getAllday()
        );
        $arrKeyParams = array($objRecord->getOrigCalitemid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_calendar_items` WHERE calitemId=?';
        $params = array($objRecord->getCalitemid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
