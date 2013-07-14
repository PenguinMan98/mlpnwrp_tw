<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiMailinAccountsBase
{
    protected $m_accountId;
    protected $m_user;
    protected $m_account;
    protected $m_pop;
    protected $m_port;
    protected $m_username;
    protected $m_pass;
    protected $m_active;
    protected $m_type;
    protected $m_smtp;
    protected $m_useAuth;
    protected $m_smtpPort;
    protected $m_anonymous;
    protected $m_attachments;
    protected $m_article_topicId;
    protected $m_article_type;
    protected $m_discard_after;
    protected $m_accountId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
            $this->setAccount('');
            $this->setAnonymous('y');
            $this->setAttachments('n');
        }
        return;
    }
    public function TikiMailinAccountsBase($arrData = null)
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

    public function getActive()
    {
        return $this->m_active;
    }
    public function setActive($value)
    {
        $this->m_active = $value;
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

    public function getAnonymous()
    {
        return $this->m_anonymous;
    }
    public function setAnonymous($value)
    {
        $this->m_anonymous = $value;
        return;
    }

    public function getAttachments()
    {
        return $this->m_attachments;
    }
    public function setAttachments($value)
    {
        $this->m_attachments = $value;
        return;
    }

    public function getArticleTopicid()
    {
        return $this->m_article_topicId;
    }
    public function setArticleTopicid($value)
    {
        $this->m_article_topicId = $value;
        return;
    }

    public function getArticleType()
    {
        return $this->m_article_type;
    }
    public function setArticleType($value)
    {
        $this->m_article_type = $value;
        return;
    }

    public function getDiscardAfter()
    {
        return $this->m_discard_after;
    }
    public function setDiscardAfter($value)
    {
        $this->m_discard_after = $value;
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
        $this->setPort($arrValues['port']);
        $this->setUsername($arrValues['username']);
        $this->setPass($arrValues['pass']);
        $this->setActive($arrValues['active']);
        $this->setType($arrValues['type']);
        $this->setSmtp($arrValues['smtp']);
        $this->setUseauth($arrValues['useAuth']);
        $this->setSmtpport($arrValues['smtpPort']);
        $this->setAnonymous($arrValues['anonymous']);
        $this->setAttachments($arrValues['attachments']);
        $this->setArticleTopicid($arrValues['article_topicId']);
        $this->setArticleType($arrValues['article_type']);
        $this->setDiscardAfter($arrValues['discard_after']);
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
                case 'port':
                    $this->setPort($val);
                    break;
                case 'username':
                    $this->setUsername($val);
                    break;
                case 'pass':
                    $this->setPass($val);
                    break;
                case 'active':
                    $this->setActive($val);
                    break;
                case 'type':
                    $this->setType($val);
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
                case 'anonymous':
                    $this->setAnonymous($val);
                    break;
                case 'attachments':
                    $this->setAttachments($val);
                    break;
                case 'article_topicId':
                    $this->setArticleTopicid($val);
                    break;
                case 'article_type':
                    $this->setArticleType($val);
                    break;
                case 'discard_after':
                    $this->setDiscardAfter($val);
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
        $arrValues['port'] = $this->getPort();
        $arrValues['username'] = $this->getUsername();
        $arrValues['pass'] = $this->getPass();
        $arrValues['active'] = $this->getActive();
        $arrValues['type'] = $this->getType();
        $arrValues['smtp'] = $this->getSmtp();
        $arrValues['useAuth'] = $this->getUseauth();
        $arrValues['smtpPort'] = $this->getSmtpport();
        $arrValues['anonymous'] = $this->getAnonymous();
        $arrValues['attachments'] = $this->getAttachments();
        $arrValues['article_topicId'] = $this->getArticleTopicid();
        $arrValues['article_type'] = $this->getArticleType();
        $arrValues['discard_after'] = $this->getDiscardAfter();
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
