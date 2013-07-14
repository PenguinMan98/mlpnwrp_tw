<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiTranslationsInProgressBase
{
    protected $m_page_id;
    protected $m_language;
    protected $m_page_id_Orig;
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
    public function TikiTranslationsInProgressBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPageId()
    {
        return $this->m_page_id;
    }
    public function setPageId($value)
    {
        $this->m_page_id = $value;
        $this->setOrigPageId($value);
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

    public function getOrigPageId()
    {
        return $this->m_page_id_Orig;
    }
    public function setOrigPageId($value)
    {
        if (isset($this->m_page_id_Orig)) { return; }
        $this->m_page_id_Orig = $value;
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
        $this->setPageId($arrValues['page_id']);
        $this->setLanguage($arrValues['language']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'page_id':
                    $this->setPageId($val);
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
        $arrValues['page_id'] = $this->getPageId();
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
