<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiThemeControlCategsBase
{
    protected $m_categId;
    protected $m_theme;
    protected $m_categId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTheme('');
        }
        return;
    }
    public function TikiThemeControlCategsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCategid()
    {
        return $this->m_categId;
    }
    public function setCategid($value)
    {
        $this->m_categId = $value;
        $this->setOrigCategid($value);
        return;
    }

    public function getTheme()
    {
        return $this->m_theme;
    }
    public function setTheme($value)
    {
        $this->m_theme = $value;
        return;
    }

    public function getOrigCategid()
    {
        return $this->m_categId_Orig;
    }
    public function setOrigCategid($value)
    {
        if (isset($this->m_categId_Orig)) { return; }
        $this->m_categId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCategid($arrValues['categId']);
        $this->setTheme($arrValues['theme']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'categId':
                    $this->setCategid($val);
                    break;
                case 'theme':
                    $this->setTheme($val);
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
        $arrValues['categId'] = $this->getCategid();
        $arrValues['theme'] = $this->getTheme();
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
