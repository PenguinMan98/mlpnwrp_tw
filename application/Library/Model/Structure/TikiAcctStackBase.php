<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiAcctStackBase
{
    protected $m_stackBookId;
    protected $m_stackId;
    protected $m_stackDate;
    protected $m_stackDescription;
    protected $m_stackTs;
    protected $m_stackId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setStackdate('0000-00-00');
            $this->setStackts('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function TikiAcctStackBase($arrData = null)
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
        return;
    }

    public function getStackid()
    {
        return $this->m_stackId;
    }
    public function setStackid($value)
    {
        $this->m_stackId = $value;
        $this->setOrigStackid($value);
        return;
    }

    public function getStackdate()
    {
        return $this->m_stackDate;
    }
    public function setStackdate($value)
    {
        $this->m_stackDate = $value;
        return;
    }

    public function getStackdescription()
    {
        return $this->m_stackDescription;
    }
    public function setStackdescription($value)
    {
        $this->m_stackDescription = $value;
        return;
    }

    public function getStackts()
    {
        return $this->m_stackTs;
    }
    public function setStackts($value)
    {
        $this->m_stackTs = $value;
        return;
    }

    public function getOrigStackid()
    {
        return $this->m_stackId_Orig;
    }
    public function setOrigStackid($value)
    {
        if (isset($this->m_stackId_Orig)) { return; }
        $this->m_stackId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setStackbookid($arrValues['stackBookId']);
        $this->setStackid($arrValues['stackId']);
        $this->setStackdate($arrValues['stackDate']);
        $this->setStackdescription($arrValues['stackDescription']);
        $this->setStackts($arrValues['stackTs']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'stackBookId':
                    $this->setStackbookid($val);
                    break;
                case 'stackId':
                    $this->setStackid($val);
                    break;
                case 'stackDate':
                    $this->setStackdate($val);
                    break;
                case 'stackDescription':
                    $this->setStackdescription($val);
                    break;
                case 'stackTs':
                    $this->setStackts($val);
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
        $arrValues['stackId'] = $this->getStackid();
        $arrValues['stackDate'] = $this->getStackdate();
        $arrValues['stackDescription'] = $this->getStackdescription();
        $arrValues['stackTs'] = $this->getStackts();
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
