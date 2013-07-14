<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiZonesBase
{
    protected $m_zone;
    protected $m_zone_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiZonesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getZone()
    {
        return $this->m_zone;
    }
    public function setZone($value)
    {
        $this->m_zone = $value;
        $this->setOrigZone($value);
        return;
    }

    public function getOrigZone()
    {
        return $this->m_zone_Orig;
    }
    public function setOrigZone($value)
    {
        if (isset($this->m_zone_Orig)) { return; }
        $this->m_zone_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setZone($arrValues['zone']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'zone':
                    $this->setZone($val);
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
        $arrValues['zone'] = $this->getZone();
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
