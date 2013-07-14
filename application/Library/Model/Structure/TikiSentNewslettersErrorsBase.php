<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSentNewslettersErrorsBase
{
    protected $m_editionId;
    protected $m_email;
    protected $m_login;
    protected $m_error;
    protected $m_editionId_Orig;
    protected $m_email_Orig;
    protected $m_login_Orig;
    protected $m_error_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiSentNewslettersErrorsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getEditionid()
    {
        return $this->m_editionId;
    }
    public function setEditionid($value)
    {
        $this->m_editionId = $value;
        $this->setOrigEditionid($value);
        return;
    }

    public function getEmail()
    {
        return $this->m_email;
    }
    public function setEmail($value)
    {
        $this->m_email = $value;
        $this->setOrigEmail($value);
        return;
    }

    public function getLogin()
    {
        return $this->m_login;
    }
    public function setLogin($value)
    {
        $this->m_login = $value;
        $this->setOrigLogin($value);
        return;
    }

    public function getError()
    {
        return $this->m_error;
    }
    public function setError($value)
    {
        $this->m_error = $value;
        $this->setOrigError($value);
        return;
    }

    public function getOrigEditionid()
    {
        return $this->m_editionId_Orig;
    }
    public function setOrigEditionid($value)
    {
        if (isset($this->m_editionId_Orig)) { return; }
        $this->m_editionId_Orig = $value;
        return;
    }

    public function getOrigEmail()
    {
        return $this->m_email_Orig;
    }
    public function setOrigEmail($value)
    {
        if (isset($this->m_email_Orig)) { return; }
        $this->m_email_Orig = $value;
        return;
    }

    public function getOrigLogin()
    {
        return $this->m_login_Orig;
    }
    public function setOrigLogin($value)
    {
        if (isset($this->m_login_Orig)) { return; }
        $this->m_login_Orig = $value;
        return;
    }

    public function getOrigError()
    {
        return $this->m_error_Orig;
    }
    public function setOrigError($value)
    {
        if (isset($this->m_error_Orig)) { return; }
        $this->m_error_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setEditionid($arrValues['editionId']);
        $this->setEmail($arrValues['email']);
        $this->setLogin($arrValues['login']);
        $this->setError($arrValues['error']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'editionId':
                    $this->setEditionid($val);
                    break;
                case 'email':
                    $this->setEmail($val);
                    break;
                case 'login':
                    $this->setLogin($val);
                    break;
                case 'error':
                    $this->setError($val);
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
        $arrValues['editionId'] = $this->getEditionid();
        $arrValues['email'] = $this->getEmail();
        $arrValues['login'] = $this->getLogin();
        $arrValues['error'] = $this->getError();
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
