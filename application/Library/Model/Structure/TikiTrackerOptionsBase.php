<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiTrackerOptionsBase
{
    protected $m_trackerId;
    protected $m_name;
    protected $m_value;
    protected $m_trackerId_Orig;
    protected $m_name_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiTrackerOptionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTrackerid()
    {
        return $this->m_trackerId;
    }
    public function setTrackerid($value)
    {
        $this->m_trackerId = $value;
        $this->setOrigTrackerid($value);
        return;
    }

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
        $this->setOrigName($value);
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

    public function getOrigTrackerid()
    {
        return $this->m_trackerId_Orig;
    }
    public function setOrigTrackerid($value)
    {
        if (isset($this->m_trackerId_Orig)) { return; }
        $this->m_trackerId_Orig = $value;
        return;
    }

    public function getOrigName()
    {
        return $this->m_name_Orig;
    }
    public function setOrigName($value)
    {
        if (isset($this->m_name_Orig)) { return; }
        $this->m_name_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTrackerid($arrValues['trackerId']);
        $this->setName($arrValues['name']);
        $this->setValue($arrValues['value']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'trackerId':
                    $this->setTrackerid($val);
                    break;
                case 'name':
                    $this->setName($val);
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
        $arrValues['trackerId'] = $this->getTrackerid();
        $arrValues['name'] = $this->getName();
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
