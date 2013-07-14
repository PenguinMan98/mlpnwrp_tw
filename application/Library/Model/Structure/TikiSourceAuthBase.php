<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSourceAuthBase
{
    protected $m_identifier;
    protected $m_scheme;
    protected $m_domain;
    protected $m_path;
    protected $m_method;
    protected $m_arguments;
    protected $m_identifier_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiSourceAuthBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getIdentifier()
    {
        return $this->m_identifier;
    }
    public function setIdentifier($value)
    {
        $this->m_identifier = $value;
        $this->setOrigIdentifier($value);
        return;
    }

    public function getScheme()
    {
        return $this->m_scheme;
    }
    public function setScheme($value)
    {
        $this->m_scheme = $value;
        return;
    }

    public function getDomain()
    {
        return $this->m_domain;
    }
    public function setDomain($value)
    {
        $this->m_domain = $value;
        return;
    }

    public function getPath()
    {
        return $this->m_path;
    }
    public function setPath($value)
    {
        $this->m_path = $value;
        return;
    }

    public function getMethod()
    {
        return $this->m_method;
    }
    public function setMethod($value)
    {
        $this->m_method = $value;
        return;
    }

    public function getArguments()
    {
        return $this->m_arguments;
    }
    public function setArguments($value)
    {
        $this->m_arguments = $value;
        return;
    }

    public function getOrigIdentifier()
    {
        return $this->m_identifier_Orig;
    }
    public function setOrigIdentifier($value)
    {
        if (isset($this->m_identifier_Orig)) { return; }
        $this->m_identifier_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setIdentifier($arrValues['identifier']);
        $this->setScheme($arrValues['scheme']);
        $this->setDomain($arrValues['domain']);
        $this->setPath($arrValues['path']);
        $this->setMethod($arrValues['method']);
        $this->setArguments($arrValues['arguments']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'identifier':
                    $this->setIdentifier($val);
                    break;
                case 'scheme':
                    $this->setScheme($val);
                    break;
                case 'domain':
                    $this->setDomain($val);
                    break;
                case 'path':
                    $this->setPath($val);
                    break;
                case 'method':
                    $this->setMethod($val);
                    break;
                case 'arguments':
                    $this->setArguments($val);
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
        $arrValues['identifier'] = $this->getIdentifier();
        $arrValues['scheme'] = $this->getScheme();
        $arrValues['domain'] = $this->getDomain();
        $arrValues['path'] = $this->getPath();
        $arrValues['method'] = $this->getMethod();
        $arrValues['arguments'] = $this->getArguments();
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
