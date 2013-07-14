<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiLiveSupportModulesBase
{
    protected $m_modId;
    protected $m_name;
    protected $m_modId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiLiveSupportModulesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getModid()
    {
        return $this->m_modId;
    }
    public function setModid($value)
    {
        $this->m_modId = $value;
        $this->setOrigModid($value);
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

    public function getOrigModid()
    {
        return $this->m_modId_Orig;
    }
    public function setOrigModid($value)
    {
        if (isset($this->m_modId_Orig)) { return; }
        $this->m_modId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setModid($arrValues['modId']);
        $this->setName($arrValues['name']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'modId':
                    $this->setModid($val);
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
        $arrValues['modId'] = $this->getModid();
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
