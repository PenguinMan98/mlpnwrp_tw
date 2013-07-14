<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiContentTemplatesSectionsBase
{
    protected $m_templateId;
    protected $m_section;
    protected $m_templateId_Orig;
    protected $m_section_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiContentTemplatesSectionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTemplateid()
    {
        return $this->m_templateId;
    }
    public function setTemplateid($value)
    {
        $this->m_templateId = $value;
        $this->setOrigTemplateid($value);
        return;
    }

    public function getSection()
    {
        return $this->m_section;
    }
    public function setSection($value)
    {
        $this->m_section = $value;
        $this->setOrigSection($value);
        return;
    }

    public function getOrigTemplateid()
    {
        return $this->m_templateId_Orig;
    }
    public function setOrigTemplateid($value)
    {
        if (isset($this->m_templateId_Orig)) { return; }
        $this->m_templateId_Orig = $value;
        return;
    }

    public function getOrigSection()
    {
        return $this->m_section_Orig;
    }
    public function setOrigSection($value)
    {
        if (isset($this->m_section_Orig)) { return; }
        $this->m_section_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTemplateid($arrValues['templateId']);
        $this->setSection($arrValues['section']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'templateId':
                    $this->setTemplateid($val);
                    break;
                case 'section':
                    $this->setSection($val);
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
        $arrValues['templateId'] = $this->getTemplateid();
        $arrValues['section'] = $this->getSection();
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
