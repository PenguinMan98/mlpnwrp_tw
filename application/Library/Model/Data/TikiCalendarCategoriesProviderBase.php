<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCalendarCategoriesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCalendarCategories($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCalendarCategories($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($calcatId)
    {
        $strSql = 'SELECT * FROM `tiki_calendar_categories` WHERE calcatId=?';
        $params = array($calcatId);
        return Model_Data_TikiCalendarCategoriesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_calendar_categories` (
            calcatId,
            calendarId,
            name
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCalendarid(),
            $objRecord->getName()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCalcatid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_calendar_categories` (
            calcatId,
            calendarId,
            name
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCalendarid(),
            $objRecord->getName()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCalcatid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_calendar_categories` SET 
            calcatId=?,
            calendarId=?,
            name=?
        WHERE calcatId=?';
        $arrSetParams = array(
            $objRecord->getCalcatid(),
            $objRecord->getCalendarid(),
            $objRecord->getName()
        );
        $arrKeyParams = array($objRecord->getOrigCalcatid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_calendar_categories` WHERE calcatId=?';
        $params = array($objRecord->getCalcatid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
