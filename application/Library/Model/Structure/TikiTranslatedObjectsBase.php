<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiTranslatedObjectsBase
{
    protected $m_traId;
    protected $m_type;
    protected $m_objId;
    protected $m_lang;
    protected $m_type_Orig;
    protected $m_objId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiTranslatedObjectsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTraid()
    {
        return $this->m_traId;
    }
    public function setTraid($value)
    {
        $this->m_traId = $value;
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

    public function getLang()
    {
        return $this->m_lang;
    }
    public function setLang($value)
    {
        $this->m_lang = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setTraid($arrValues['traId']);
        $this->setType($arrValues['type']);
        $this->setObjid($arrValues['objId']);
        $this->setLang($arrValues['lang']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'traId':
                    $this->setTraid($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'objId':
                    $this->setObjid($val);
                    break;
                case 'lang':
                    $this->setLang($val);
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
        $arrValues['traId'] = $this->getTraid();
        $arrValues['type'] = $this->getType();
        $arrValues['objId'] = $this->getObjid();
        $arrValues['lang'] = $this->getLang();
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
