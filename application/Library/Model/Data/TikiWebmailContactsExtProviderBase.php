<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiWebmailContactsExtProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiWebmailContactsExt($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiWebmailContactsExt($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($contactId, $value, $hidden, $fieldId)
    {
        $strSql = 'SELECT * FROM `tiki_webmail_contacts_ext` WHERE contactId=? AND value=? AND hidden=? AND fieldId=?';
        $params = array($contactId, $value, $hidden, $fieldId);
        return Model_Data_TikiWebmailContactsExtProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_webmail_contacts_ext` (
            contactId,
            value,
            hidden,
            fieldId
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getContactid(),
            $objRecord->getValue(),
            $objRecord->getHidden(),
            $objRecord->getFieldid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_webmail_contacts_ext` (
            contactId,
            value,
            hidden,
            fieldId
        ) VALUES  (?, ?, ?, ?)';
        $params = array($objRecord->getContactid(),
            $objRecord->getValue(),
            $objRecord->getHidden(),
            $objRecord->getFieldid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_webmail_contacts_ext` SET 
            contactId=?,
            value=?,
            hidden=?,
            fieldId=?
        WHERE contactId=? AND value=? AND hidden=? AND fieldId=?';
        $arrSetParams = array(
            $objRecord->getContactid(),
            $objRecord->getValue(),
            $objRecord->getHidden(),
            $objRecord->getFieldid()
        );
        $arrKeyParams = array($objRecord->getOrigContactid(), $objRecord->getOrigValue(), $objRecord->getOrigHidden(), $objRecord->getOrigFieldid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_webmail_contacts_ext` WHERE contactId=? AND value=? AND hidden=? AND fieldId=?';
        $params = array($objRecord->getContactid(), $objRecord->getValue(), $objRecord->getHidden(), $objRecord->getFieldid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
