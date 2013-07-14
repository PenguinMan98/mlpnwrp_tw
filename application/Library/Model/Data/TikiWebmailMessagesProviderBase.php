<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiWebmailMessagesProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiWebmailMessages($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiWebmailMessages($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($accountId, $mailId)
    {
        $strSql = 'SELECT * FROM `tiki_webmail_messages` WHERE accountId=? AND mailId=?';
        $params = array($accountId, $mailId);
        return Model_Data_TikiWebmailMessagesProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_webmail_messages` (
            accountId,
            mailId,
            user,
            isRead,
            isReplied,
            isFlagged,
            flaggedMsg
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getAccountid(),
            $objRecord->getMailid(),
            $objRecord->getUser(),
            $objRecord->getIsread(),
            $objRecord->getIsreplied(),
            $objRecord->getIsflagged(),
            $objRecord->getFlaggedmsg()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_webmail_messages` (
            accountId,
            mailId,
            user,
            isRead,
            isReplied,
            isFlagged,
            flaggedMsg
        ) VALUES  (?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getAccountid(),
            $objRecord->getMailid(),
            $objRecord->getUser(),
            $objRecord->getIsread(),
            $objRecord->getIsreplied(),
            $objRecord->getIsflagged(),
            $objRecord->getFlaggedmsg()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_webmail_messages` SET 
            accountId=?,
            mailId=?,
            user=?,
            isRead=?,
            isReplied=?,
            isFlagged=?,
            flaggedMsg=?
        WHERE accountId=? AND mailId=?';
        $arrSetParams = array(
            $objRecord->getAccountid(),
            $objRecord->getMailid(),
            $objRecord->getUser(),
            $objRecord->getIsread(),
            $objRecord->getIsreplied(),
            $objRecord->getIsflagged(),
            $objRecord->getFlaggedmsg()
        );
        $arrKeyParams = array($objRecord->getOrigAccountid(), $objRecord->getOrigMailid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_webmail_messages` WHERE accountId=? AND mailId=?';
        $params = array($objRecord->getAccountid(), $objRecord->getMailid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
