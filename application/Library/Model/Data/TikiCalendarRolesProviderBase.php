<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiCalendarRolesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiCalendarRoles($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiCalendarRoles($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($calitemId, $username, $role)
    {
        $strSql = 'SELECT * FROM `tiki_calendar_roles` WHERE calitemId=? AND username=? AND role=?';
        $params = array($calitemId, $username, $role);
        return Model_Data_TikiCalendarRolesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_calendar_roles` (
            calitemId,
            username,
            role
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getCalitemid(),
            $objRecord->getUsername(),
            $objRecord->getRole()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_calendar_roles` (
            calitemId,
            username,
            role
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getCalitemid(),
            $objRecord->getUsername(),
            $objRecord->getRole()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_calendar_roles` SET 
            calitemId=?,
            username=?,
            role=?
        WHERE calitemId=? AND username=? AND role=?';
        $arrSetParams = array(
            $objRecord->getCalitemid(),
            $objRecord->getUsername(),
            $objRecord->getRole()
        );
        $arrKeyParams = array($objRecord->getOrigCalitemid(), $objRecord->getOrigUsername(), $objRecord->getOrigRole());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_calendar_roles` WHERE calitemId=? AND username=? AND role=?';
        $params = array($objRecord->getCalitemid(), $objRecord->getUsername(), $objRecord->getRole());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
