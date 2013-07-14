<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCalendarRolesBase
{
    protected $m_calitemId;
    protected $m_username;
    protected $m_role;
    protected $m_calitemId_Orig;
    protected $m_username_Orig;
    protected $m_role_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiCalendarRolesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCalitemid()
    {
        return $this->m_calitemId;
    }
    public function setCalitemid($value)
    {
        $this->m_calitemId = $value;
        $this->setOrigCalitemid($value);
        return;
    }

    public function getUsername()
    {
        return $this->m_username;
    }
    public function setUsername($value)
    {
        $this->m_username = $value;
        $this->setOrigUsername($value);
        return;
    }

    public function getRole()
    {
        return $this->m_role;
    }
    public function setRole($value)
    {
        $this->m_role = $value;
        $this->setOrigRole($value);
        return;
    }

    public function getOrigCalitemid()
    {
        return $this->m_calitemId_Orig;
    }
    public function setOrigCalitemid($value)
    {
        if (isset($this->m_calitemId_Orig)) { return; }
        $this->m_calitemId_Orig = $value;
        return;
    }

    public function getOrigUsername()
    {
        return $this->m_username_Orig;
    }
    public function setOrigUsername($value)
    {
        if (isset($this->m_username_Orig)) { return; }
        $this->m_username_Orig = $value;
        return;
    }

    public function getOrigRole()
    {
        return $this->m_role_Orig;
    }
    public function setOrigRole($value)
    {
        if (isset($this->m_role_Orig)) { return; }
        $this->m_role_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCalitemid($arrValues['calitemId']);
        $this->setUsername($arrValues['username']);
        $this->setRole($arrValues['role']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'calitemId':
                    $this->setCalitemid($val);
                    break;
                case 'username':
                    $this->setUsername($val);
                    break;
                case 'role':
                    $this->setRole($val);
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
        $arrValues['calitemId'] = $this->getCalitemid();
        $arrValues['username'] = $this->getUsername();
        $arrValues['role'] = $this->getRole();
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
