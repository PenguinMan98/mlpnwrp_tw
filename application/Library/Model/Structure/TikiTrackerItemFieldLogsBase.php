<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiTrackerItemFieldLogsBase
{
    protected $m_version;
    protected $m_itemId;
    protected $m_fieldId;
    protected $m_value;
    protected $m_version_Orig;
    protected $m_itemId_Orig;
    protected $m_fieldId_Orig;
    protected $m_value_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiTrackerItemFieldLogsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getVersion()
    {
        return $this->m_version;
    }
    public function setVersion($value)
    {
        $this->m_version = $value;
        $this->setOrigVersion($value);
        return;
    }

    public function getItemid()
    {
        return $this->m_itemId;
    }
    public function setItemid($value)
    {
        $this->m_itemId = $value;
        $this->setOrigItemid($value);
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

    public function getOrigVersion()
    {
        return $this->m_version_Orig;
    }
    public function setOrigVersion($value)
    {
        if (isset($this->m_version_Orig)) { return; }
        $this->m_version_Orig = $value;
        return;
    }

    public function getOrigItemid()
    {
        return $this->m_itemId_Orig;
    }
    public function setOrigItemid($value)
    {
        if (isset($this->m_itemId_Orig)) { return; }
        $this->m_itemId_Orig = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setVersion($arrValues['version']);
        $this->setItemid($arrValues['itemId']);
        $this->setFieldid($arrValues['fieldId']);
        $this->setValue($arrValues['value']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'version':
                    $this->setVersion($val);
                    break;
                case 'itemId':
                    $this->setItemid($val);
                    break;
                case 'fieldId':
                    $this->setFieldid($val);
                    break;
                case 'value':
                    $this->setValue($val);
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
        $arrValues['version'] = $this->getVersion();
        $arrValues['itemId'] = $this->getItemid();
        $arrValues['fieldId'] = $this->getFieldid();
        $arrValues['value'] = $this->getValue();
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
