<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCalendarOptionsBase
{
    protected $m_calendarId;
    protected $m_optionName;
    protected $m_value;
    protected $m_calendarId_Orig;
    protected $m_optionName_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiCalendarOptionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCalendarid()
    {
        return $this->m_calendarId;
    }
    public function setCalendarid($value)
    {
        $this->m_calendarId = $value;
        $this->setOrigCalendarid($value);
        return;
    }

    public function getOptionname()
    {
        return $this->m_optionName;
    }
    public function setOptionname($value)
    {
        $this->m_optionName = $value;
        $this->setOrigOptionname($value);
        return;
    }

    public function getValue()
    {
        return $this->m_value;
    }
    public function setValue($value)
    {
        $this->m_value = $value;
        return;
    }

    public function getOrigCalendarid()
    {
        return $this->m_calendarId_Orig;
    }
    public function setOrigCalendarid($value)
    {
        if (isset($this->m_calendarId_Orig)) { return; }
        $this->m_calendarId_Orig = $value;
        return;
    }

    public function getOrigOptionname()
    {
        return $this->m_optionName_Orig;
    }
    public function setOrigOptionname($value)
    {
        if (isset($this->m_optionName_Orig)) { return; }
        $this->m_optionName_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCalendarid($arrValues['calendarId']);
        $this->setOptionname($arrValues['optionName']);
        $this->setValue($arrValues['value']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'calendarId':
                    $this->setCalendarid($val);
                    break;
                case 'optionName':
                    $this->setOptionname($val);
                    break;
                case 'value':
                    $this->setValue($val);
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
        $arrValues['calendarId'] = $this->getCalendarid();
        $arrValues['optionName'] = $this->getOptionname();
        $arrValues['value'] = $this->getValue();
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
