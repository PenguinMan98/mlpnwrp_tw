<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_GuestUsersProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_GuestUsers($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_GuestUsers($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($handle)
    {
        $strSql = 'SELECT * FROM `guest_users` WHERE handle=?';
        $params = array($handle);
        return Model_Data_GuestUsersProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `guest_users` (
            handle,
            chat_room_id,
            user_id,
            created_date,
            guest_ip,
            chat_name_color,
            chat_text_color,
            chat_status_id,
            last_activity,
            last_status_request
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getHandle(),
            $objRecord->getChatRoomId(),
            $objRecord->getUserId(),
            $objRecord->getCreatedDate(),
            $objRecord->getGuestIp(),
            $objRecord->getChatNameColor(),
            $objRecord->getChatTextColor(),
            $objRecord->getChatStatusId(),
            $objRecord->getLastActivity(),
            $objRecord->getLastStatusRequest()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `guest_users` (
            handle,
            chat_room_id,
            user_id,
            created_date,
            guest_ip,
            chat_name_color,
            chat_text_color,
            chat_status_id,
            last_activity,
            last_status_request
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array($objRecord->getHandle(),
            $objRecord->getChatRoomId(),
            $objRecord->getUserId(),
            $objRecord->getCreatedDate(),
            $objRecord->getGuestIp(),
            $objRecord->getChatNameColor(),
            $objRecord->getChatTextColor(),
            $objRecord->getChatStatusId(),
            $objRecord->getLastActivity(),
            $objRecord->getLastStatusRequest()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `guest_users` SET 
            handle=?,
            chat_room_id=?,
            user_id=?,
            created_date=?,
            guest_ip=?,
            chat_name_color=?,
            chat_text_color=?,
            chat_status_id=?,
            last_activity=?,
            last_status_request=?
        WHERE handle=?';
        $arrSetParams = array(
            $objRecord->getHandle(),
            $objRecord->getChatRoomId(),
            $objRecord->getUserId(),
            $objRecord->getCreatedDate(),
            $objRecord->getGuestIp(),
            $objRecord->getChatNameColor(),
            $objRecord->getChatTextColor(),
            $objRecord->getChatStatusId(),
            $objRecord->getLastActivity(),
            $objRecord->getLastStatusRequest()
        );
        $arrKeyParams = array($objRecord->getOrigHandle());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `guest_users` WHERE handle=?';
        $params = array($objRecord->getHandle());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
