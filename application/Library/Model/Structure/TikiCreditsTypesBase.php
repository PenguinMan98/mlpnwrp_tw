<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCreditsTypesBase
{
    protected $m_credit_type;
    protected $m_display_text;
    protected $m_unit_text;
    protected $m_is_static_level;
    protected $m_scaling_divisor;
    protected $m_credit_type_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setIsStaticLevel('n');
            $this->setScalingDivisor(1);
        }
        return;
    }
    public function TikiCreditsTypesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCreditType()
    {
        return $this->m_credit_type;
    }
    public function setCreditType($value)
    {
        $this->m_credit_type = $value;
        $this->setOrigCreditType($value);
        return;
    }

    public function getDisplayText()
    {
        return $this->m_display_text;
    }
    public function setDisplayText($value)
    {
        $this->m_display_text = $value;
        return;
    }

    public function getUnitText()
    {
        return $this->m_unit_text;
    }
    public function setUnitText($value)
    {
        $this->m_unit_text = $value;
        return;
    }

    public function getIsStaticLevel()
    {
        return $this->m_is_static_level;
    }
    public function setIsStaticLevel($value)
    {
        $this->m_is_static_level = $value;
        return;
    }

    public function getScalingDivisor()
    {
        return $this->m_scaling_divisor;
    }
    public function setScalingDivisor($value)
    {
        $this->m_scaling_divisor = $value;
        return;
    }

    public function getOrigCreditType()
    {
        return $this->m_credit_type_Orig;
    }
    public function setOrigCreditType($value)
    {
        if (isset($this->m_credit_type_Orig)) { return; }
        $this->m_credit_type_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCreditType($arrValues['credit_type']);
        $this->setDisplayText($arrValues['display_text']);
        $this->setUnitText($arrValues['unit_text']);
        $this->setIsStaticLevel($arrValues['is_static_level']);
        $this->setScalingDivisor($arrValues['scaling_divisor']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'credit_type':
                    $this->setCreditType($val);
                    break;
                case 'display_text':
                    $this->setDisplayText($val);
                    break;
                case 'unit_text':
                    $this->setUnitText($val);
                    break;
                case 'is_static_level':
                    $this->setIsStaticLevel($val);
                    break;
                case 'scaling_divisor':
                    $this->setScalingDivisor($val);
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
        $arrValues['credit_type'] = $this->getCreditType();
        $arrValues['display_text'] = $this->getDisplayText();
        $arrValues['unit_text'] = $this->getUnitText();
        $arrValues['is_static_level'] = $this->getIsStaticLevel();
        $arrValues['scaling_divisor'] = $this->getScalingDivisor();
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
