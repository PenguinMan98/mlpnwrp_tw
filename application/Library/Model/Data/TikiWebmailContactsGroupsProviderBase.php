<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiWebmailContactsGroupsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiWebmailContactsGroups($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiWebmailContactsGroups($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($contactId, $groupName)
    {
        $strSql = 'SELECT * FROM `tiki_webmail_contacts_groups` WHERE contactId=? AND groupName=?';
        $params = array($contactId, $groupName);
        return Model_Data_TikiWebmailContactsGroupsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_webmail_contacts_groups` (
            contactId,
            groupName
        ) VALUES  (?, ?)';
        $params = array($objRecord->getContactid(),
            $objRecord->getGroupname()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_webmail_contacts_groups` (
            contactId,
            groupName
        ) VALUES  (?, ?)';
        $params = array($objRecord->getContactid(),
            $objRecord->getGroupname()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_webmail_contacts_groups` SET 
            contactId=?,
            groupName=?
        WHERE contactId=? AND groupName=?';
        $arrSetParams = array(
            $objRecord->getContactid(),
            $objRecord->getGroupname()
        );
        $arrKeyParams = array($objRecord->getOrigContactid(), $objRecord->getOrigGroupname());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_webmail_contacts_groups` WHERE contactId=? AND groupName=?';
        $params = array($objRecord->getContactid(), $objRecord->getGroupname());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
