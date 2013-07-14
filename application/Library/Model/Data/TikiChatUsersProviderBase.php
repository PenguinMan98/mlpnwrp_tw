<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiChatUsersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiChatUsers($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiChatUsers($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($nickname, $channelId)
    {
        $strSql = 'SELECT * FROM `tiki_chat_users` WHERE nickname=? AND channelId=?';
        $params = array($nickname, $channelId);
        return Model_Data_TikiChatUsersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_chat_users` (
            nickname,
            channelId,
            timestamp
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getNickname(),
            $objRecord->getChannelid(),
            $objRecord->getTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_chat_users` (
            nickname,
            channelId,
            timestamp
        ) VALUES  (?, ?, ?)';
        $params = array($objRecord->getNickname(),
            $objRecord->getChannelid(),
            $objRecord->getTimestamp()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_chat_users` SET 
            nickname=?,
            channelId=?,
            timestamp=?
        WHERE nickname=? AND channelId=?';
        $arrSetParams = array(
            $objRecord->getNickname(),
            $objRecord->getChannelid(),
            $objRecord->getTimestamp()
        );
        $arrKeyParams = array($objRecord->getOrigNickname(), $objRecord->getOrigChannelid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_chat_users` WHERE nickname=? AND channelId=?';
        $params = array($objRecord->getNickname(), $objRecord->getChannelid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
