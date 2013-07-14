<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiLiveSupportMessagesBase
{
    protected $m_msgId;
    protected $m_data;
    protected $m_timestamp;
    protected $m_user;
    protected $m_username;
    protected $m_priority;
    protected $m_status;
    protected $m_assigned_to;
    protected $m_resolution;
    protected $m_title;
    protected $m_module;
    protected $m_email;
    protected $m_msgId_Orig;

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
    public function TikiLiveSupportMessagesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getMsgid()
    {
        return $this->m_msgId;
    }
    public function setMsgid($value)
    {
        $this->m_msgId = $value;
        $this->setOrigMsgid($value);
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

    public function getTimestamp()
    {
        return $this->m_timestamp;
    }
    public function setTimestamp($value)
    {
        $this->m_timestamp = $value;
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

    public function getUsername()
    {
        return $this->m_username;
    }
    public function setUsername($value)
    {
        $this->m_username = $value;
        return;
    }

    public function getPriority()
    {
        return $this->m_priority;
    }
    public function setPriority($value)
    {
        $this->m_priority = $value;
        return;
    }

    public function getStatus()
    {
        return $this->m_status;
    }
    public function setStatus($value)
    {
        $this->m_status = $value;
        return;
    }

    public function getAssignedTo()
    {
        return $this->m_assigned_to;
    }
    public function setAssignedTo($value)
    {
        $this->m_assigned_to = $value;
        return;
    }

    public function getResolution()
    {
        return $this->m_resolution;
    }
    public function setResolution($value)
    {
        $this->m_resolution = $value;
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

    public function getModule()
    {
        return $this->m_module;
    }
    public function setModule($value)
    {
        $this->m_module = $value;
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

    public function getOrigMsgid()
    {
        return $this->m_msgId_Orig;
    }
    public function setOrigMsgid($value)
    {
        if (isset($this->m_msgId_Orig)) { return; }
        $this->m_msgId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setMsgid($arrValues['msgId']);
        $this->setData($arrValues['data']);
        $this->setTimestamp($arrValues['timestamp']);
        $this->setUser($arrValues['user']);
        $this->setUsername($arrValues['username']);
        $this->setPriority($arrValues['priority']);
        $this->setStatus($arrValues['status']);
        $this->setAssignedTo($arrValues['assigned_to']);
        $this->setResolution($arrValues['resolution']);
        $this->setTitle($arrValues['title']);
        $this->setModule($arrValues['module']);
        $this->setEmail($arrValues['email']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'msgId':
                    $this->setMsgid($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'timestamp':
                    $this->setTimestamp($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'username':
                    $this->setUsername($val);
                    break;
                case 'priority':
                    $this->setPriority($val);
                    break;
                case 'status':
                    $this->setStatus($val);
                    break;
                case 'assigned_to':
                    $this->setAssignedTo($val);
                    break;
                case 'resolution':
                    $this->setResolution($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'module':
                    $this->setModule($val);
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
        $arrValues['msgId'] = $this->getMsgid();
        $arrValues['data'] = $this->getData();
        $arrValues['timestamp'] = $this->getTimestamp();
        $arrValues['user'] = $this->getUser();
        $arrValues['username'] = $this->getUsername();
        $arrValues['priority'] = $this->getPriority();
        $arrValues['status'] = $this->getStatus();
        $arrValues['assigned_to'] = $this->getAssignedTo();
        $arrValues['resolution'] = $this->getResolution();
        $arrValues['title'] = $this->getTitle();
        $arrValues['module'] = $this->getModule();
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
