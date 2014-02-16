<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_WeatherStateBase
{
    protected $m_weather_state_id;
    protected $m_name;
    protected $m_icon;
    protected $m_night_icon;
    protected $m_summer_day_description;
    protected $m_fall_day_description;
    protected $m_winter_day_description;
    protected $m_spring_day_description;
    protected $m_summer_night_description;
    protected $m_fall_night_description;
    protected $m_winter_night_description;
    protected $m_spring_night_description;
    protected $m_weather_state_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function WeatherStateBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getWeatherStateId()
    {
        return $this->m_weather_state_id;
    }
    public function setWeatherStateId($value)
    {
        $this->m_weather_state_id = $value;
        $this->setOrigWeatherStateId($value);
        return;
    }

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
        return;
    }

    public function getIcon()
    {
        return $this->m_icon;
    }
    public function setIcon($value)
    {
        $this->m_icon = $value;
        return;
    }

    public function getNightIcon()
    {
        return $this->m_night_icon;
    }
    public function setNightIcon($value)
    {
        $this->m_night_icon = $value;
        return;
    }

    public function getSummerDayDescription()
    {
        return $this->m_summer_day_description;
    }
    public function setSummerDayDescription($value)
    {
        $this->m_summer_day_description = $value;
        return;
    }

    public function getFallDayDescription()
    {
        return $this->m_fall_day_description;
    }
    public function setFallDayDescription($value)
    {
        $this->m_fall_day_description = $value;
        return;
    }

    public function getWinterDayDescription()
    {
        return $this->m_winter_day_description;
    }
    public function setWinterDayDescription($value)
    {
        $this->m_winter_day_description = $value;
        return;
    }

    public function getSpringDayDescription()
    {
        return $this->m_spring_day_description;
    }
    public function setSpringDayDescription($value)
    {
        $this->m_spring_day_description = $value;
        return;
    }

    public function getSummerNightDescription()
    {
        return $this->m_summer_night_description;
    }
    public function setSummerNightDescription($value)
    {
        $this->m_summer_night_description = $value;
        return;
    }

    public function getFallNightDescription()
    {
        return $this->m_fall_night_description;
    }
    public function setFallNightDescription($value)
    {
        $this->m_fall_night_description = $value;
        return;
    }

    public function getWinterNightDescription()
    {
        return $this->m_winter_night_description;
    }
    public function setWinterNightDescription($value)
    {
        $this->m_winter_night_description = $value;
        return;
    }

    public function getSpringNightDescription()
    {
        return $this->m_spring_night_description;
    }
    public function setSpringNightDescription($value)
    {
        $this->m_spring_night_description = $value;
        return;
    }

    public function getOrigWeatherStateId()
    {
        return $this->m_weather_state_id_Orig;
    }
    public function setOrigWeatherStateId($value)
    {
        if (isset($this->m_weather_state_id_Orig)) { return; }
        $this->m_weather_state_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setWeatherStateId($arrValues['weather_state_id']);
        $this->setName($arrValues['name']);
        $this->setIcon($arrValues['icon']);
        $this->setNightIcon($arrValues['night_icon']);
        $this->setSummerDayDescription($arrValues['summer_day_description']);
        $this->setFallDayDescription($arrValues['fall_day_description']);
        $this->setWinterDayDescription($arrValues['winter_day_description']);
        $this->setSpringDayDescription($arrValues['spring_day_description']);
        $this->setSummerNightDescription($arrValues['summer_night_description']);
        $this->setFallNightDescription($arrValues['fall_night_description']);
        $this->setWinterNightDescription($arrValues['winter_night_description']);
        $this->setSpringNightDescription($arrValues['spring_night_description']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'weather_state_id':
                    $this->setWeatherStateId($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'icon':
                    $this->setIcon($val);
                    break;
                case 'night_icon':
                    $this->setNightIcon($val);
                    break;
                case 'summer_day_description':
                    $this->setSummerDayDescription($val);
                    break;
                case 'fall_day_description':
                    $this->setFallDayDescription($val);
                    break;
                case 'winter_day_description':
                    $this->setWinterDayDescription($val);
                    break;
                case 'spring_day_description':
                    $this->setSpringDayDescription($val);
                    break;
                case 'summer_night_description':
                    $this->setSummerNightDescription($val);
                    break;
                case 'fall_night_description':
                    $this->setFallNightDescription($val);
                    break;
                case 'winter_night_description':
                    $this->setWinterNightDescription($val);
                    break;
                case 'spring_night_description':
                    $this->setSpringNightDescription($val);
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
        $arrValues['weather_state_id'] = $this->getWeatherStateId();
        $arrValues['name'] = $this->getName();
        $arrValues['icon'] = $this->getIcon();
        $arrValues['night_icon'] = $this->getNightIcon();
        $arrValues['summer_day_description'] = $this->getSummerDayDescription();
        $arrValues['fall_day_description'] = $this->getFallDayDescription();
        $arrValues['winter_day_description'] = $this->getWinterDayDescription();
        $arrValues['spring_day_description'] = $this->getSpringDayDescription();
        $arrValues['summer_night_description'] = $this->getSummerNightDescription();
        $arrValues['fall_night_description'] = $this->getFallNightDescription();
        $arrValues['winter_night_description'] = $this->getWinterNightDescription();
        $arrValues['spring_night_description'] = $this->getSpringNightDescription();
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
