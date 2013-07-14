<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiMenuLanguagesBase
{
    protected $m_menuId;
    protected $m_language;
    protected $m_menuId_Orig;
    protected $m_language_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiMenuLanguagesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getMenuid()
    {
        return $this->m_menuId;
    }
    public function setMenuid($value)
    {
        $this->m_menuId = $value;
        $this->setOrigMenuid($value);
        return;
    }

    public function getLanguage()
    {
        return $this->m_language;
    }
    public function setLanguage($value)
    {
        $this->m_language = $value;
        $this->setOrigLanguage($value);
        return;
    }

    public function getOrigMenuid()
    {
        return $this->m_menuId_Orig;
    }
    public function setOrigMenuid($value)
    {
        if (isset($this->m_menuId_Orig)) { return; }
        $this->m_menuId_Orig = $value;
        return;
    }

    public function getOrigLanguage()
    {
        return $this->m_language_Orig;
    }
    public function setOrigLanguage($value)
    {
        if (isset($this->m_language_Orig)) { return; }
        $this->m_language_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setMenuid($arrValues['menuId']);
        $this->setLanguage($arrValues['language']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'menuId':
                    $this->setMenuid($val);
                    break;
                case 'language':
                    $this->setLanguage($val);
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
        $arrValues['menuId'] = $this->getMenuid();
        $arrValues['language'] = $this->getLanguage();
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
