<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiThemeControlObjectsBase
{
    protected $m_objId;
    protected $m_type;
    protected $m_name;
    protected $m_theme;
    protected $m_objId_Orig;
    protected $m_type_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setName('');
            $this->setTheme('');
        }
        return;
    }
    public function TikiThemeControlObjectsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getObjid()
    {
        return $this->m_objId;
    }
    public function setObjid($value)
    {
        $this->m_objId = $value;
        $this->setOrigObjid($value);
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        $this->setOrigType($value);
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

    public function getTheme()
    {
        return $this->m_theme;
    }
    public function setTheme($value)
    {
        $this->m_theme = $value;
        return;
    }

    public function getOrigObjid()
    {
        return $this->m_objId_Orig;
    }
    public function setOrigObjid($value)
    {
        if (isset($this->m_objId_Orig)) { return; }
        $this->m_objId_Orig = $value;
        return;
    }

    public function getOrigType()
    {
        return $this->m_type_Orig;
    }
    public function setOrigType($value)
    {
        if (isset($this->m_type_Orig)) { return; }
        $this->m_type_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setObjid($arrValues['objId']);
        $this->setType($arrValues['type']);
        $this->setName($arrValues['name']);
        $this->setTheme($arrValues['theme']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'objId':
                    $this->setObjid($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'name':
                    $this->setName($val);
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
        $arrValues['objId'] = $this->getObjid();
        $arrValues['type'] = $this->getType();
        $arrValues['name'] = $this->getName();
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
