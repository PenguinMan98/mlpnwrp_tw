<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiAcctStatementBase
{
    protected $m_statementBookId;
    protected $m_statementAccountId;
    protected $m_statementId;
    protected $m_statementBookingDate;
    protected $m_statementValueDate;
    protected $m_statementBookingText;
    protected $m_statementReason;
    protected $m_statementCounterpart;
    protected $m_statementCounterpartAccount;
    protected $m_statementCounterpartBankCode;
    protected $m_statementAmount;
    protected $m_statementJournalId;
    protected $m_statementStackId;
    protected $m_statementId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setStatementaccountid(0);
            $this->setStatementjournalid(0);
        }
        return;
    }
    public function TikiAcctStatementBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getStatementbookid()
    {
        return $this->m_statementBookId;
    }
    public function setStatementbookid($value)
    {
        $this->m_statementBookId = $value;
        return;
    }

    public function getStatementaccountid()
    {
        return $this->m_statementAccountId;
    }
    public function setStatementaccountid($value)
    {
        $this->m_statementAccountId = $value;
        return;
    }

    public function getStatementid()
    {
        return $this->m_statementId;
    }
    public function setStatementid($value)
    {
        $this->m_statementId = $value;
        $this->setOrigStatementid($value);
        return;
    }

    public function getStatementbookingdate()
    {
        return $this->m_statementBookingDate;
    }
    public function setStatementbookingdate($value)
    {
        $this->m_statementBookingDate = $value;
        return;
    }

    public function getStatementvaluedate()
    {
        return $this->m_statementValueDate;
    }
    public function setStatementvaluedate($value)
    {
        $this->m_statementValueDate = $value;
        return;
    }

    public function getStatementbookingtext()
    {
        return $this->m_statementBookingText;
    }
    public function setStatementbookingtext($value)
    {
        $this->m_statementBookingText = $value;
        return;
    }

    public function getStatementreason()
    {
        return $this->m_statementReason;
    }
    public function setStatementreason($value)
    {
        $this->m_statementReason = $value;
        return;
    }

    public function getStatementcounterpart()
    {
        return $this->m_statementCounterpart;
    }
    public function setStatementcounterpart($value)
    {
        $this->m_statementCounterpart = $value;
        return;
    }

    public function getStatementcounterpartaccount()
    {
        return $this->m_statementCounterpartAccount;
    }
    public function setStatementcounterpartaccount($value)
    {
        $this->m_statementCounterpartAccount = $value;
        return;
    }

    public function getStatementcounterpartbankcode()
    {
        return $this->m_statementCounterpartBankCode;
    }
    public function setStatementcounterpartbankcode($value)
    {
        $this->m_statementCounterpartBankCode = $value;
        return;
    }

    public function getStatementamount()
    {
        return $this->m_statementAmount;
    }
    public function setStatementamount($value)
    {
        $this->m_statementAmount = $value;
        return;
    }

    public function getStatementjournalid()
    {
        return $this->m_statementJournalId;
    }
    public function setStatementjournalid($value)
    {
        $this->m_statementJournalId = $value;
        return;
    }

    public function getStatementstackid()
    {
        return $this->m_statementStackId;
    }
    public function setStatementstackid($value)
    {
        $this->m_statementStackId = $value;
        return;
    }

    public function getOrigStatementid()
    {
        return $this->m_statementId_Orig;
    }
    public function setOrigStatementid($value)
    {
        if (isset($this->m_statementId_Orig)) { return; }
        $this->m_statementId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setStatementbookid($arrValues['statementBookId']);
        $this->setStatementaccountid($arrValues['statementAccountId']);
        $this->setStatementid($arrValues['statementId']);
        $this->setStatementbookingdate($arrValues['statementBookingDate']);
        $this->setStatementvaluedate($arrValues['statementValueDate']);
        $this->setStatementbookingtext($arrValues['statementBookingText']);
        $this->setStatementreason($arrValues['statementReason']);
        $this->setStatementcounterpart($arrValues['statementCounterpart']);
        $this->setStatementcounterpartaccount($arrValues['statementCounterpartAccount']);
        $this->setStatementcounterpartbankcode($arrValues['statementCounterpartBankCode']);
        $this->setStatementamount($arrValues['statementAmount']);
        $this->setStatementjournalid($arrValues['statementJournalId']);
        $this->setStatementstackid($arrValues['statementStackId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'statementBookId':
                    $this->setStatementbookid($val);
                    break;
                case 'statementAccountId':
                    $this->setStatementaccountid($val);
                    break;
                case 'statementId':
                    $this->setStatementid($val);
                    break;
                case 'statementBookingDate':
                    $this->setStatementbookingdate($val);
                    break;
                case 'statementValueDate':
                    $this->setStatementvaluedate($val);
                    break;
                case 'statementBookingText':
                    $this->setStatementbookingtext($val);
                    break;
                case 'statementReason':
                    $this->setStatementreason($val);
                    break;
                case 'statementCounterpart':
                    $this->setStatementcounterpart($val);
                    break;
                case 'statementCounterpartAccount':
                    $this->setStatementcounterpartaccount($val);
                    break;
                case 'statementCounterpartBankCode':
                    $this->setStatementcounterpartbankcode($val);
                    break;
                case 'statementAmount':
                    $this->setStatementamount($val);
                    break;
                case 'statementJournalId':
                    $this->setStatementjournalid($val);
                    break;
                case 'statementStackId':
                    $this->setStatementstackid($val);
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
        $arrValues['statementBookId'] = $this->getStatementbookid();
        $arrValues['statementAccountId'] = $this->getStatementaccountid();
        $arrValues['statementId'] = $this->getStatementid();
        $arrValues['statementBookingDate'] = $this->getStatementbookingdate();
        $arrValues['statementValueDate'] = $this->getStatementvaluedate();
        $arrValues['statementBookingText'] = $this->getStatementbookingtext();
        $arrValues['statementReason'] = $this->getStatementreason();
        $arrValues['statementCounterpart'] = $this->getStatementcounterpart();
        $arrValues['statementCounterpartAccount'] = $this->getStatementcounterpartaccount();
        $arrValues['statementCounterpartBankCode'] = $this->getStatementcounterpartbankcode();
        $arrValues['statementAmount'] = $this->getStatementamount();
        $arrValues['statementJournalId'] = $this->getStatementjournalid();
        $arrValues['statementStackId'] = $this->getStatementstackid();
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
