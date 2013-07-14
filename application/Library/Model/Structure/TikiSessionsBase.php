<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSessionsBase
{
    protected $m_sessionId;
    protected $m_user;
    protected $m_timestamp;
    protected $m_tikihost;
    protected $m_sessionId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
        }
        return;
    }
    public function TikiSessionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getSessionid()
    {
        return $this->m_sessionId;
    }
    public function setSessionid($value)
    {
        $this->m_sessionId = $value;
        $this->setOrigSessionid($value);
        return;
    }

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        return;
    }

    public function getTimestamp()
    {
        return $this->m_timestamp;
    }
    public function setTimestamp($value)
    {
        $this->m_timestamp = $value;
        return;
    }

    public function getTikihost()
    {
        return $this->m_tikihost;
    }
    public function setTikihost($value)
    {
        $this->m_tikihost = $value;
        return;
    }

    public function getOrigSessionid()
    {
        return $this->m_sessionId_Orig;
    }
    public function setOrigSessionid($value)
    {
        if (isset($this->m_sessionId_Orig)) { return; }
        $this->m_sessionId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setSessionid($arrValues['sessionId']);
        $this->setUser($arrValues['user']);
        $this->setTimestamp($arrValues['timestamp']);
        $this->setTikihost($arrValues['tikihost']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'sessionId':
                    $this->setSessionid($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'timestamp':
                    $this->setTimestamp($val);
                    break;
                case 'tikihost':
                    $this->setTikihost($val);
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
        $arrValues['sessionId'] = $this->getSessionid();
        $arrValues['user'] = $this->getUser();
        $arrValues['timestamp'] = $this->getTimestamp();
        $arrValues['tikihost'] = $this->getTikihost();
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
