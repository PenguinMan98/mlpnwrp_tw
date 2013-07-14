<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiWebserviceTemplateBase
{
    protected $m_service;
    protected $m_template;
    protected $m_engine;
    protected $m_output;
    protected $m_content;
    protected $m_last_modif;
    protected $m_service_Orig;
    protected $m_template_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiWebserviceTemplateBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getService()
    {
        return $this->m_service;
    }
    public function setService($value)
    {
        $this->m_service = $value;
        $this->setOrigService($value);
        return;
    }

    public function getTemplate()
    {
        return $this->m_template;
    }
    public function setTemplate($value)
    {
        $this->m_template = $value;
        $this->setOrigTemplate($value);
        return;
    }

    public function getEngine()
    {
        return $this->m_engine;
    }
    public function setEngine($value)
    {
        $this->m_engine = $value;
        return;
    }

    public function getOutput()
    {
        return $this->m_output;
    }
    public function setOutput($value)
    {
        $this->m_output = $value;
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

    public function getLastModif()
    {
        return $this->m_last_modif;
    }
    public function setLastModif($value)
    {
        $this->m_last_modif = $value;
        return;
    }

    public function getOrigService()
    {
        return $this->m_service_Orig;
    }
    public function setOrigService($value)
    {
        if (isset($this->m_service_Orig)) { return; }
        $this->m_service_Orig = $value;
        return;
    }

    public function getOrigTemplate()
    {
        return $this->m_template_Orig;
    }
    public function setOrigTemplate($value)
    {
        if (isset($this->m_template_Orig)) { return; }
        $this->m_template_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setService($arrValues['service']);
        $this->setTemplate($arrValues['template']);
        $this->setEngine($arrValues['engine']);
        $this->setOutput($arrValues['output']);
        $this->setContent($arrValues['content']);
        $this->setLastModif($arrValues['last_modif']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'service':
                    $this->setService($val);
                    break;
                case 'template':
                    $this->setTemplate($val);
                    break;
                case 'engine':
                    $this->setEngine($val);
                    break;
                case 'output':
                    $this->setOutput($val);
                    break;
                case 'content':
                    $this->setContent($val);
                    break;
                case 'last_modif':
                    $this->setLastModif($val);
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
        $arrValues['service'] = $this->getService();
        $arrValues['template'] = $this->getTemplate();
        $arrValues['engine'] = $this->getEngine();
        $arrValues['output'] = $this->getOutput();
        $arrValues['content'] = $this->getContent();
        $arrValues['last_modif'] = $this->getLastModif();
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
