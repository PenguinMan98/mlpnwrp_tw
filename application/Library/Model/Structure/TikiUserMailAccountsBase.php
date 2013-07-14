<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserMailAccountsBase
{
    protected $m_accountId;
    protected $m_user;
    protected $m_account;
    protected $m_pop;
    protected $m_current;
    protected $m_port;
    protected $m_username;
    protected $m_pass;
    protected $m_msgs;
    protected $m_smtp;
    protected $m_useAuth;
    protected $m_smtpPort;
    protected $m_flagsPublic;
    protected $m_autoRefresh;
    protected $m_imap;
    protected $m_mbox;
    protected $m_maildir;
    protected $m_useSSL;
    protected $m_fromEmail;
    protected $m_accountId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
            $this->setAccount('');
            $this->setFlagspublic('n');
            $this->setAutorefresh(0);
            $this->setUsessl('n');
            $this->setFromemail('');
        }
        return;
    }
    public function TikiUserMailAccountsBase($arrData = null)
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

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        return;
    }

    public function getAccount()
    {
        return $this->m_account;
    }
    public function setAccount($value)
    {
        $this->m_account = $value;
        return;
    }

    public function getPop()
    {
        return $this->m_pop;
    }
    public function setPop($value)
    {
        $this->m_pop = $value;
        return;
    }

    public function getCurrent()
    {
        return $this->m_current;
    }
    public function setCurrent($value)
    {
        $this->m_current = $value;
        return;
    }

    public function getPort()
    {
        return $this->m_port;
    }
    public function setPort($value)
    {
        $this->m_port = $value;
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

    public function getPass()
    {
        return $this->m_pass;
    }
    public function setPass($value)
    {
        $this->m_pass = $value;
        return;
    }

    public function getMsgs()
    {
        return $this->m_msgs;
    }
    public function setMsgs($value)
    {
        $this->m_msgs = $value;
        return;
    }

    public function getSmtp()
    {
        return $this->m_smtp;
    }
    public function setSmtp($value)
    {
        $this->m_smtp = $value;
        return;
    }

    public function getUseauth()
    {
        return $this->m_useAuth;
    }
    public function setUseauth($value)
    {
        $this->m_useAuth = $value;
        return;
    }

    public function getSmtpport()
    {
        return $this->m_smtpPort;
    }
    public function setSmtpport($value)
    {
        $this->m_smtpPort = $value;
        return;
    }

    public function getFlagspublic()
    {
        return $this->m_flagsPublic;
    }
    public function setFlagspublic($value)
    {
        $this->m_flagsPublic = $value;
        return;
    }

    public function getAutorefresh()
    {
        return $this->m_autoRefresh;
    }
    public function setAutorefresh($value)
    {
        $this->m_autoRefresh = $value;
        return;
    }

    public function getImap()
    {
        return $this->m_imap;
    }
    public function setImap($value)
    {
        $this->m_imap = $value;
        return;
    }

    public function getMbox()
    {
        return $this->m_mbox;
    }
    public function setMbox($value)
    {
        $this->m_mbox = $value;
        return;
    }

    public function getMaildir()
    {
        return $this->m_maildir;
    }
    public function setMaildir($value)
    {
        $this->m_maildir = $value;
        return;
    }

    public function getUsessl()
    {
        return $this->m_useSSL;
    }
    public function setUsessl($value)
    {
        $this->m_useSSL = $value;
        return;
    }

    public function getFromemail()
    {
        return $this->m_fromEmail;
    }
    public function setFromemail($value)
    {
        $this->m_fromEmail = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setAccountid($arrValues['accountId']);
        $this->setUser($arrValues['user']);
        $this->setAccount($arrValues['account']);
        $this->setPop($arrValues['pop']);
        $this->setCurrent($arrValues['current']);
        $this->setPort($arrValues['port']);
        $this->setUsername($arrValues['username']);
        $this->setPass($arrValues['pass']);
        $this->setMsgs($arrValues['msgs']);
        $this->setSmtp($arrValues['smtp']);
        $this->setUseauth($arrValues['useAuth']);
        $this->setSmtpport($arrValues['smtpPort']);
        $this->setFlagspublic($arrValues['flagsPublic']);
        $this->setAutorefresh($arrValues['autoRefresh']);
        $this->setImap($arrValues['imap']);
        $this->setMbox($arrValues['mbox']);
        $this->setMaildir($arrValues['maildir']);
        $this->setUsessl($arrValues['useSSL']);
        $this->setFromemail($arrValues['fromEmail']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'accountId':
                    $this->setAccountid($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'account':
                    $this->setAccount($val);
                    break;
                case 'pop':
                    $this->setPop($val);
                    break;
                case 'current':
                    $this->setCurrent($val);
                    break;
                case 'port':
                    $this->setPort($val);
                    break;
                case 'username':
                    $this->setUsername($val);
                    break;
                case 'pass':
                    $this->setPass($val);
                    break;
                case 'msgs':
                    $this->setMsgs($val);
                    break;
                case 'smtp':
                    $this->setSmtp($val);
                    break;
                case 'useAuth':
                    $this->setUseauth($val);
                    break;
                case 'smtpPort':
                    $this->setSmtpport($val);
                    break;
                case 'flagsPublic':
                    $this->setFlagspublic($val);
                    break;
                case 'autoRefresh':
                    $this->setAutorefresh($val);
                    break;
                case 'imap':
                    $this->setImap($val);
                    break;
                case 'mbox':
                    $this->setMbox($val);
                    break;
                case 'maildir':
                    $this->setMaildir($val);
                    break;
                case 'useSSL':
                    $this->setUsessl($val);
                    break;
                case 'fromEmail':
                    $this->setFromemail($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['account'] = $this->getAccount();
        $arrValues['pop'] = $this->getPop();
        $arrValues['current'] = $this->getCurrent();
        $arrValues['port'] = $this->getPort();
        $arrValues['username'] = $this->getUsername();
        $arrValues['pass'] = $this->getPass();
        $arrValues['msgs'] = $this->getMsgs();
        $arrValues['smtp'] = $this->getSmtp();
        $arrValues['useAuth'] = $this->getUseauth();
        $arrValues['smtpPort'] = $this->getSmtpport();
        $arrValues['flagsPublic'] = $this->getFlagspublic();
        $arrValues['autoRefresh'] = $this->getAutorefresh();
        $arrValues['imap'] = $this->getImap();
        $arrValues['mbox'] = $this->getMbox();
        $arrValues['maildir'] = $this->getMaildir();
        $arrValues['useSSL'] = $this->getUsessl();
        $arrValues['fromEmail'] = $this->getFromemail();
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
