<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiWebmailContactsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiWebmailContacts($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiWebmailContacts($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($contactId)
    {
        $strSql = 'SELECT * FROM `tiki_webmail_contacts` WHERE contactId=?';
        $params = array($contactId);
        return Model_Data_TikiWebmailContactsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_webmail_contacts` (
            contactId,
            firstName,
            lastName,
            email,
            nickname,
            user
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getFirstname(),
            $objRecord->getLastname(),
            $objRecord->getEmail(),
            $objRecord->getNickname(),
            $objRecord->getUser()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setContactid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_webmail_contacts` (
            contactId,
            firstName,
            lastName,
            email,
            nickname,
            user
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getFirstname(),
            $objRecord->getLastname(),
            $objRecord->getEmail(),
            $objRecord->getNickname(),
            $objRecord->getUser()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setContactid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_webmail_contacts` SET 
            contactId=?,
            firstName=?,
            lastName=?,
            email=?,
            nickname=?,
            user=?
        WHERE contactId=?';
        $arrSetParams = array(
            $objRecord->getContactid(),
            $objRecord->getFirstname(),
            $objRecord->getLastname(),
            $objRecord->getEmail(),
            $objRecord->getNickname(),
            $objRecord->getUser()
        );
        $arrKeyParams = array($objRecord->getOrigContactid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_webmail_contacts` WHERE contactId=?';
        $params = array($objRecord->getContactid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
