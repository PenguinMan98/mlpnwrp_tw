<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCreditsBase
{
    protected $m_creditId;
    protected $m_userId;
    protected $m_credit_type;
    protected $m_creation_date;
    protected $m_expiration_date;
    protected $m_total_amount;
    protected $m_used_amount;
    protected $m_product_id;
    protected $m_creditId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setCreationDate('CURRENT_TIMESTAMP');
            $this->setTotalAmount(0);
            $this->setUsedAmount(0);
        }
        return;
    }
    public function TikiCreditsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCreditid()
    {
        return $this->m_creditId;
    }
    public function setCreditid($value)
    {
        $this->m_creditId = $value;
        $this->setOrigCreditid($value);
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

    public function getCreditType()
    {
        return $this->m_credit_type;
    }
    public function setCreditType($value)
    {
        $this->m_credit_type = $value;
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

    public function getExpirationDate()
    {
        return $this->m_expiration_date;
    }
    public function setExpirationDate($value)
    {
        $this->m_expiration_date = $value;
        return;
    }

    public function getTotalAmount()
    {
        return $this->m_total_amount;
    }
    public function setTotalAmount($value)
    {
        $this->m_total_amount = $value;
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

    public function getOrigCreditid()
    {
        return $this->m_creditId_Orig;
    }
    public function setOrigCreditid($value)
    {
        if (isset($this->m_creditId_Orig)) { return; }
        $this->m_creditId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCreditid($arrValues['creditId']);
        $this->setUserid($arrValues['userId']);
        $this->setCreditType($arrValues['credit_type']);
        $this->setCreationDate($arrValues['creation_date']);
        $this->setExpirationDate($arrValues['expiration_date']);
        $this->setTotalAmount($arrValues['total_amount']);
        $this->setUsedAmount($arrValues['used_amount']);
        $this->setProductId($arrValues['product_id']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'creditId':
                    $this->setCreditid($val);
                    break;
                case 'userId':
                    $this->setUserid($val);
                    break;
                case 'credit_type':
                    $this->setCreditType($val);
                    break;
                case 'creation_date':
                    $this->setCreationDate($val);
                    break;
                case 'expiration_date':
                    $this->setExpirationDate($val);
                    break;
                case 'total_amount':
                    $this->setTotalAmount($val);
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
        $arrValues['creditId'] = $this->getCreditid();
        $arrValues['userId'] = $this->getUserid();
        $arrValues['credit_type'] = $this->getCreditType();
        $arrValues['creation_date'] = $this->getCreationDate();
        $arrValues['expiration_date'] = $this->getExpirationDate();
        $arrValues['total_amount'] = $this->getTotalAmount();
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
