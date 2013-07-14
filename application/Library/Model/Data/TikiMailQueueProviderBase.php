<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiMailQueueProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiMailQueue($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiMailQueue($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($messageId)
    {
        $strSql = 'SELECT * FROM `tiki_mail_queue` WHERE messageId=?';
        $params = array($messageId);
        return Model_Data_TikiMailQueueProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_mail_queue` (
            messageId,
            message,
            attempts
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMessage(),
            $objRecord->getAttempts()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setMessageid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_mail_queue` (
            messageId,
            message,
            attempts
        ) VALUES  (?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMessage(),
            $objRecord->getAttempts()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setMessageid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_mail_queue` SET 
            messageId=?,
            message=?,
            attempts=?
        WHERE messageId=?';
        $arrSetParams = array(
            $objRecord->getMessageid(),
            $objRecord->getMessage(),
            $objRecord->getAttempts()
        );
        $arrKeyParams = array($objRecord->getOrigMessageid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_mail_queue` WHERE messageId=?';
        $params = array($objRecord->getMessageid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
