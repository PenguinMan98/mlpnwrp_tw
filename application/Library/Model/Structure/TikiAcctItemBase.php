<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiAcctItemBase
{
    protected $m_itemBookId;
    protected $m_itemJournalId;
    protected $m_itemAccountId;
    protected $m_itemType;
    protected $m_itemAmount;
    protected $m_itemText;
    protected $m_itemTs;
    protected $m_itemBookId_Orig;
    protected $m_itemJournalId_Orig;
    protected $m_itemAccountId_Orig;
    protected $m_itemType_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setItemamount(0);
            $this->setItemtext('');
            $this->setItemts('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function TikiAcctItemBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getItembookid()
    {
        return $this->m_itemBookId;
    }
    public function setItembookid($value)
    {
        $this->m_itemBookId = $value;
        $this->setOrigItembookid($value);
        return;
    }

    public function getItemjournalid()
    {
        return $this->m_itemJournalId;
    }
    public function setItemjournalid($value)
    {
        $this->m_itemJournalId = $value;
        $this->setOrigItemjournalid($value);
        return;
    }

    public function getItemaccountid()
    {
        return $this->m_itemAccountId;
    }
    public function setItemaccountid($value)
    {
        $this->m_itemAccountId = $value;
        $this->setOrigItemaccountid($value);
        return;
    }

    public function getItemtype()
    {
        return $this->m_itemType;
    }
    public function setItemtype($value)
    {
        $this->m_itemType = $value;
        $this->setOrigItemtype($value);
        return;
    }

    public function getItemamount()
    {
        return $this->m_itemAmount;
    }
    public function setItemamount($value)
    {
        $this->m_itemAmount = $value;
        return;
    }

    public function getItemtext()
    {
        return $this->m_itemText;
    }
    public function setItemtext($value)
    {
        $this->m_itemText = $value;
        return;
    }

    public function getItemts()
    {
        return $this->m_itemTs;
    }
    public function setItemts($value)
    {
        $this->m_itemTs = $value;
        return;
    }

    public function getOrigItembookid()
    {
        return $this->m_itemBookId_Orig;
    }
    public function setOrigItembookid($value)
    {
        if (isset($this->m_itemBookId_Orig)) { return; }
        $this->m_itemBookId_Orig = $value;
        return;
    }

    public function getOrigItemjournalid()
    {
        return $this->m_itemJournalId_Orig;
    }
    public function setOrigItemjournalid($value)
    {
        if (isset($this->m_itemJournalId_Orig)) { return; }
        $this->m_itemJournalId_Orig = $value;
        return;
    }

    public function getOrigItemaccountid()
    {
        return $this->m_itemAccountId_Orig;
    }
    public function setOrigItemaccountid($value)
    {
        if (isset($this->m_itemAccountId_Orig)) { return; }
        $this->m_itemAccountId_Orig = $value;
        return;
    }

    public function getOrigItemtype()
    {
        return $this->m_itemType_Orig;
    }
    public function setOrigItemtype($value)
    {
        if (isset($this->m_itemType_Orig)) { return; }
        $this->m_itemType_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setItembookid($arrValues['itemBookId']);
        $this->setItemjournalid($arrValues['itemJournalId']);
        $this->setItemaccountid($arrValues['itemAccountId']);
        $this->setItemtype($arrValues['itemType']);
        $this->setItemamount($arrValues['itemAmount']);
        $this->setItemtext($arrValues['itemText']);
        $this->setItemts($arrValues['itemTs']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'itemBookId':
                    $this->setItembookid($val);
                    break;
                case 'itemJournalId':
                    $this->setItemjournalid($val);
                    break;
                case 'itemAccountId':
                    $this->setItemaccountid($val);
                    break;
                case 'itemType':
                    $this->setItemtype($val);
                    break;
                case 'itemAmount':
                    $this->setItemamount($val);
                    break;
                case 'itemText':
                    $this->setItemtext($val);
                    break;
                case 'itemTs':
                    $this->setItemts($val);
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
        $arrValues['itemBookId'] = $this->getItembookid();
        $arrValues['itemJournalId'] = $this->getItemjournalid();
        $arrValues['itemAccountId'] = $this->getItemaccountid();
        $arrValues['itemType'] = $this->getItemtype();
        $arrValues['itemAmount'] = $this->getItemamount();
        $arrValues['itemText'] = $this->getItemtext();
        $arrValues['itemTs'] = $this->getItemts();
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
