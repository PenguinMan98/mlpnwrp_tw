<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_WeatherStateProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_WeatherState($arrResults[0]);
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
                $arrRecordList[] = new Model_Structure_WeatherState($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($weather_state_id)
    {
        $strSql = 'SELECT * FROM `weather_state` WHERE weather_state_id=?';
        $params = array($weather_state_id);
        return Model_Data_WeatherStateProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `weather_state` (
            weather_state_id,
            name,
            icon,
            night_icon,
            summer_day_description,
            fall_day_description,
            winter_day_description,
            spring_day_description,
            summer_night_description,
            fall_night_description,
            winter_night_description,
            spring_night_description
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getIcon(),
            $objRecord->getNightIcon(),
            $objRecord->getSummerDayDescription(),
            $objRecord->getFallDayDescription(),
            $objRecord->getWinterDayDescription(),
            $objRecord->getSpringDayDescription(),
            $objRecord->getSummerNightDescription(),
            $objRecord->getFallNightDescription(),
            $objRecord->getWinterNightDescription(),
            $objRecord->getSpringNightDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setWeatherStateId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `weather_state` (
            weather_state_id,
            name,
            icon,
            night_icon,
            summer_day_description,
            fall_day_description,
            winter_day_description,
            spring_day_description,
            summer_night_description,
            fall_night_description,
            winter_night_description,
            spring_night_description
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getName(),
            $objRecord->getIcon(),
            $objRecord->getNightIcon(),
            $objRecord->getSummerDayDescription(),
            $objRecord->getFallDayDescription(),
            $objRecord->getWinterDayDescription(),
            $objRecord->getSpringDayDescription(),
            $objRecord->getSummerNightDescription(),
            $objRecord->getFallNightDescription(),
            $objRecord->getWinterNightDescription(),
            $objRecord->getSpringNightDescription()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setWeatherStateId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `weather_state` SET 
            weather_state_id=?,
            name=?,
            icon=?,
            night_icon=?,
            summer_day_description=?,
            fall_day_description=?,
            winter_day_description=?,
            spring_day_description=?,
            summer_night_description=?,
            fall_night_description=?,
            winter_night_description=?,
            spring_night_description=?
        WHERE weather_state_id=?';
        $arrSetParams = array(
            $objRecord->getWeatherStateId(),
            $objRecord->getName(),
            $objRecord->getIcon(),
            $objRecord->getNightIcon(),
            $objRecord->getSummerDayDescription(),
            $objRecord->getFallDayDescription(),
            $objRecord->getWinterDayDescription(),
            $objRecord->getSpringDayDescription(),
            $objRecord->getSummerNightDescription(),
            $objRecord->getFallNightDescription(),
            $objRecord->getWinterNightDescription(),
            $objRecord->getSpringNightDescription()
        );
        $arrKeyParams = array($objRecord->getOrigWeatherStateId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `weather_state` WHERE weather_state_id=?';
        $params = array($objRecord->getWeatherStateId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
