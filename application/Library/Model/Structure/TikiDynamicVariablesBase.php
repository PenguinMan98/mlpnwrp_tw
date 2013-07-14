<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiDynamicVariablesBase
{
    protected $m_name;
    protected $m_data;
    protected $m_lang;
    protected $m_name_Orig;
    protected $m_data_Orig;
    protected $m_lang_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiDynamicVariablesBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getData()
    {
        return $this->m_data;
    }
    public function setData($value)
    {
        $this->m_data = $value;
        $this->setOrigData($value);
        return;
    }

    public function getLang()
    {
        return $this->m_lang;
    }
    public function setLang($value)
    {
        $this->m_lang = $value;
        $this->setOrigLang($value);
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

    public function getOrigData()
    {
        return $this->m_data_Orig;
    }
    public function setOrigData($value)
    {
        if (isset($this->m_data_Orig)) { return; }
        $this->m_data_Orig = $value;
        return;
    }

    public function getOrigLang()
    {
        return $this->m_lang_Orig;
    }
    public function setOrigLang($value)
    {
        if (isset($this->m_lang_Orig)) { return; }
        $this->m_lang_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setName($arrValues['name']);
        $this->setData($arrValues['data']);
        $this->setLang($arrValues['lang']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'name':
                    $this->setName($val);
                    break;
                case 'data':
                    $this->setData($val);
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
        $arrValues['name'] = $this->getName();
        $arrValues['data'] = $this->getData();
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
