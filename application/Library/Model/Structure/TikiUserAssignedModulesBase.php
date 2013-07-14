<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserAssignedModulesBase
{
    protected $m_moduleId;
    protected $m_name;
    protected $m_position;
    protected $m_ord;
    protected $m_type;
    protected $m_user;
    protected $m_name_Orig;
    protected $m_position_Orig;
    protected $m_ord_Orig;
    protected $m_user_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiUserAssignedModulesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getModuleid()
    {
        return $this->m_moduleId;
    }
    public function setModuleid($value)
    {
        $this->m_moduleId = $value;
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

    public function getPosition()
    {
        return $this->m_position;
    }
    public function setPosition($value)
    {
        $this->m_position = $value;
        $this->setOrigPosition($value);
        return;
    }

    public function getOrd()
    {
        return $this->m_ord;
    }
    public function setOrd($value)
    {
        $this->m_ord = $value;
        $this->setOrigOrd($value);
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        return;
    }

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        $this->setOrigUser($value);
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

    public function getOrigPosition()
    {
        return $this->m_position_Orig;
    }
    public function setOrigPosition($value)
    {
        if (isset($this->m_position_Orig)) { return; }
        $this->m_position_Orig = $value;
        return;
    }

    public function getOrigOrd()
    {
        return $this->m_ord_Orig;
    }
    public function setOrigOrd($value)
    {
        if (isset($this->m_ord_Orig)) { return; }
        $this->m_ord_Orig = $value;
        return;
    }

    public function getOrigUser()
    {
        return $this->m_user_Orig;
    }
    public function setOrigUser($value)
    {
        if (isset($this->m_user_Orig)) { return; }
        $this->m_user_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setModuleid($arrValues['moduleId']);
        $this->setName($arrValues['name']);
        $this->setPosition($arrValues['position']);
        $this->setOrd($arrValues['ord']);
        $this->setType($arrValues['type']);
        $this->setUser($arrValues['user']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'moduleId':
                    $this->setModuleid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'position':
                    $this->setPosition($val);
                    break;
                case 'ord':
                    $this->setOrd($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'user':
                    $this->setUser($val);
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
        $arrValues['moduleId'] = $this->getModuleid();
        $arrValues['name'] = $this->getName();
        $arrValues['position'] = $this->getPosition();
        $arrValues['ord'] = $this->getOrd();
        $arrValues['type'] = $this->getType();
        $arrValues['user'] = $this->getUser();
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
