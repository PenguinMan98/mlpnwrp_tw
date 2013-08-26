<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_MessuArchiveBase
{
    protected $m_msgId;
    protected $m_user;
    protected $m_user_from;
    protected $m_user_to;
    protected $m_user_cc;
    protected $m_user_bcc;
    protected $m_subject;
    protected $m_body;
    protected $m_hash;
    protected $m_replyto_hash;
    protected $m_date;
    protected $m_isRead;
    protected $m_isReplied;
    protected $m_isFlagged;
    protected $m_priority;
    protected $m_msgId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
            $this->setUserFrom('');
        }
        return;
    }
    public function MessuArchiveBase($arrData = null)
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

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        return;
    }

    public function getUserFrom()
    {
        return $this->m_user_from;
    }
    public function setUserFrom($value)
    {
        $this->m_user_from = $value;
        return;
    }

    public function getUserTo()
    {
        return $this->m_user_to;
    }
    public function setUserTo($value)
    {
        $this->m_user_to = $value;
        return;
    }

    public function getUserCc()
    {
        return $this->m_user_cc;
    }
    public function setUserCc($value)
    {
        $this->m_user_cc = $value;
        return;
    }

    public function getUserBcc()
    {
        return $this->m_user_bcc;
    }
    public function setUserBcc($value)
    {
        $this->m_user_bcc = $value;
        return;
    }

    public function getSubject()
    {
        return $this->m_subject;
    }
    public function setSubject($value)
    {
        $this->m_subject = $value;
        return;
    }

    public function getBody()
    {
        return $this->m_body;
    }
    public function setBody($value)
    {
        $this->m_body = $value;
        return;
    }

    public function getHash()
    {
        return $this->m_hash;
    }
    public function setHash($value)
    {
        $this->m_hash = $value;
        return;
    }

    public function getReplytoHash()
    {
        return $this->m_replyto_hash;
    }
    public function setReplytoHash($value)
    {
        $this->m_replyto_hash = $value;
        return;
    }

    public function getDate()
    {
        return $this->m_date;
    }
    public function setDate($value)
    {
        $this->m_date = $value;
        return;
    }

    public function getIsread()
    {
        return $this->m_isRead;
    }
    public function setIsread($value)
    {
        $this->m_isRead = $value;
        return;
    }

    public function getIsreplied()
    {
        return $this->m_isReplied;
    }
    public function setIsreplied($value)
    {
        $this->m_isReplied = $value;
        return;
    }

    public function getIsflagged()
    {
        return $this->m_isFlagged;
    }
    public function setIsflagged($value)
    {
        $this->m_isFlagged = $value;
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
        $this->setUser($arrValues['user']);
        $this->setUserFrom($arrValues['user_from']);
        $this->setUserTo($arrValues['user_to']);
        $this->setUserCc($arrValues['user_cc']);
        $this->setUserBcc($arrValues['user_bcc']);
        $this->setSubject($arrValues['subject']);
        $this->setBody($arrValues['body']);
        $this->setHash($arrValues['hash']);
        $this->setReplytoHash($arrValues['replyto_hash']);
        $this->setDate($arrValues['date']);
        $this->setIsread($arrValues['isRead']);
        $this->setIsreplied($arrValues['isReplied']);
        $this->setIsflagged($arrValues['isFlagged']);
        $this->setPriority($arrValues['priority']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'msgId':
                    $this->setMsgid($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'user_from':
                    $this->setUserFrom($val);
                    break;
                case 'user_to':
                    $this->setUserTo($val);
                    break;
                case 'user_cc':
                    $this->setUserCc($val);
                    break;
                case 'user_bcc':
                    $this->setUserBcc($val);
                    break;
                case 'subject':
                    $this->setSubject($val);
                    break;
                case 'body':
                    $this->setBody($val);
                    break;
                case 'hash':
                    $this->setHash($val);
                    break;
                case 'replyto_hash':
                    $this->setReplytoHash($val);
                    break;
                case 'date':
                    $this->setDate($val);
                    break;
                case 'isRead':
                    $this->setIsread($val);
                    break;
                case 'isReplied':
                    $this->setIsreplied($val);
                    break;
                case 'isFlagged':
                    $this->setIsflagged($val);
                    break;
                case 'priority':
                    $this->setPriority($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['user_from'] = $this->getUserFrom();
        $arrValues['user_to'] = $this->getUserTo();
        $arrValues['user_cc'] = $this->getUserCc();
        $arrValues['user_bcc'] = $this->getUserBcc();
        $arrValues['subject'] = $this->getSubject();
        $arrValues['body'] = $this->getBody();
        $arrValues['hash'] = $this->getHash();
        $arrValues['replyto_hash'] = $this->getReplytoHash();
        $arrValues['date'] = $this->getDate();
        $arrValues['isRead'] = $this->getIsread();
        $arrValues['isReplied'] = $this->getIsreplied();
        $arrValues['isFlagged'] = $this->getIsflagged();
        $arrValues['priority'] = $this->getPriority();
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
