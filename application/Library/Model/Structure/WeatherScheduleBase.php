<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_WeatherScheduleBase
{
    protected $m_weather_schedule_id;
    protected $m_start_ts;
    protected $m_end_ts;
    protected $m_weather_state_id;
    protected $m_chat_room_id;
    protected $m_chat_room_type_id;
    protected $m_weather_schedule_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function WeatherScheduleBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getWeatherScheduleId()
    {
        return $this->m_weather_schedule_id;
    }
    public function setWeatherScheduleId($value)
    {
        $this->m_weather_schedule_id = $value;
        $this->setOrigWeatherScheduleId($value);
        return;
    }

    public function getStartTs()
    {
        return $this->m_start_ts;
    }
    public function setStartTs($value)
    {
        $this->m_start_ts = $value;
        return;
    }

    public function getEndTs()
    {
        return $this->m_end_ts;
    }
    public function setEndTs($value)
    {
        $this->m_end_ts = $value;
        return;
    }

    public function getWeatherStateId()
    {
        return $this->m_weather_state_id;
    }
    public function setWeatherStateId($value)
    {
        $this->m_weather_state_id = $value;
        return;
    }

    public function getChatRoomId()
    {
        return $this->m_chat_room_id;
    }
    public function setChatRoomId($value)
    {
        $this->m_chat_room_id = $value;
        return;
    }

    public function getChatRoomTypeId()
    {
        return $this->m_chat_room_type_id;
    }
    public function setChatRoomTypeId($value)
    {
        $this->m_chat_room_type_id = $value;
        return;
    }

    public function getOrigWeatherScheduleId()
    {
        return $this->m_weather_schedule_id_Orig;
    }
    public function setOrigWeatherScheduleId($value)
    {
        if (isset($this->m_weather_schedule_id_Orig)) { return; }
        $this->m_weather_schedule_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setWeatherScheduleId($arrValues['weather_schedule_id']);
        $this->setStartTs($arrValues['start_ts']);
        $this->setEndTs($arrValues['end_ts']);
        $this->setWeatherStateId($arrValues['weather_state_id']);
        $this->setChatRoomId($arrValues['chat_room_id']);
        $this->setChatRoomTypeId($arrValues['chat_room_type_id']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'weather_schedule_id':
                    $this->setWeatherScheduleId($val);
                    break;
                case 'start_ts':
                    $this->setStartTs($val);
                    break;
                case 'end_ts':
                    $this->setEndTs($val);
                    break;
                case 'weather_state_id':
                    $this->setWeatherStateId($val);
                    break;
                case 'chat_room_id':
                    $this->setChatRoomId($val);
                    break;
                case 'chat_room_type_id':
                    $this->setChatRoomTypeId($val);
                    break;
                default:
                    break;
            }
        }
        return;
    }

    public function getAsArray()
    {
        $arrValues = array();
        $arrValues['weather_schedule_id'] = $this->getWeatherScheduleId();
        $arrValues['start_ts'] = $this->getStartTs();
        $arrValues['end_ts'] = $this->getEndTs();
        $arrValues['weather_state_id'] = $this->getWeatherStateId();
        $arrValues['chat_room_id'] = $this->getChatRoomId();
        $arrValues['chat_room_type_id'] = $this->getChatRoomTypeId();
        return $arrValues;
    }

    public function validateInsert(&$arrErrors)
    {
        return true;
    }

    public function validateUpdate(&$arrErrors)
    {
        return true;
    }
}
