<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiInvitedBase
{
    protected $m_id;
    protected $m_id_invite;
    protected $m_email;
    protected $m_firstname;
    protected $m_lastname;
    protected $m_used;
    protected $m_used_on_user;
    protected $m_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiInvitedBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getId()
    {
        return $this->m_id;
    }
    public function setId($value)
    {
        $this->m_id = $value;
        $this->setOrigId($value);
        return;
    }

    public function getIdInvite()
    {
        return $this->m_id_invite;
    }
    public function setIdInvite($value)
    {
        $this->m_id_invite = $value;
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

    public function getFirstname()
    {
        return $this->m_firstname;
    }
    public function setFirstname($value)
    {
        $this->m_firstname = $value;
        return;
    }

    public function getLastname()
    {
        return $this->m_lastname;
    }
    public function setLastname($value)
    {
        $this->m_lastname = $value;
        return;
    }

    public function getUsed()
    {
        return $this->m_used;
    }
    public function setUsed($value)
    {
        $this->m_used = $value;
        return;
    }

    public function getUsedOnUser()
    {
        return $this->m_used_on_user;
    }
    public function setUsedOnUser($value)
    {
        $this->m_used_on_user = $value;
        return;
    }

    public function getOrigId()
    {
        return $this->m_id_Orig;
    }
    public function setOrigId($value)
    {
        if (isset($this->m_id_Orig)) { return; }
        $this->m_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setId($arrValues['id']);
        $this->setIdInvite($arrValues['id_invite']);
        $this->setEmail($arrValues['email']);
        $this->setFirstname($arrValues['firstname']);
        $this->setLastname($arrValues['lastname']);
        $this->setUsed($arrValues['used']);
        $this->setUsedOnUser($arrValues['used_on_user']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'id_invite':
                    $this->setIdInvite($val);
                    break;
                case 'email':
                    $this->setEmail($val);
                    break;
                case 'firstname':
                    $this->setFirstname($val);
                    break;
                case 'lastname':
                    $this->setLastname($val);
                    break;
                case 'used':
                    $this->setUsed($val);
                    break;
                case 'used_on_user':
                    $this->setUsedOnUser($val);
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
        $arrValues['id'] = $this->getId();
        $arrValues['id_invite'] = $this->getIdInvite();
        $arrValues['email'] = $this->getEmail();
        $arrValues['firstname'] = $this->getFirstname();
        $arrValues['lastname'] = $this->getLastname();
        $arrValues['used'] = $this->getUsed();
        $arrValues['used_on_user'] = $this->getUsedOnUser();
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
