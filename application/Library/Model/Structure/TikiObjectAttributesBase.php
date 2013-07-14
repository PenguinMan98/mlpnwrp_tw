<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiObjectAttributesBase
{
    protected $m_attributeId;
    protected $m_type;
    protected $m_itemId;
    protected $m_attribute;
    protected $m_value;
    protected $m_attributeId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiObjectAttributesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getAttributeid()
    {
        return $this->m_attributeId;
    }
    public function setAttributeid($value)
    {
        $this->m_attributeId = $value;
        $this->setOrigAttributeid($value);
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

    public function getItemid()
    {
        return $this->m_itemId;
    }
    public function setItemid($value)
    {
        $this->m_itemId = $value;
        return;
    }

    public function getAttribute()
    {
        return $this->m_attribute;
    }
    public function setAttribute($value)
    {
        $this->m_attribute = $value;
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

    public function getOrigAttributeid()
    {
        return $this->m_attributeId_Orig;
    }
    public function setOrigAttributeid($value)
    {
        if (isset($this->m_attributeId_Orig)) { return; }
        $this->m_attributeId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setAttributeid($arrValues['attributeId']);
        $this->setType($arrValues['type']);
        $this->setItemid($arrValues['itemId']);
        $this->setAttribute($arrValues['attribute']);
        $this->setValue($arrValues['value']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'attributeId':
                    $this->setAttributeid($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'itemId':
                    $this->setItemid($val);
                    break;
                case 'attribute':
                    $this->setAttribute($val);
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
        $arrValues['attributeId'] = $this->getAttributeid();
        $arrValues['type'] = $this->getType();
        $arrValues['itemId'] = $this->getItemid();
        $arrValues['attribute'] = $this->getAttribute();
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
