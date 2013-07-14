<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCalendarsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCalendars($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCalendars($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($calendarId)
    {
        $strSql = 'SELECT * FROM `tiki_calendars` WHERE calendarId=?';
        $params = array($calendarId);
        return Model_Data_TikiCalendarsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_calendars` (
            calendarId,
            name,
            description,
            user,
            customlocations,
            customcategories,
            customlanguages,
            custompriorities,
            customparticipants,
            customsubscription,
            customstatus,
            created,
            lastmodif,
            personal
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getUser(),
            $objRecord->getCustomlocations(),
            $objRecord->getCustomcategories(),
            $objRecord->getCustomlanguages(),
            $objRecord->getCustompriorities(),
            $objRecord->getCustomparticipants(),
            $objRecord->getCustomsubscription(),
            $objRecord->getCustomstatus(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getPersonal()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCalendarid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_calendars` (
            calendarId,
            name,
            description,
            user,
            customlocations,
            customcategories,
            customlanguages,
            custompriorities,
            customparticipants,
            customsubscription,
            customstatus,
            created,
            lastmodif,
            personal
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getUser(),
            $objRecord->getCustomlocations(),
            $objRecord->getCustomcategories(),
            $objRecord->getCustomlanguages(),
            $objRecord->getCustompriorities(),
            $objRecord->getCustomparticipants(),
            $objRecord->getCustomsubscription(),
            $objRecord->getCustomstatus(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getPersonal()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCalendarid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_calendars` SET 
            calendarId=?,
            name=?,
            description=?,
            user=?,
            customlocations=?,
            customcategories=?,
            customlanguages=?,
            custompriorities=?,
            customparticipants=?,
            customsubscription=?,
            customstatus=?,
            created=?,
            lastmodif=?,
            personal=?
        WHERE calendarId=?';
        $arrSetParams = array(
            $objRecord->getCalendarid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getUser(),
            $objRecord->getCustomlocations(),
            $objRecord->getCustomcategories(),
            $objRecord->getCustomlanguages(),
            $objRecord->getCustompriorities(),
            $objRecord->getCustomparticipants(),
            $objRecord->getCustomsubscription(),
            $objRecord->getCustomstatus(),
            $objRecord->getCreated(),
            $objRecord->getLastmodif(),
            $objRecord->getPersonal()
        );
        $arrKeyParams = array($objRecord->getOrigCalendarid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_calendars` WHERE calendarId=?';
        $params = array($objRecord->getCalendarid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
