<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiRatingConfigsBase
{
    protected $m_ratingConfigId;
    protected $m_name;
    protected $m_expiry;
    protected $m_formula;
    protected $m_callbacks;
    protected $m_ratingConfigId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setExpiry(3600);
        }
        return;
    }
    public function TikiRatingConfigsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getRatingconfigid()
    {
        return $this->m_ratingConfigId;
    }
    public function setRatingconfigid($value)
    {
        $this->m_ratingConfigId = $value;
        $this->setOrigRatingconfigid($value);
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

    public function getExpiry()
    {
        return $this->m_expiry;
    }
    public function setExpiry($value)
    {
        $this->m_expiry = $value;
        return;
    }

    public function getFormula()
    {
        return $this->m_formula;
    }
    public function setFormula($value)
    {
        $this->m_formula = $value;
        return;
    }

    public function getCallbacks()
    {
        return $this->m_callbacks;
    }
    public function setCallbacks($value)
    {
        $this->m_callbacks = $value;
        return;
    }

    public function getOrigRatingconfigid()
    {
        return $this->m_ratingConfigId_Orig;
    }
    public function setOrigRatingconfigid($value)
    {
        if (isset($this->m_ratingConfigId_Orig)) { return; }
        $this->m_ratingConfigId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setRatingconfigid($arrValues['ratingConfigId']);
        $this->setName($arrValues['name']);
        $this->setExpiry($arrValues['expiry']);
        $this->setFormula($arrValues['formula']);
        $this->setCallbacks($arrValues['callbacks']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'ratingConfigId':
                    $this->setRatingconfigid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'expiry':
                    $this->setExpiry($val);
                    break;
                case 'formula':
                    $this->setFormula($val);
                    break;
                case 'callbacks':
                    $this->setCallbacks($val);
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
        $arrValues['ratingConfigId'] = $this->getRatingconfigid();
        $arrValues['name'] = $this->getName();
        $arrValues['expiry'] = $this->getExpiry();
        $arrValues['formula'] = $this->getFormula();
        $arrValues['callbacks'] = $this->getCallbacks();
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
