<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCalendarCategoriesBase
{
    protected $m_calcatId;
    protected $m_calendarId;
    protected $m_name;
    protected $m_calcatId_Orig;

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
    public function TikiCalendarCategoriesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCalcatid()
    {
        return $this->m_calcatId;
    }
    public function setCalcatid($value)
    {
        $this->m_calcatId = $value;
        $this->setOrigCalcatid($value);
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

    public function getOrigCalcatid()
    {
        return $this->m_calcatId_Orig;
    }
    public function setOrigCalcatid($value)
    {
        if (isset($this->m_calcatId_Orig)) { return; }
        $this->m_calcatId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCalcatid($arrValues['calcatId']);
        $this->setCalendarid($arrValues['calendarId']);
        $this->setName($arrValues['name']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'calcatId':
                    $this->setCalcatid($val);
                    break;
                case 'calendarId':
                    $this->setCalendarid($val);
                    break;
                case 'name':
                    $this->setName($val);
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
        $arrValues['calcatId'] = $this->getCalcatid();
        $arrValues['calendarId'] = $this->getCalendarid();
        $arrValues['name'] = $this->getName();
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
