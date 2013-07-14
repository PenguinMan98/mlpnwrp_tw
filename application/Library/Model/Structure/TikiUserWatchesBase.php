<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserWatchesBase
{
    protected $m_watchId;
    protected $m_user;
    protected $m_event;
    protected $m_object;
    protected $m_title;
    protected $m_type;
    protected $m_url;
    protected $m_email;
    protected $m_watchId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
            $this->setEvent('');
            $this->setObject('');
        }
        return;
    }
    public function TikiUserWatchesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getWatchid()
    {
        return $this->m_watchId;
    }
    public function setWatchid($value)
    {
        $this->m_watchId = $value;
        $this->setOrigWatchid($value);
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

    public function getEvent()
    {
        return $this->m_event;
    }
    public function setEvent($value)
    {
        $this->m_event = $value;
        return;
    }

    public function getObject()
    {
        return $this->m_object;
    }
    public function setObject($value)
    {
        $this->m_object = $value;
        return;
    }

    public function getTitle()
    {
        return $this->m_title;
    }
    public function setTitle($value)
    {
        $this->m_title = $value;
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        return;
    }

    public function getUrl()
    {
        return $this->m_url;
    }
    public function setUrl($value)
    {
        $this->m_url = $value;
        return;
    }

    public function getEmail()
    {
        return $this->m_email;
    }
    public function setEmail($value)
    {
        $this->m_email = $value;
        return;
    }

    public function getOrigWatchid()
    {
        return $this->m_watchId_Orig;
    }
    public function setOrigWatchid($value)
    {
        if (isset($this->m_watchId_Orig)) { return; }
        $this->m_watchId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setWatchid($arrValues['watchId']);
        $this->setUser($arrValues['user']);
        $this->setEvent($arrValues['event']);
        $this->setObject($arrValues['object']);
        $this->setTitle($arrValues['title']);
        $this->setType($arrValues['type']);
        $this->setUrl($arrValues['url']);
        $this->setEmail($arrValues['email']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'watchId':
                    $this->setWatchid($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'event':
                    $this->setEvent($val);
                    break;
                case 'object':
                    $this->setObject($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'url':
                    $this->setUrl($val);
                    break;
                case 'email':
                    $this->setEmail($val);
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
        $arrValues['watchId'] = $this->getWatchid();
        $arrValues['user'] = $this->getUser();
        $arrValues['event'] = $this->getEvent();
        $arrValues['object'] = $this->getObject();
        $arrValues['title'] = $this->getTitle();
        $arrValues['type'] = $this->getType();
        $arrValues['url'] = $this->getUrl();
        $arrValues['email'] = $this->getEmail();
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
