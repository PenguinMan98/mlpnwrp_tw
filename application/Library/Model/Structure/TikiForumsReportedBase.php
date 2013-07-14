<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiForumsReportedBase
{
    protected $m_threadId;
    protected $m_forumId;
    protected $m_parentId;
    protected $m_user;
    protected $m_timestamp;
    protected $m_reason;
    protected $m_threadId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setForumid(0);
            $this->setParentid(0);
            $this->setUser('');
        }
        return;
    }
    public function TikiForumsReportedBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getParentid()
    {
        return $this->m_parentId;
    }
    public function setParentid($value)
    {
        $this->m_parentId = $value;
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

    public function getReason()
    {
        return $this->m_reason;
    }
    public function setReason($value)
    {
        $this->m_reason = $value;
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
        $this->setThreadid($arrValues['threadId']);
        $this->setForumid($arrValues['forumId']);
        $this->setParentid($arrValues['parentId']);
        $this->setUser($arrValues['user']);
        $this->setTimestamp($arrValues['timestamp']);
        $this->setReason($arrValues['reason']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'threadId':
                    $this->setThreadid($val);
                    break;
                case 'forumId':
                    $this->setForumid($val);
                    break;
                case 'parentId':
                    $this->setParentid($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'timestamp':
                    $this->setTimestamp($val);
                    break;
                case 'reason':
                    $this->setReason($val);
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
        $arrValues['threadId'] = $this->getThreadid();
        $arrValues['forumId'] = $this->getForumid();
        $arrValues['parentId'] = $this->getParentid();
        $arrValues['user'] = $this->getUser();
        $arrValues['timestamp'] = $this->getTimestamp();
        $arrValues['reason'] = $this->getReason();
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
