<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiNewsletterIncludedBase
{
    protected $m_nlId;
    protected $m_includedId;
    protected $m_nlId_Orig;
    protected $m_includedId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiNewsletterIncludedBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getNlid()
    {
        return $this->m_nlId;
    }
    public function setNlid($value)
    {
        $this->m_nlId = $value;
        $this->setOrigNlid($value);
        return;
    }

    public function getIncludedid()
    {
        return $this->m_includedId;
    }
    public function setIncludedid($value)
    {
        $this->m_includedId = $value;
        $this->setOrigIncludedid($value);
        return;
    }

    public function getOrigNlid()
    {
        return $this->m_nlId_Orig;
    }
    public function setOrigNlid($value)
    {
        if (isset($this->m_nlId_Orig)) { return; }
        $this->m_nlId_Orig = $value;
        return;
    }

    public function getOrigIncludedid()
    {
        return $this->m_includedId_Orig;
    }
    public function setOrigIncludedid($value)
    {
        if (isset($this->m_includedId_Orig)) { return; }
        $this->m_includedId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setNlid($arrValues['nlId']);
        $this->setIncludedid($arrValues['includedId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'nlId':
                    $this->setNlid($val);
                    break;
                case 'includedId':
                    $this->setIncludedid($val);
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
        $arrValues['nlId'] = $this->getNlid();
        $arrValues['includedId'] = $this->getIncludedid();
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
