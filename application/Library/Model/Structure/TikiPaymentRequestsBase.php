<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPaymentRequestsBase
{
    protected $m_paymentRequestId;
    protected $m_amount;
    protected $m_amount_paid;
    protected $m_currency;
    protected $m_request_date;
    protected $m_due_date;
    protected $m_cancel_date;
    protected $m_description;
    protected $m_actions;
    protected $m_detail;
    protected $m_userId;
    protected $m_paymentRequestId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setAmountPaid(0.00);
            $this->setRequestDate('CURRENT_TIMESTAMP');
            $this->setDueDate('0000-00-00 00:00:00');
        }
        return;
    }
    public function TikiPaymentRequestsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPaymentrequestid()
    {
        return $this->m_paymentRequestId;
    }
    public function setPaymentrequestid($value)
    {
        $this->m_paymentRequestId = $value;
        $this->setOrigPaymentrequestid($value);
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

    public function getAmountPaid()
    {
        return $this->m_amount_paid;
    }
    public function setAmountPaid($value)
    {
        $this->m_amount_paid = $value;
        return;
    }

    public function getCurrency()
    {
        return $this->m_currency;
    }
    public function setCurrency($value)
    {
        $this->m_currency = $value;
        return;
    }

    public function getRequestDate()
    {
        return $this->m_request_date;
    }
    public function setRequestDate($value)
    {
        $this->m_request_date = $value;
        return;
    }

    public function getDueDate()
    {
        return $this->m_due_date;
    }
    public function setDueDate($value)
    {
        $this->m_due_date = $value;
        return;
    }

    public function getCancelDate()
    {
        return $this->m_cancel_date;
    }
    public function setCancelDate($value)
    {
        $this->m_cancel_date = $value;
        return;
    }

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getActions()
    {
        return $this->m_actions;
    }
    public function setActions($value)
    {
        $this->m_actions = $value;
        return;
    }

    public function getDetail()
    {
        return $this->m_detail;
    }
    public function setDetail($value)
    {
        $this->m_detail = $value;
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

    public function getOrigPaymentrequestid()
    {
        return $this->m_paymentRequestId_Orig;
    }
    public function setOrigPaymentrequestid($value)
    {
        if (isset($this->m_paymentRequestId_Orig)) { return; }
        $this->m_paymentRequestId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPaymentrequestid($arrValues['paymentRequestId']);
        $this->setAmount($arrValues['amount']);
        $this->setAmountPaid($arrValues['amount_paid']);
        $this->setCurrency($arrValues['currency']);
        $this->setRequestDate($arrValues['request_date']);
        $this->setDueDate($arrValues['due_date']);
        $this->setCancelDate($arrValues['cancel_date']);
        $this->setDescription($arrValues['description']);
        $this->setActions($arrValues['actions']);
        $this->setDetail($arrValues['detail']);
        $this->setUserid($arrValues['userId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'paymentRequestId':
                    $this->setPaymentrequestid($val);
                    break;
                case 'amount':
                    $this->setAmount($val);
                    break;
                case 'amount_paid':
                    $this->setAmountPaid($val);
                    break;
                case 'currency':
                    $this->setCurrency($val);
                    break;
                case 'request_date':
                    $this->setRequestDate($val);
                    break;
                case 'due_date':
                    $this->setDueDate($val);
                    break;
                case 'cancel_date':
                    $this->setCancelDate($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'actions':
                    $this->setActions($val);
                    break;
                case 'detail':
                    $this->setDetail($val);
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
        $arrValues['paymentRequestId'] = $this->getPaymentrequestid();
        $arrValues['amount'] = $this->getAmount();
        $arrValues['amount_paid'] = $this->getAmountPaid();
        $arrValues['currency'] = $this->getCurrency();
        $arrValues['request_date'] = $this->getRequestDate();
        $arrValues['due_date'] = $this->getDueDate();
        $arrValues['cancel_date'] = $this->getCancelDate();
        $arrValues['description'] = $this->getDescription();
        $arrValues['actions'] = $this->getActions();
        $arrValues['detail'] = $this->getDetail();
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
