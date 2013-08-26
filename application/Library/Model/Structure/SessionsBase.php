<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_SessionsBase
{
    protected $m_sesskey;
    protected $m_expiry;
    protected $m_expireref;
    protected $m_data;
    protected $m_sesskey_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function SessionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getSesskey()
    {
        return $this->m_sesskey;
    }
    public function setSesskey($value)
    {
        $this->m_sesskey = $value;
        $this->setOrigSesskey($value);
        return;
    }

    public function getExpiry()
    {
        return $this->m_expiry;
    }
    public function setExpiry($value)
    {
        $this->m_expiry = $value;
        return;
    }

    public function getExpireref()
    {
        return $this->m_expireref;
    }
    public function setExpireref($value)
    {
        $this->m_expireref = $value;
        return;
    }

    public function getData()
    {
        return $this->m_data;
    }
    public function setData($value)
    {
        $this->m_data = $value;
        return;
    }

    public function getOrigSesskey()
    {
        return $this->m_sesskey_Orig;
    }
    public function setOrigSesskey($value)
    {
        if (isset($this->m_sesskey_Orig)) { return; }
        $this->m_sesskey_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setSesskey($arrValues['sesskey']);
        $this->setExpiry($arrValues['expiry']);
        $this->setExpireref($arrValues['expireref']);
        $this->setData($arrValues['data']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'sesskey':
                    $this->setSesskey($val);
                    break;
                case 'expiry':
                    $this->setExpiry($val);
                    break;
                case 'expireref':
                    $this->setExpireref($val);
                    break;
                case 'data':
                    $this->setData($val);
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
        $arrValues['sesskey'] = $this->getSesskey();
        $arrValues['expiry'] = $this->getExpiry();
        $arrValues['expireref'] = $this->getExpireref();
        $arrValues['data'] = $this->getData();
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
