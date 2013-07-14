<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiStatsBase
{
    protected $m_object;
    protected $m_type;
    protected $m_day;
    protected $m_hits;
    protected $m_object_Orig;
    protected $m_type_Orig;
    protected $m_day_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setHits(0);
        }
        return;
    }
    public function TikiStatsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getObject()
    {
        return $this->m_object;
    }
    public function setObject($value)
    {
        $this->m_object = $value;
        $this->setOrigObject($value);
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        $this->setOrigType($value);
        return;
    }

    public function getDay()
    {
        return $this->m_day;
    }
    public function setDay($value)
    {
        $this->m_day = $value;
        $this->setOrigDay($value);
        return;
    }

    public function getHits()
    {
        return $this->m_hits;
    }
    public function setHits($value)
    {
        $this->m_hits = $value;
        return;
    }

    public function getOrigObject()
    {
        return $this->m_object_Orig;
    }
    public function setOrigObject($value)
    {
        if (isset($this->m_object_Orig)) { return; }
        $this->m_object_Orig = $value;
        return;
    }

    public function getOrigType()
    {
        return $this->m_type_Orig;
    }
    public function setOrigType($value)
    {
        if (isset($this->m_type_Orig)) { return; }
        $this->m_type_Orig = $value;
        return;
    }

    public function getOrigDay()
    {
        return $this->m_day_Orig;
    }
    public function setOrigDay($value)
    {
        if (isset($this->m_day_Orig)) { return; }
        $this->m_day_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setObject($arrValues['object']);
        $this->setType($arrValues['type']);
        $this->setDay($arrValues['day']);
        $this->setHits($arrValues['hits']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'object':
                    $this->setObject($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'day':
                    $this->setDay($val);
                    break;
                case 'hits':
                    $this->setHits($val);
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
        $arrValues['object'] = $this->getObject();
        $arrValues['type'] = $this->getType();
        $arrValues['day'] = $this->getDay();
        $arrValues['hits'] = $this->getHits();
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
