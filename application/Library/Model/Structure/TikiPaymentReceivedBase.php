<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPaymentReceivedBase
{
    protected $m_paymentReceivedId;
    protected $m_paymentRequestId;
    protected $m_payment_date;
    protected $m_amount;
    protected $m_type;
    protected $m_details;
    protected $m_userId;
    protected $m_paymentReceivedId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setPaymentDate('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function TikiPaymentReceivedBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPaymentreceivedid()
    {
        return $this->m_paymentReceivedId;
    }
    public function setPaymentreceivedid($value)
    {
        $this->m_paymentReceivedId = $value;
        $this->setOrigPaymentreceivedid($value);
        return;
    }

    public function getPaymentrequestid()
    {
        return $this->m_paymentRequestId;
    }
    public function setPaymentrequestid($value)
    {
        $this->m_paymentRequestId = $value;
        return;
    }

    public function getPaymentDate()
    {
        return $this->m_payment_date;
    }
    public function setPaymentDate($value)
    {
        $this->m_payment_date = $value;
        return;
    }

    public function getAmount()
    {
        return $this->m_amount;
    }
    public function setAmount($value)
    {
        $this->m_amount = $value;
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

    public function getDetails()
    {
        return $this->m_details;
    }
    public function setDetails($value)
    {
        $this->m_details = $value;
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

    public function getOrigPaymentreceivedid()
    {
        return $this->m_paymentReceivedId_Orig;
    }
    public function setOrigPaymentreceivedid($value)
    {
        if (isset($this->m_paymentReceivedId_Orig)) { return; }
        $this->m_paymentReceivedId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPaymentreceivedid($arrValues['paymentReceivedId']);
        $this->setPaymentrequestid($arrValues['paymentRequestId']);
        $this->setPaymentDate($arrValues['payment_date']);
        $this->setAmount($arrValues['amount']);
        $this->setType($arrValues['type']);
        $this->setDetails($arrValues['details']);
        $this->setUserid($arrValues['userId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'paymentReceivedId':
                    $this->setPaymentreceivedid($val);
                    break;
                case 'paymentRequestId':
                    $this->setPaymentrequestid($val);
                    break;
                case 'payment_date':
                    $this->setPaymentDate($val);
                    break;
                case 'amount':
                    $this->setAmount($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'details':
                    $this->setDetails($val);
                    break;
                case 'userId':
                    $this->setUserid($val);
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
        $arrValues['paymentReceivedId'] = $this->getPaymentreceivedid();
        $arrValues['paymentRequestId'] = $this->getPaymentrequestid();
        $arrValues['payment_date'] = $this->getPaymentDate();
        $arrValues['amount'] = $this->getAmount();
        $arrValues['type'] = $this->getType();
        $arrValues['details'] = $this->getDetails();
        $arrValues['userId'] = $this->getUserid();
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
