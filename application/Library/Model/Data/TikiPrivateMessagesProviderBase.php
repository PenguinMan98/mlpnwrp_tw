<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiPrivateMessagesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiPrivateMessages($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiPrivateMessages($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($messageId)
    {
        $strSql = 'SELECT * FROM `tiki_private_messages` WHERE messageId=?';
        $params = array($messageId);
        return Model_Data_TikiPrivateMessagesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_private_messages` (
            messageId,
            toNickname,
            poster,
            timestamp,
            received,
            message
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTonickname(),
            $objRecord->getPoster(),
            $objRecord->getTimestamp(),
            $objRecord->getReceived(),
            $objRecord->getMessage()
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
        $strSql = ' REPLACE INTO `tiki_private_messages` (
            messageId,
            toNickname,
            poster,
            timestamp,
            received,
            message
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getTonickname(),
            $objRecord->getPoster(),
            $objRecord->getTimestamp(),
            $objRecord->getReceived(),
            $objRecord->getMessage()
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
        $strSql = 'UPDATE `tiki_private_messages` SET 
            messageId=?,
            toNickname=?,
            poster=?,
            timestamp=?,
            received=?,
            message=?
        WHERE messageId=?';
        $arrSetParams = array(
            $objRecord->getMessageid(),
            $objRecord->getTonickname(),
            $objRecord->getPoster(),
            $objRecord->getTimestamp(),
            $objRecord->getReceived(),
            $objRecord->getMessage()
        );
        $arrKeyParams = array($objRecord->getOrigMessageid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_private_messages` WHERE messageId=?';
        $params = array($objRecord->getMessageid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
