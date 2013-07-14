<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiShoutboxProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiShoutbox($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiShoutbox($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($msgId)
    {
        $strSql = 'SELECT * FROM `tiki_shoutbox` WHERE msgId=?';
        $params = array($msgId);
        return Model_Data_TikiShoutboxProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_shoutbox` (
            msgId,
            message,
            timestamp,
            user,
            hash,
            tweetId
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMessage(),
            $objRecord->getTimestamp(),
            $objRecord->getUser(),
            $objRecord->getHash(),
            $objRecord->getTweetid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setMsgid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_shoutbox` (
            msgId,
            message,
            timestamp,
            user,
            hash,
            tweetId
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getMessage(),
            $objRecord->getTimestamp(),
            $objRecord->getUser(),
            $objRecord->getHash(),
            $objRecord->getTweetid()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setMsgid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_shoutbox` SET 
            msgId=?,
            message=?,
            timestamp=?,
            user=?,
            hash=?,
            tweetId=?
        WHERE msgId=?';
        $arrSetParams = array(
            $objRecord->getMsgid(),
            $objRecord->getMessage(),
            $objRecord->getTimestamp(),
            $objRecord->getUser(),
            $objRecord->getHash(),
            $objRecord->getTweetid()
        );
        $arrKeyParams = array($objRecord->getOrigMsgid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_shoutbox` WHERE msgId=?';
        $params = array($objRecord->getMsgid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
