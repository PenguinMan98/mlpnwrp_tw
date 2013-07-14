<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiShoutboxBase
{
    protected $m_msgId;
    protected $m_message;
    protected $m_timestamp;
    protected $m_user;
    protected $m_hash;
    protected $m_tweetId;
    protected $m_msgId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
            $this->setTweetid(0);
        }
        return;
    }
    public function TikiShoutboxBase($arrData = null)
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

    public function getMessage()
    {
        return $this->m_message;
    }
    public function setMessage($value)
    {
        $this->m_message = $value;
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

    public function getHash()
    {
        return $this->m_hash;
    }
    public function setHash($value)
    {
        $this->m_hash = $value;
        return;
    }

    public function getTweetid()
    {
        return $this->m_tweetId;
    }
    public function setTweetid($value)
    {
        $this->m_tweetId = $value;
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
        $this->setMessage($arrValues['message']);
        $this->setTimestamp($arrValues['timestamp']);
        $this->setUser($arrValues['user']);
        $this->setHash($arrValues['hash']);
        $this->setTweetid($arrValues['tweetId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'msgId':
                    $this->setMsgid($val);
                    break;
                case 'message':
                    $this->setMessage($val);
                    break;
                case 'timestamp':
                    $this->setTimestamp($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'hash':
                    $this->setHash($val);
                    break;
                case 'tweetId':
                    $this->setTweetid($val);
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
        $arrValues['message'] = $this->getMessage();
        $arrValues['timestamp'] = $this->getTimestamp();
        $arrValues['user'] = $this->getUser();
        $arrValues['hash'] = $this->getHash();
        $arrValues['tweetId'] = $this->getTweetid();
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
