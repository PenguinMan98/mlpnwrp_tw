<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserPreferencesBase
{
    protected $m_user;
    protected $m_prefName;
    protected $m_value;
    protected $m_user_Orig;
    protected $m_prefName_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiUserPreferencesBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getPrefname()
    {
        return $this->m_prefName;
    }
    public function setPrefname($value)
    {
        $this->m_prefName = $value;
        $this->setOrigPrefname($value);
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

    public function getOrigPrefname()
    {
        return $this->m_prefName_Orig;
    }
    public function setOrigPrefname($value)
    {
        if (isset($this->m_prefName_Orig)) { return; }
        $this->m_prefName_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUser($arrValues['user']);
        $this->setPrefname($arrValues['prefName']);
        $this->setValue($arrValues['value']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'prefName':
                    $this->setPrefname($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['prefName'] = $this->getPrefname();
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
