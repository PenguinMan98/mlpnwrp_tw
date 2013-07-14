<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_TikiChatChannelsProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_TikiChatChannels($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_TikiChatChannels($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($channelId)
    {
        $strSql = 'SELECT * FROM `tiki_chat_channels` WHERE channelId=?';
        $params = array($channelId);
        return Model_Data_TikiChatChannelsProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `tiki_chat_channels` (
            channelId,
            name,
            description,
            max_users,
            mode,
            moderator,
            active,
            refresh
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getMaxUsers(),
            $objRecord->getMode(),
            $objRecord->getModerator(),
            $objRecord->getActive(),
            $objRecord->getRefresh()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setChannelid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `tiki_chat_channels` (
            channelId,
            name,
            description,
            max_users,
            mode,
            moderator,
            active,
            refresh
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getMaxUsers(),
            $objRecord->getMode(),
            $objRecord->getModerator(),
            $objRecord->getActive(),
            $objRecord->getRefresh()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setChannelid(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `tiki_chat_channels` SET 
            channelId=?,
            name=?,
            description=?,
            max_users=?,
            mode=?,
            moderator=?,
            active=?,
            refresh=?
        WHERE channelId=?';
        $arrSetParams = array(
            $objRecord->getChannelid(),
            $objRecord->getName(),
            $objRecord->getDescription(),
            $objRecord->getMaxUsers(),
            $objRecord->getMode(),
            $objRecord->getModerator(),
            $objRecord->getActive(),
            $objRecord->getRefresh()
        );
        $arrKeyParams = array($objRecord->getOrigChannelid());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `tiki_chat_channels` WHERE channelId=?';
        $params = array($objRecord->getChannelid());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
