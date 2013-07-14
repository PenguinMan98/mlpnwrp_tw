<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiAcctStackitemBase
{
    protected $m_stackBookId;
    protected $m_stackItemStackId;
    protected $m_stackItemAccountId;
    protected $m_stackItemType;
    protected $m_stackItemAmount;
    protected $m_stackItemText;
    protected $m_stackBookId_Orig;
    protected $m_stackItemStackId_Orig;
    protected $m_stackItemAccountId_Orig;
    protected $m_stackItemType_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setStackitemamount(0);
            $this->setStackitemtext('');
        }
        return;
    }
    public function TikiAcctStackitemBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getStackbookid()
    {
        return $this->m_stackBookId;
    }
    public function setStackbookid($value)
    {
        $this->m_stackBookId = $value;
        $this->setOrigStackbookid($value);
        return;
    }

    public function getStackitemstackid()
    {
        return $this->m_stackItemStackId;
    }
    public function setStackitemstackid($value)
    {
        $this->m_stackItemStackId = $value;
        $this->setOrigStackitemstackid($value);
        return;
    }

    public function getStackitemaccountid()
    {
        return $this->m_stackItemAccountId;
    }
    public function setStackitemaccountid($value)
    {
        $this->m_stackItemAccountId = $value;
        $this->setOrigStackitemaccountid($value);
        return;
    }

    public function getStackitemtype()
    {
        return $this->m_stackItemType;
    }
    public function setStackitemtype($value)
    {
        $this->m_stackItemType = $value;
        $this->setOrigStackitemtype($value);
        return;
    }

    public function getStackitemamount()
    {
        return $this->m_stackItemAmount;
    }
    public function setStackitemamount($value)
    {
        $this->m_stackItemAmount = $value;
        return;
    }

    public function getStackitemtext()
    {
        return $this->m_stackItemText;
    }
    public function setStackitemtext($value)
    {
        $this->m_stackItemText = $value;
        return;
    }

    public function getOrigStackbookid()
    {
        return $this->m_stackBookId_Orig;
    }
    public function setOrigStackbookid($value)
    {
        if (isset($this->m_stackBookId_Orig)) { return; }
        $this->m_stackBookId_Orig = $value;
        return;
    }

    public function getOrigStackitemstackid()
    {
        return $this->m_stackItemStackId_Orig;
    }
    public function setOrigStackitemstackid($value)
    {
        if (isset($this->m_stackItemStackId_Orig)) { return; }
        $this->m_stackItemStackId_Orig = $value;
        return;
    }

    public function getOrigStackitemaccountid()
    {
        return $this->m_stackItemAccountId_Orig;
    }
    public function setOrigStackitemaccountid($value)
    {
        if (isset($this->m_stackItemAccountId_Orig)) { return; }
        $this->m_stackItemAccountId_Orig = $value;
        return;
    }

    public function getOrigStackitemtype()
    {
        return $this->m_stackItemType_Orig;
    }
    public function setOrigStackitemtype($value)
    {
        if (isset($this->m_stackItemType_Orig)) { return; }
        $this->m_stackItemType_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setStackbookid($arrValues['stackBookId']);
        $this->setStackitemstackid($arrValues['stackItemStackId']);
        $this->setStackitemaccountid($arrValues['stackItemAccountId']);
        $this->setStackitemtype($arrValues['stackItemType']);
        $this->setStackitemamount($arrValues['stackItemAmount']);
        $this->setStackitemtext($arrValues['stackItemText']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'stackBookId':
                    $this->setStackbookid($val);
                    break;
                case 'stackItemStackId':
                    $this->setStackitemstackid($val);
                    break;
                case 'stackItemAccountId':
                    $this->setStackitemaccountid($val);
                    break;
                case 'stackItemType':
                    $this->setStackitemtype($val);
                    break;
                case 'stackItemAmount':
                    $this->setStackitemamount($val);
                    break;
                case 'stackItemText':
                    $this->setStackitemtext($val);
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
        $arrValues['stackBookId'] = $this->getStackbookid();
        $arrValues['stackItemStackId'] = $this->getStackitemstackid();
        $arrValues['stackItemAccountId'] = $this->getStackitemaccountid();
        $arrValues['stackItemType'] = $this->getStackitemtype();
        $arrValues['stackItemAmount'] = $this->getStackitemamount();
        $arrValues['stackItemText'] = $this->getStackitemtext();
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
