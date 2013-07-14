<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiWebmailContactsFieldsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiWebmailContactsFields($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiWebmailContactsFields($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($fieldId)
    {
        $strSql = 'SELECT * FROM `tiki_webmail_contacts_fields` WHERE fieldId=?';
        $params = array($fieldId);
        return Model_Data_TikiWebmailContactsFieldsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_webmail_contacts_fields` (
            user,
            fieldname,
            order,
            show,
            fieldId,
            flagsPublic
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getFieldname(),
            $objRecord->getOrder(),
            $objRecord->getShow(),
            
            0,
            $objRecord->getFlagspublic()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFieldid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_webmail_contacts_fields` (
            user,
            fieldname,
            order,
            show,
            fieldId,
            flagsPublic
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getUser(),
            $objRecord->getFieldname(),
            $objRecord->getOrder(),
            $objRecord->getShow(),
            
            0,
            $objRecord->getFlagspublic()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setFieldid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_webmail_contacts_fields` SET 
            user=?,
            fieldname=?,
            order=?,
            show=?,
            fieldId=?,
            flagsPublic=?
        WHERE fieldId=?';
        $arrSetParams = array(
            $objRecord->getUser(),
            $objRecord->getFieldname(),
            $objRecord->getOrder(),
            $objRecord->getShow(),
            $objRecord->getFieldid(),
            $objRecord->getFlagspublic()
        );
        $arrKeyParams = array($objRecord->getOrigFieldid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_webmail_contacts_fields` WHERE fieldId=?';
        $params = array($objRecord->getFieldid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
