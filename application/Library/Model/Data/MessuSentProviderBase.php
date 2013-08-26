<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_MessuSentProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_MessuSent($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_MessuSent($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($msgId)
    {
        $strSql = 'SELECT * FROM `messu_sent` WHERE msgId=?';
        $params = array($msgId);
        return Model_Data_MessuSentProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `messu_sent` (
            msgId,
            user,
            user_from,
            user_to,
            user_cc,
            user_bcc,
            subject,
            body,
            hash,
            replyto_hash,
            date,
            isRead,
            isReplied,
            isFlagged,
            priority
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUser(),
            $objRecord->getUserFrom(),
            $objRecord->getUserTo(),
            $objRecord->getUserCc(),
            $objRecord->getUserBcc(),
            $objRecord->getSubject(),
            $objRecord->getBody(),
            $objRecord->getHash(),
            $objRecord->getReplytoHash(),
            $objRecord->getDate(),
            $objRecord->getIsread(),
            $objRecord->getIsreplied(),
            $objRecord->getIsflagged(),
            $objRecord->getPriority()
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
        $strSql = ' REPLACE INTO `messu_sent` (
            msgId,
            user,
            user_from,
            user_to,
            user_cc,
            user_bcc,
            subject,
            body,
            hash,
            replyto_hash,
            date,
            isRead,
            isReplied,
            isFlagged,
            priority
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getUser(),
            $objRecord->getUserFrom(),
            $objRecord->getUserTo(),
            $objRecord->getUserCc(),
            $objRecord->getUserBcc(),
            $objRecord->getSubject(),
            $objRecord->getBody(),
            $objRecord->getHash(),
            $objRecord->getReplytoHash(),
            $objRecord->getDate(),
            $objRecord->getIsread(),
            $objRecord->getIsreplied(),
            $objRecord->getIsflagged(),
            $objRecord->getPriority()
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
        $strSql = 'UPDATE `messu_sent` SET 
            msgId=?,
            user=?,
            user_from=?,
            user_to=?,
            user_cc=?,
            user_bcc=?,
            subject=?,
            body=?,
            hash=?,
            replyto_hash=?,
            date=?,
            isRead=?,
            isReplied=?,
            isFlagged=?,
            priority=?
        WHERE msgId=?';
        $arrSetParams = array(
            $objRecord->getMsgid(),
            $objRecord->getUser(),
            $objRecord->getUserFrom(),
            $objRecord->getUserTo(),
            $objRecord->getUserCc(),
            $objRecord->getUserBcc(),
            $objRecord->getSubject(),
            $objRecord->getBody(),
            $objRecord->getHash(),
            $objRecord->getReplytoHash(),
            $objRecord->getDate(),
            $objRecord->getIsread(),
            $objRecord->getIsreplied(),
            $objRecord->getIsflagged(),
            $objRecord->getPriority()
        );
        $arrKeyParams = array($objRecord->getOrigMsgid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `messu_sent` WHERE msgId=?';
        $params = array($objRecord->getMsgid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
