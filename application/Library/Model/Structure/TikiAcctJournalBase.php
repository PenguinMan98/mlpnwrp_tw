<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiAcctJournalBase
{
    protected $m_journalBookId;
    protected $m_journalId;
    protected $m_journalDate;
    protected $m_journalDescription;
    protected $m_journalCancelled;
    protected $m_journalTs;
    protected $m_journalId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setJournaldate('0000-00-00');
            $this->setJournalcancelled(0);
            $this->setJournalts('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function TikiAcctJournalBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getJournalbookid()
    {
        return $this->m_journalBookId;
    }
    public function setJournalbookid($value)
    {
        $this->m_journalBookId = $value;
        return;
    }

    public function getJournalid()
    {
        return $this->m_journalId;
    }
    public function setJournalid($value)
    {
        $this->m_journalId = $value;
        $this->setOrigJournalid($value);
        return;
    }

    public function getJournaldate()
    {
        return $this->m_journalDate;
    }
    public function setJournaldate($value)
    {
        $this->m_journalDate = $value;
        return;
    }

    public function getJournaldescription()
    {
        return $this->m_journalDescription;
    }
    public function setJournaldescription($value)
    {
        $this->m_journalDescription = $value;
        return;
    }

    public function getJournalcancelled()
    {
        return $this->m_journalCancelled;
    }
    public function setJournalcancelled($value)
    {
        $this->m_journalCancelled = $value;
        return;
    }

    public function getJournalts()
    {
        return $this->m_journalTs;
    }
    public function setJournalts($value)
    {
        $this->m_journalTs = $value;
        return;
    }

    public function getOrigJournalid()
    {
        return $this->m_journalId_Orig;
    }
    public function setOrigJournalid($value)
    {
        if (isset($this->m_journalId_Orig)) { return; }
        $this->m_journalId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setJournalbookid($arrValues['journalBookId']);
        $this->setJournalid($arrValues['journalId']);
        $this->setJournaldate($arrValues['journalDate']);
        $this->setJournaldescription($arrValues['journalDescription']);
        $this->setJournalcancelled($arrValues['journalCancelled']);
        $this->setJournalts($arrValues['journalTs']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'journalBookId':
                    $this->setJournalbookid($val);
                    break;
                case 'journalId':
                    $this->setJournalid($val);
                    break;
                case 'journalDate':
                    $this->setJournaldate($val);
                    break;
                case 'journalDescription':
                    $this->setJournaldescription($val);
                    break;
                case 'journalCancelled':
                    $this->setJournalcancelled($val);
                    break;
                case 'journalTs':
                    $this->setJournalts($val);
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
        $arrValues['journalBookId'] = $this->getJournalbookid();
        $arrValues['journalId'] = $this->getJournalid();
        $arrValues['journalDate'] = $this->getJournaldate();
        $arrValues['journalDescription'] = $this->getJournaldescription();
        $arrValues['journalCancelled'] = $this->getJournalcancelled();
        $arrValues['journalTs'] = $this->getJournalts();
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
