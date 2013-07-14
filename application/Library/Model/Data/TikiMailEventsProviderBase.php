<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiMailEventsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiMailEvents($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiMailEvents($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($event, $object, $email)
    {
        $strSql = 'SELECT * FROM `tiki_mail_events` WHERE event=? AND object=? AND email=?';
        $params = array($event, $object, $email);
        return Model_Data_TikiMailEventsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_mail_events` (
            event,
            object,
            email
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getEvent(),
            $objRecord->getObject(),
            $objRecord->getEmail()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_mail_events` (
            event,
            object,
            email
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getEvent(),
            $objRecord->getObject(),
            $objRecord->getEmail()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_mail_events` SET 
            event=?,
            object=?,
            email=?
        WHERE event=? AND object=? AND email=?';
        $arrSetParams = array(
            $objRecord->getEvent(),
            $objRecord->getObject(),
            $objRecord->getEmail()
        );
        $arrKeyParams = array($objRecord->getOrigEvent(), $objRecord->getOrigObject(), $objRecord->getOrigEmail());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_mail_events` WHERE event=? AND object=? AND email=?';
        $params = array($objRecord->getEvent(), $objRecord->getObject(), $objRecord->getEmail());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
