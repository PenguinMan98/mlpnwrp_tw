<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiWebmailContactsExtBase
{
    protected $m_contactId;
    protected $m_value;
    protected $m_hidden;
    protected $m_fieldId;
    protected $m_contactId_Orig;
    protected $m_value_Orig;
    protected $m_hidden_Orig;
    protected $m_fieldId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiWebmailContactsExtBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getContactid()
    {
        return $this->m_contactId;
    }
    public function setContactid($value)
    {
        $this->m_contactId = $value;
        $this->setOrigContactid($value);
        return;
    }

    public function getValue()
    {
        return $this->m_value;
    }
    public function setValue($value)
    {
        $this->m_value = $value;
        $this->setOrigValue($value);
        return;
    }

    public function getHidden()
    {
        return $this->m_hidden;
    }
    public function setHidden($value)
    {
        $this->m_hidden = $value;
        $this->setOrigHidden($value);
        return;
    }

    public function getFieldid()
    {
        return $this->m_fieldId;
    }
    public function setFieldid($value)
    {
        $this->m_fieldId = $value;
        $this->setOrigFieldid($value);
        return;
    }

    public function getOrigContactid()
    {
        return $this->m_contactId_Orig;
    }
    public function setOrigContactid($value)
    {
        if (isset($this->m_contactId_Orig)) { return; }
        $this->m_contactId_Orig = $value;
        return;
    }

    public function getOrigValue()
    {
        return $this->m_value_Orig;
    }
    public function setOrigValue($value)
    {
        if (isset($this->m_value_Orig)) { return; }
        $this->m_value_Orig = $value;
        return;
    }

    public function getOrigHidden()
    {
        return $this->m_hidden_Orig;
    }
    public function setOrigHidden($value)
    {
        if (isset($this->m_hidden_Orig)) { return; }
        $this->m_hidden_Orig = $value;
        return;
    }

    public function getOrigFieldid()
    {
        return $this->m_fieldId_Orig;
    }
    public function setOrigFieldid($value)
    {
        if (isset($this->m_fieldId_Orig)) { return; }
        $this->m_fieldId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setContactid($arrValues['contactId']);
        $this->setValue($arrValues['value']);
        $this->setHidden($arrValues['hidden']);
        $this->setFieldid($arrValues['fieldId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'contactId':
                    $this->setContactid($val);
                    break;
                case 'value':
                    $this->setValue($val);
                    break;
                case 'hidden':
                    $this->setHidden($val);
                    break;
                case 'fieldId':
                    $this->setFieldid($val);
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
        $arrValues['contactId'] = $this->getContactid();
        $arrValues['value'] = $this->getValue();
        $arrValues['hidden'] = $this->getHidden();
        $arrValues['fieldId'] = $this->getFieldid();
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
