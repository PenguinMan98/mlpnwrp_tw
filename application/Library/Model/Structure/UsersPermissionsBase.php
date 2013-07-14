<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_UsersPermissionsBase
{
    protected $m_permName;
    protected $m_level;
    protected $m_permName_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function UsersPermissionsBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getLevel()
    {
        return $this->m_level;
    }
    public function setLevel($value)
    {
        $this->m_level = $value;
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
        $this->setPermname($arrValues['permName']);
        $this->setLevel($arrValues['level']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'permName':
                    $this->setPermname($val);
                    break;
                case 'level':
                    $this->setLevel($val);
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
        $arrValues['permName'] = $this->getPermname();
        $arrValues['level'] = $this->getLevel();
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
