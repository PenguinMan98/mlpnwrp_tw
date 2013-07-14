<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiForumReadsBase
{
    protected $m_user;
    protected $m_threadId;
    protected $m_forumId;
    protected $m_timestamp;
    protected $m_user_Orig;
    protected $m_threadId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiForumReadsBase($arrData = null)
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

    public function getThreadid()
    {
        return $this->m_threadId;
    }
    public function setThreadid($value)
    {
        $this->m_threadId = $value;
        $this->setOrigThreadid($value);
        return;
    }

    public function getForumid()
    {
        return $this->m_forumId;
    }
    public function setForumid($value)
    {
        $this->m_forumId = $value;
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

    public function getOrigThreadid()
    {
        return $this->m_threadId_Orig;
    }
    public function setOrigThreadid($value)
    {
        if (isset($this->m_threadId_Orig)) { return; }
        $this->m_threadId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUser($arrValues['user']);
        $this->setThreadid($arrValues['threadId']);
        $this->setForumid($arrValues['forumId']);
        $this->setTimestamp($arrValues['timestamp']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'threadId':
                    $this->setThreadid($val);
                    break;
                case 'forumId':
                    $this->setForumid($val);
                    break;
                case 'timestamp':
                    $this->setTimestamp($val);
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
        $arrValues['threadId'] = $this->getThreadid();
        $arrValues['forumId'] = $this->getForumid();
        $arrValues['timestamp'] = $this->getTimestamp();
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
