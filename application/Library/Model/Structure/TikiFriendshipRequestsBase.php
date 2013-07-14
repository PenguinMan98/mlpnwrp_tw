<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiFriendshipRequestsBase
{
    protected $m_userFrom;
    protected $m_userTo;
    protected $m_tstamp;
    protected $m_userFrom_Orig;
    protected $m_userTo_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTstamp('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function TikiFriendshipRequestsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUserfrom()
    {
        return $this->m_userFrom;
    }
    public function setUserfrom($value)
    {
        $this->m_userFrom = $value;
        $this->setOrigUserfrom($value);
        return;
    }

    public function getUserto()
    {
        return $this->m_userTo;
    }
    public function setUserto($value)
    {
        $this->m_userTo = $value;
        $this->setOrigUserto($value);
        return;
    }

    public function getTstamp()
    {
        return $this->m_tstamp;
    }
    public function setTstamp($value)
    {
        $this->m_tstamp = $value;
        return;
    }

    public function getOrigUserfrom()
    {
        return $this->m_userFrom_Orig;
    }
    public function setOrigUserfrom($value)
    {
        if (isset($this->m_userFrom_Orig)) { return; }
        $this->m_userFrom_Orig = $value;
        return;
    }

    public function getOrigUserto()
    {
        return $this->m_userTo_Orig;
    }
    public function setOrigUserto($value)
    {
        if (isset($this->m_userTo_Orig)) { return; }
        $this->m_userTo_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUserfrom($arrValues['userFrom']);
        $this->setUserto($arrValues['userTo']);
        $this->setTstamp($arrValues['tstamp']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'userFrom':
                    $this->setUserfrom($val);
                    break;
                case 'userTo':
                    $this->setUserto($val);
                    break;
                case 'tstamp':
                    $this->setTstamp($val);
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
        $arrValues['userFrom'] = $this->getUserfrom();
        $arrValues['userTo'] = $this->getUserto();
        $arrValues['tstamp'] = $this->getTstamp();
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
