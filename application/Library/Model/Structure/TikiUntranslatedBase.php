<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUntranslatedBase
{
    protected $m_id;
    protected $m_source;
    protected $m_lang;
    protected $m_source_Orig;
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
    public function TikiUntranslatedBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getId()
    {
        return $this->m_id;
    }
    public function setId($value)
    {
        $this->m_id = $value;
        return;
    }

    public function getSource()
    {
        return $this->m_source;
    }
    public function setSource($value)
    {
        $this->m_source = $value;
        $this->setOrigSource($value);
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

    public function getOrigSource()
    {
        return $this->m_source_Orig;
    }
    public function setOrigSource($value)
    {
        if (isset($this->m_source_Orig)) { return; }
        $this->m_source_Orig = $value;
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
        $this->setId($arrValues['id']);
        $this->setSource($arrValues['source']);
        $this->setLang($arrValues['lang']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'source':
                    $this->setSource($val);
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
        $arrValues['id'] = $this->getId();
        $arrValues['source'] = $this->getSource();
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
