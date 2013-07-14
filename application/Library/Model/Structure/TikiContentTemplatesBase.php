<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiContentTemplatesBase
{
    protected $m_templateId;
    protected $m_template_type;
    protected $m_content;
    protected $m_name;
    protected $m_created;
    protected $m_templateId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTemplateType('static');
        }
        return;
    }
    public function TikiContentTemplatesBase($arrData = null)
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

    public function getTemplateType()
    {
        return $this->m_template_type;
    }
    public function setTemplateType($value)
    {
        $this->m_template_type = $value;
        return;
    }

    public function getContent()
    {
        return $this->m_content;
    }
    public function setContent($value)
    {
        $this->m_content = $value;
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

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
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
        $this->setTemplateType($arrValues['template_type']);
        $this->setContent($arrValues['content']);
        $this->setName($arrValues['name']);
        $this->setCreated($arrValues['created']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'templateId':
                    $this->setTemplateid($val);
                    break;
                case 'template_type':
                    $this->setTemplateType($val);
                    break;
                case 'content':
                    $this->setContent($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'created':
                    $this->setCreated($val);
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
        $arrValues['template_type'] = $this->getTemplateType();
        $arrValues['content'] = $this->getContent();
        $arrValues['name'] = $this->getName();
        $arrValues['created'] = $this->getCreated();
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
