<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUsersScoreBase
{
    protected $m_user;
    protected $m_event_id;
    protected $m_expire;
    protected $m_tstamp;
    protected $m_user_Orig;
    protected $m_event_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setExpire(0);
            $this->setTstamp('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function TikiUsersScoreBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        $this->setOrigUser($value);
        return;
    }

    public function getEventId()
    {
        return $this->m_event_id;
    }
    public function setEventId($value)
    {
        $this->m_event_id = $value;
        $this->setOrigEventId($value);
        return;
    }

    public function getExpire()
    {
        return $this->m_expire;
    }
    public function setExpire($value)
    {
        $this->m_expire = $value;
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

    public function getOrigUser()
    {
        return $this->m_user_Orig;
    }
    public function setOrigUser($value)
    {
        if (isset($this->m_user_Orig)) { return; }
        $this->m_user_Orig = $value;
        return;
    }

    public function getOrigEventId()
    {
        return $this->m_event_id_Orig;
    }
    public function setOrigEventId($value)
    {
        if (isset($this->m_event_id_Orig)) { return; }
        $this->m_event_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUser($arrValues['user']);
        $this->setEventId($arrValues['event_id']);
        $this->setExpire($arrValues['expire']);
        $this->setTstamp($arrValues['tstamp']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'event_id':
                    $this->setEventId($val);
                    break;
                case 'expire':
                    $this->setExpire($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['event_id'] = $this->getEventId();
        $arrValues['expire'] = $this->getExpire();
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
