<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_UsersGrouppermissionsBase
{
    protected $m_groupName;
    protected $m_permName;
    protected $m_value;
    protected $m_groupName_Orig;
    protected $m_permName_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setValue('');
        }
        return;
    }
    public function UsersGrouppermissionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getGroupname()
    {
        return $this->m_groupName;
    }
    public function setGroupname($value)
    {
        $this->m_groupName = $value;
        $this->setOrigGroupname($value);
        return;
    }

    public function getPermname()
    {
        return $this->m_permName;
    }
    public function setPermname($value)
    {
        $this->m_permName = $value;
        $this->setOrigPermname($value);
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

    public function getOrigGroupname()
    {
        return $this->m_groupName_Orig;
    }
    public function setOrigGroupname($value)
    {
        if (isset($this->m_groupName_Orig)) { return; }
        $this->m_groupName_Orig = $value;
        return;
    }

    public function getOrigPermname()
    {
        return $this->m_permName_Orig;
    }
    public function setOrigPermname($value)
    {
        if (isset($this->m_permName_Orig)) { return; }
        $this->m_permName_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setGroupname($arrValues['groupName']);
        $this->setPermname($arrValues['permName']);
        $this->setValue($arrValues['value']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'groupName':
                    $this->setGroupname($val);
                    break;
                case 'permName':
                    $this->setPermname($val);
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
        $arrValues['groupName'] = $this->getGroupname();
        $arrValues['permName'] = $this->getPermname();
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
