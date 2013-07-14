<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiAcctAccountBase
{
    protected $m_accountBookId;
    protected $m_accountId;
    protected $m_accountName;
    protected $m_accountNotes;
    protected $m_accountBudget;
    protected $m_accountLocked;
    protected $m_accountTax;
    protected $m_accountUserId;
    protected $m_accountBookId_Orig;
    protected $m_accountId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setAccountbudget(0);
            $this->setAccountlocked(0);
            $this->setAccounttax(0);
            $this->setAccountuserid(0);
        }
        return;
    }
    public function TikiAcctAccountBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getAccountbookid()
    {
        return $this->m_accountBookId;
    }
    public function setAccountbookid($value)
    {
        $this->m_accountBookId = $value;
        $this->setOrigAccountbookid($value);
        return;
    }

    public function getAccountid()
    {
        return $this->m_accountId;
    }
    public function setAccountid($value)
    {
        $this->m_accountId = $value;
        $this->setOrigAccountid($value);
        return;
    }

    public function getAccountname()
    {
        return $this->m_accountName;
    }
    public function setAccountname($value)
    {
        $this->m_accountName = $value;
        return;
    }

    public function getAccountnotes()
    {
        return $this->m_accountNotes;
    }
    public function setAccountnotes($value)
    {
        $this->m_accountNotes = $value;
        return;
    }

    public function getAccountbudget()
    {
        return $this->m_accountBudget;
    }
    public function setAccountbudget($value)
    {
        $this->m_accountBudget = $value;
        return;
    }

    public function getAccountlocked()
    {
        return $this->m_accountLocked;
    }
    public function setAccountlocked($value)
    {
        $this->m_accountLocked = $value;
        return;
    }

    public function getAccounttax()
    {
        return $this->m_accountTax;
    }
    public function setAccounttax($value)
    {
        $this->m_accountTax = $value;
        return;
    }

    public function getAccountuserid()
    {
        return $this->m_accountUserId;
    }
    public function setAccountuserid($value)
    {
        $this->m_accountUserId = $value;
        return;
    }

    public function getOrigAccountbookid()
    {
        return $this->m_accountBookId_Orig;
    }
    public function setOrigAccountbookid($value)
    {
        if (isset($this->m_accountBookId_Orig)) { return; }
        $this->m_accountBookId_Orig = $value;
        return;
    }

    public function getOrigAccountid()
    {
        return $this->m_accountId_Orig;
    }
    public function setOrigAccountid($value)
    {
        if (isset($this->m_accountId_Orig)) { return; }
        $this->m_accountId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setAccountbookid($arrValues['accountBookId']);
        $this->setAccountid($arrValues['accountId']);
        $this->setAccountname($arrValues['accountName']);
        $this->setAccountnotes($arrValues['accountNotes']);
        $this->setAccountbudget($arrValues['accountBudget']);
        $this->setAccountlocked($arrValues['accountLocked']);
        $this->setAccounttax($arrValues['accountTax']);
        $this->setAccountuserid($arrValues['accountUserId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'accountBookId':
                    $this->setAccountbookid($val);
                    break;
                case 'accountId':
                    $this->setAccountid($val);
                    break;
                case 'accountName':
                    $this->setAccountname($val);
                    break;
                case 'accountNotes':
                    $this->setAccountnotes($val);
                    break;
                case 'accountBudget':
                    $this->setAccountbudget($val);
                    break;
                case 'accountLocked':
                    $this->setAccountlocked($val);
                    break;
                case 'accountTax':
                    $this->setAccounttax($val);
                    break;
                case 'accountUserId':
                    $this->setAccountuserid($val);
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
        $arrValues['accountBookId'] = $this->getAccountbookid();
        $arrValues['accountId'] = $this->getAccountid();
        $arrValues['accountName'] = $this->getAccountname();
        $arrValues['accountNotes'] = $this->getAccountnotes();
        $arrValues['accountBudget'] = $this->getAccountbudget();
        $arrValues['accountLocked'] = $this->getAccountlocked();
        $arrValues['accountTax'] = $this->getAccounttax();
        $arrValues['accountUserId'] = $this->getAccountuserid();
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
