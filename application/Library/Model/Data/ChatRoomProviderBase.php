<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_ChatRoomProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_ChatRoom($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_ChatRoom($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($chat_room_id)
    {
        $strSql = 'SELECT * FROM `chat_room` WHERE chat_room_id=?';
        $params = array($chat_room_id);
        return Model_Data_ChatRoomProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `chat_room` (
            chat_room_id,
            room_name,
            description,
            permission_level,
            chat_room_type_id,
            is_active,
            display_order,
        	game_notes,
        	weather_group,
        	weather_state
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRoomName(),
            $objRecord->getDescription(),
            $objRecord->getPermissionLevel(),
            $objRecord->getChatRoomTypeId(),
            $objRecord->getIsActive(),
            $objRecord->getDisplayOrder(),
        	$objRecord->getGameNotes(),
        	$objRecord->getWeatherGroup(),
        	$objRecord->getWeatherState()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setChatRoomId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `chat_room` (
            chat_room_id,
            room_name,
            description,
            permission_level,
            chat_room_type_id,
            is_active,
            display_order,
        	game_notes,
        	weather_group,
        	weather_state
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getRoomName(),
            $objRecord->getDescription(),
            $objRecord->getPermissionLevel(),
            $objRecord->getChatRoomTypeId(),
            $objRecord->getIsActive(),
            $objRecord->getDisplayOrder(),
        	$objRecord->getGameNotes(),
        	$objRecord->getWeatherGroup(),
        	$objRecord->getWeatherState()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setChatRoomId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `chat_room` SET
            chat_room_id=?,
            room_name=?,
            description=?,
            permission_level=?,
            chat_room_type_id=?,
            is_active=?,
            display_order=?,
        	game_notes=?,
        	weather_group=?,
        	weather_state=?
        WHERE chat_room_id=?';
        $arrSetParams = array(
            $objRecord->getChatRoomId(),
            $objRecord->getRoomName(),
            $objRecord->getDescription(),
            $objRecord->getPermissionLevel(),
            $objRecord->getChatRoomTypeId(),
            $objRecord->getIsActive(),
            $objRecord->getDisplayOrder(),
        	$objRecord->getGameNotes(),
        	$objRecord->getWeatherGroup(),
        	$objRecord->getWeatherState()
        );
        $arrKeyParams = array($objRecord->getOrigChatRoomId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `chat_room` WHERE chat_room_id=?';
        $params = array($objRecord->getChatRoomId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
