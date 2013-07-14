<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserLoginCookiesBase
{
    protected $m_userId;
    protected $m_secret;
    protected $m_expiration;
    protected $m_userId_Orig;
    protected $m_secret_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setExpiration('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function TikiUserLoginCookiesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUserid()
    {
        return $this->m_userId;
    }
    public function setUserid($value)
    {
        $this->m_userId = $value;
        $this->setOrigUserid($value);
        return;
    }

    public function getSecret()
    {
        return $this->m_secret;
    }
    public function setSecret($value)
    {
        $this->m_secret = $value;
        $this->setOrigSecret($value);
        return;
    }

    public function getExpiration()
    {
        return $this->m_expiration;
    }
    public function setExpiration($value)
    {
        $this->m_expiration = $value;
        return;
    }

    public function getOrigUserid()
    {
        return $this->m_userId_Orig;
    }
    public function setOrigUserid($value)
    {
        if (isset($this->m_userId_Orig)) { return; }
        $this->m_userId_Orig = $value;
        return;
    }

    public function getOrigSecret()
    {
        return $this->m_secret_Orig;
    }
    public function setOrigSecret($value)
    {
        if (isset($this->m_secret_Orig)) { return; }
        $this->m_secret_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUserid($arrValues['userId']);
        $this->setSecret($arrValues['secret']);
        $this->setExpiration($arrValues['expiration']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'userId':
                    $this->setUserid($val);
                    break;
                case 'secret':
                    $this->setSecret($val);
                    break;
                case 'expiration':
                    $this->setExpiration($val);
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
        $arrValues['userId'] = $this->getUserid();
        $arrValues['secret'] = $this->getSecret();
        $arrValues['expiration'] = $this->getExpiration();
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
