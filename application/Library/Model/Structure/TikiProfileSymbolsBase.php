<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiProfileSymbolsBase
{
    protected $m_domain;
    protected $m_profile;
    protected $m_object;
    protected $m_type;
    protected $m_value;
    protected $m_named;
    protected $m_creation_date;
    protected $m_domain_Orig;
    protected $m_profile_Orig;
    protected $m_object_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setCreationDate('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function TikiProfileSymbolsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getDomain()
    {
        return $this->m_domain;
    }
    public function setDomain($value)
    {
        $this->m_domain = $value;
        $this->setOrigDomain($value);
        return;
    }

    public function getProfile()
    {
        return $this->m_profile;
    }
    public function setProfile($value)
    {
        $this->m_profile = $value;
        $this->setOrigProfile($value);
        return;
    }

    public function getObject()
    {
        return $this->m_object;
    }
    public function setObject($value)
    {
        $this->m_object = $value;
        $this->setOrigObject($value);
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        return;
    }

    public function getValue()
    {
        return $this->m_value;
    }
    public function setValue($value)
    {
        $this->m_value = $value;
        return;
    }

    public function getNamed()
    {
        return $this->m_named;
    }
    public function setNamed($value)
    {
        $this->m_named = $value;
        return;
    }

    public function getCreationDate()
    {
        return $this->m_creation_date;
    }
    public function setCreationDate($value)
    {
        $this->m_creation_date = $value;
        return;
    }

    public function getOrigDomain()
    {
        return $this->m_domain_Orig;
    }
    public function setOrigDomain($value)
    {
        if (isset($this->m_domain_Orig)) { return; }
        $this->m_domain_Orig = $value;
        return;
    }

    public function getOrigProfile()
    {
        return $this->m_profile_Orig;
    }
    public function setOrigProfile($value)
    {
        if (isset($this->m_profile_Orig)) { return; }
        $this->m_profile_Orig = $value;
        return;
    }

    public function getOrigObject()
    {
        return $this->m_object_Orig;
    }
    public function setOrigObject($value)
    {
        if (isset($this->m_object_Orig)) { return; }
        $this->m_object_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setDomain($arrValues['domain']);
        $this->setProfile($arrValues['profile']);
        $this->setObject($arrValues['object']);
        $this->setType($arrValues['type']);
        $this->setValue($arrValues['value']);
        $this->setNamed($arrValues['named']);
        $this->setCreationDate($arrValues['creation_date']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'domain':
                    $this->setDomain($val);
                    break;
                case 'profile':
                    $this->setProfile($val);
                    break;
                case 'object':
                    $this->setObject($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'value':
                    $this->setValue($val);
                    break;
                case 'named':
                    $this->setNamed($val);
                    break;
                case 'creation_date':
                    $this->setCreationDate($val);
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
        $arrValues['domain'] = $this->getDomain();
        $arrValues['profile'] = $this->getProfile();
        $arrValues['object'] = $this->getObject();
        $arrValues['type'] = $this->getType();
        $arrValues['value'] = $this->getValue();
        $arrValues['named'] = $this->getNamed();
        $arrValues['creation_date'] = $this->getCreationDate();
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
