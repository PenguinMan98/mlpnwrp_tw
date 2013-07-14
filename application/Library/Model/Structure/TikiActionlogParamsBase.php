<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiActionlogParamsBase
{
    protected $m_actionId;
    protected $m_name;
    protected $m_value;
    protected $m_actionId_Orig;
    protected $m_name_Orig;
    protected $m_value_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiActionlogParamsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getActionid()
    {
        return $this->m_actionId;
    }
    public function setActionid($value)
    {
        $this->m_actionId = $value;
        $this->setOrigActionid($value);
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
        $this->setOrigValue($value);
        return;
    }

    public function getOrigActionid()
    {
        return $this->m_actionId_Orig;
    }
    public function setOrigActionid($value)
    {
        if (isset($this->m_actionId_Orig)) { return; }
        $this->m_actionId_Orig = $value;
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

    public function getOrigValue()
    {
        return $this->m_value_Orig;
    }
    public function setOrigValue($value)
    {
        if (isset($this->m_value_Orig)) { return; }
        $this->m_value_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setActionid($arrValues['actionId']);
        $this->setName($arrValues['name']);
        $this->setValue($arrValues['value']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'actionId':
                    $this->setActionid($val);
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
        $arrValues['actionId'] = $this->getActionid();
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
