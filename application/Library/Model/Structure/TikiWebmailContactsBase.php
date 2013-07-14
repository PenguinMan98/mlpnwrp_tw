<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiWebmailContactsBase
{
    protected $m_contactId;
    protected $m_firstName;
    protected $m_lastName;
    protected $m_email;
    protected $m_nickname;
    protected $m_user;
    protected $m_contactId_Orig;

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
    public function TikiWebmailContactsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getContactid()
    {
        return $this->m_contactId;
    }
    public function setContactid($value)
    {
        $this->m_contactId = $value;
        $this->setOrigContactid($value);
        return;
    }

    public function getFirstname()
    {
        return $this->m_firstName;
    }
    public function setFirstname($value)
    {
        $this->m_firstName = $value;
        return;
    }

    public function getLastname()
    {
        return $this->m_lastName;
    }
    public function setLastname($value)
    {
        $this->m_lastName = $value;
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

    public function getNickname()
    {
        return $this->m_nickname;
    }
    public function setNickname($value)
    {
        $this->m_nickname = $value;
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

    public function getOrigContactid()
    {
        return $this->m_contactId_Orig;
    }
    public function setOrigContactid($value)
    {
        if (isset($this->m_contactId_Orig)) { return; }
        $this->m_contactId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setContactid($arrValues['contactId']);
        $this->setFirstname($arrValues['firstName']);
        $this->setLastname($arrValues['lastName']);
        $this->setEmail($arrValues['email']);
        $this->setNickname($arrValues['nickname']);
        $this->setUser($arrValues['user']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'contactId':
                    $this->setContactid($val);
                    break;
                case 'firstName':
                    $this->setFirstname($val);
                    break;
                case 'lastName':
                    $this->setLastname($val);
                    break;
                case 'email':
                    $this->setEmail($val);
                    break;
                case 'nickname':
                    $this->setNickname($val);
                    break;
                case 'user':
                    $this->setUser($val);
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
        $arrValues['contactId'] = $this->getContactid();
        $arrValues['firstName'] = $this->getFirstname();
        $arrValues['lastName'] = $this->getLastname();
        $arrValues['email'] = $this->getEmail();
        $arrValues['nickname'] = $this->getNickname();
        $arrValues['user'] = $this->getUser();
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
