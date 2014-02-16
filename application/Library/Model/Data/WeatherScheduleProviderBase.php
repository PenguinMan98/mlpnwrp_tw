<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_WeatherScheduleProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_WeatherSchedule($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_WeatherSchedule($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($weather_schedule_id)
    {
        $strSql = 'SELECT * FROM `weather_schedule` WHERE weather_schedule_id=?';
        $params = array($weather_schedule_id);
        return Model_Data_WeatherScheduleProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `weather_schedule` (
            weather_schedule_id,
            start_ts,
            end_ts,
            weather_state_id,
            chat_room_id,
            chat_room_type_id
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getStartTs(),
            $objRecord->getEndTs(),
            $objRecord->getWeatherStateId(),
            $objRecord->getChatRoomId(),
            $objRecord->getChatRoomTypeId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setWeatherScheduleId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `weather_schedule` (
            weather_schedule_id,
            start_ts,
            end_ts,
            weather_state_id,
            chat_room_id,
            chat_room_type_id
        ) VALUES  (?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getStartTs(),
            $objRecord->getEndTs(),
            $objRecord->getWeatherStateId(),
            $objRecord->getChatRoomId(),
            $objRecord->getChatRoomTypeId()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setWeatherScheduleId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `weather_schedule` SET 
            weather_schedule_id=?,
            start_ts=?,
            end_ts=?,
            weather_state_id=?,
            chat_room_id=?,
            chat_room_type_id=?
        WHERE weather_schedule_id=?';
        $arrSetParams = array(
            $objRecord->getWeatherScheduleId(),
            $objRecord->getStartTs(),
            $objRecord->getEndTs(),
            $objRecord->getWeatherStateId(),
            $objRecord->getChatRoomId(),
            $objRecord->getChatRoomTypeId()
        );
        $arrKeyParams = array($objRecord->getOrigWeatherScheduleId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `weather_schedule` WHERE weather_schedule_id=?';
        $params = array($objRecord->getWeatherScheduleId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
