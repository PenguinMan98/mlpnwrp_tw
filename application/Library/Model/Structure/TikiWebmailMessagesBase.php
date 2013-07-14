<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiWebmailMessagesBase
{
    protected $m_accountId;
    protected $m_mailId;
    protected $m_user;
    protected $m_isRead;
    protected $m_isReplied;
    protected $m_isFlagged;
    protected $m_flaggedMsg;
    protected $m_accountId_Orig;
    protected $m_mailId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
            $this->setFlaggedmsg('');
        }
        return;
    }
    public function TikiWebmailMessagesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getAccountid()
    {
        return $this->m_accountId;
    }
    public function setAccountid($value)
    {
        $this->m_accountId = $value;
        $this->setOrigAccountid($value);
        return;
    }

    public function getMailid()
    {
        return $this->m_mailId;
    }
    public function setMailid($value)
    {
        $this->m_mailId = $value;
        $this->setOrigMailid($value);
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

    public function getFlaggedmsg()
    {
        return $this->m_flaggedMsg;
    }
    public function setFlaggedmsg($value)
    {
        $this->m_flaggedMsg = $value;
        return;
    }

    public function getOrigAccountid()
    {
        return $this->m_accountId_Orig;
    }
    public function setOrigAccountid($value)
    {
        if (isset($this->m_accountId_Orig)) { return; }
        $this->m_accountId_Orig = $value;
        return;
    }

    public function getOrigMailid()
    {
        return $this->m_mailId_Orig;
    }
    public function setOrigMailid($value)
    {
        if (isset($this->m_mailId_Orig)) { return; }
        $this->m_mailId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setAccountid($arrValues['accountId']);
        $this->setMailid($arrValues['mailId']);
        $this->setUser($arrValues['user']);
        $this->setIsread($arrValues['isRead']);
        $this->setIsreplied($arrValues['isReplied']);
        $this->setIsflagged($arrValues['isFlagged']);
        $this->setFlaggedmsg($arrValues['flaggedMsg']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'accountId':
                    $this->setAccountid($val);
                    break;
                case 'mailId':
                    $this->setMailid($val);
                    break;
                case 'user':
                    $this->setUser($val);
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
                case 'flaggedMsg':
                    $this->setFlaggedmsg($val);
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
        $arrValues['accountId'] = $this->getAccountid();
        $arrValues['mailId'] = $this->getMailid();
        $arrValues['user'] = $this->getUser();
        $arrValues['isRead'] = $this->getIsread();
        $arrValues['isReplied'] = $this->getIsreplied();
        $arrValues['isFlagged'] = $this->getIsflagged();
        $arrValues['flaggedMsg'] = $this->getFlaggedmsg();
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
