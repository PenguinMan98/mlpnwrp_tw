<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiWorkspaceTemplatesBase
{
    protected $m_templateId;
    protected $m_name;
    protected $m_definition;
    protected $m_is_advanced;
    protected $m_templateId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setIsAdvanced('n');
        }
        return;
    }
    public function TikiWorkspaceTemplatesBase($arrData = null)
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

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
        return;
    }

    public function getDefinition()
    {
        return $this->m_definition;
    }
    public function setDefinition($value)
    {
        $this->m_definition = $value;
        return;
    }

    public function getIsAdvanced()
    {
        return $this->m_is_advanced;
    }
    public function setIsAdvanced($value)
    {
        $this->m_is_advanced = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setTemplateid($arrValues['templateId']);
        $this->setName($arrValues['name']);
        $this->setDefinition($arrValues['definition']);
        $this->setIsAdvanced($arrValues['is_advanced']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'templateId':
                    $this->setTemplateid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'definition':
                    $this->setDefinition($val);
                    break;
                case 'is_advanced':
                    $this->setIsAdvanced($val);
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
        $arrValues['name'] = $this->getName();
        $arrValues['definition'] = $this->getDefinition();
        $arrValues['is_advanced'] = $this->getIsAdvanced();
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
