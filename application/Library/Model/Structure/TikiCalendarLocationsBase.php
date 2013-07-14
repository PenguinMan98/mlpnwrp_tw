<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCalendarLocationsBase
{
    protected $m_callocId;
    protected $m_calendarId;
    protected $m_name;
    protected $m_description;
    protected $m_callocId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setCalendarid(0);
            $this->setName('');
        }
        return;
    }
    public function TikiCalendarLocationsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCallocid()
    {
        return $this->m_callocId;
    }
    public function setCallocid($value)
    {
        $this->m_callocId = $value;
        $this->setOrigCallocid($value);
        return;
    }

    public function getCalendarid()
    {
        return $this->m_calendarId;
    }
    public function setCalendarid($value)
    {
        $this->m_calendarId = $value;
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

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getOrigCallocid()
    {
        return $this->m_callocId_Orig;
    }
    public function setOrigCallocid($value)
    {
        if (isset($this->m_callocId_Orig)) { return; }
        $this->m_callocId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCallocid($arrValues['callocId']);
        $this->setCalendarid($arrValues['calendarId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'callocId':
                    $this->setCallocid($val);
                    break;
                case 'calendarId':
                    $this->setCalendarid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
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
        $arrValues['callocId'] = $this->getCallocid();
        $arrValues['calendarId'] = $this->getCalendarid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
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
