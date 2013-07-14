<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiWebserviceBase
{
    protected $m_service;
    protected $m_url;
    protected $m_wstype;
    protected $m_operation;
    protected $m_body;
    protected $m_schema_version;
    protected $m_schema_documentation;
    protected $m_service_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiWebserviceBase($arrData = null)
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

    public function getUrl()
    {
        return $this->m_url;
    }
    public function setUrl($value)
    {
        $this->m_url = $value;
        return;
    }

    public function getWstype()
    {
        return $this->m_wstype;
    }
    public function setWstype($value)
    {
        $this->m_wstype = $value;
        return;
    }

    public function getOperation()
    {
        return $this->m_operation;
    }
    public function setOperation($value)
    {
        $this->m_operation = $value;
        return;
    }

    public function getBody()
    {
        return $this->m_body;
    }
    public function setBody($value)
    {
        $this->m_body = $value;
        return;
    }

    public function getSchemaVersion()
    {
        return $this->m_schema_version;
    }
    public function setSchemaVersion($value)
    {
        $this->m_schema_version = $value;
        return;
    }

    public function getSchemaDocumentation()
    {
        return $this->m_schema_documentation;
    }
    public function setSchemaDocumentation($value)
    {
        $this->m_schema_documentation = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setService($arrValues['service']);
        $this->setUrl($arrValues['url']);
        $this->setWstype($arrValues['wstype']);
        $this->setOperation($arrValues['operation']);
        $this->setBody($arrValues['body']);
        $this->setSchemaVersion($arrValues['schema_version']);
        $this->setSchemaDocumentation($arrValues['schema_documentation']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'service':
                    $this->setService($val);
                    break;
                case 'url':
                    $this->setUrl($val);
                    break;
                case 'wstype':
                    $this->setWstype($val);
                    break;
                case 'operation':
                    $this->setOperation($val);
                    break;
                case 'body':
                    $this->setBody($val);
                    break;
                case 'schema_version':
                    $this->setSchemaVersion($val);
                    break;
                case 'schema_documentation':
                    $this->setSchemaDocumentation($val);
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
        $arrValues['url'] = $this->getUrl();
        $arrValues['wstype'] = $this->getWstype();
        $arrValues['operation'] = $this->getOperation();
        $arrValues['body'] = $this->getBody();
        $arrValues['schema_version'] = $this->getSchemaVersion();
        $arrValues['schema_documentation'] = $this->getSchemaDocumentation();
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
