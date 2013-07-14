<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCreditsUsageBase
{
    protected $m_usageId;
    protected $m_userId;
    protected $m_usage_date;
    protected $m_credit_type;
    protected $m_used_amount;
    protected $m_product_id;
    protected $m_usageId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUsageDate('CURRENT_TIMESTAMP');
            $this->setUsedAmount(0);
        }
        return;
    }
    public function TikiCreditsUsageBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUsageid()
    {
        return $this->m_usageId;
    }
    public function setUsageid($value)
    {
        $this->m_usageId = $value;
        $this->setOrigUsageid($value);
        return;
    }

    public function getUserid()
    {
        return $this->m_userId;
    }
    public function setUserid($value)
    {
        $this->m_userId = $value;
        return;
    }

    public function getUsageDate()
    {
        return $this->m_usage_date;
    }
    public function setUsageDate($value)
    {
        $this->m_usage_date = $value;
        return;
    }

    public function getCreditType()
    {
        return $this->m_credit_type;
    }
    public function setCreditType($value)
    {
        $this->m_credit_type = $value;
        return;
    }

    public function getUsedAmount()
    {
        return $this->m_used_amount;
    }
    public function setUsedAmount($value)
    {
        $this->m_used_amount = $value;
        return;
    }

    public function getProductId()
    {
        return $this->m_product_id;
    }
    public function setProductId($value)
    {
        $this->m_product_id = $value;
        return;
    }

    public function getOrigUsageid()
    {
        return $this->m_usageId_Orig;
    }
    public function setOrigUsageid($value)
    {
        if (isset($this->m_usageId_Orig)) { return; }
        $this->m_usageId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUsageid($arrValues['usageId']);
        $this->setUserid($arrValues['userId']);
        $this->setUsageDate($arrValues['usage_date']);
        $this->setCreditType($arrValues['credit_type']);
        $this->setUsedAmount($arrValues['used_amount']);
        $this->setProductId($arrValues['product_id']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'usageId':
                    $this->setUsageid($val);
                    break;
                case 'userId':
                    $this->setUserid($val);
                    break;
                case 'usage_date':
                    $this->setUsageDate($val);
                    break;
                case 'credit_type':
                    $this->setCreditType($val);
                    break;
                case 'used_amount':
                    $this->setUsedAmount($val);
                    break;
                case 'product_id':
                    $this->setProductId($val);
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
        $arrValues['usageId'] = $this->getUsageid();
        $arrValues['userId'] = $this->getUserid();
        $arrValues['usage_date'] = $this->getUsageDate();
        $arrValues['credit_type'] = $this->getCreditType();
        $arrValues['used_amount'] = $this->getUsedAmount();
        $arrValues['product_id'] = $this->getProductId();
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
