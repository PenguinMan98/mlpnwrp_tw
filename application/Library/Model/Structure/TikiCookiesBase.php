<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCookiesBase
{
    protected $m_cookieId;
    protected $m_cookie;
    protected $m_cookieId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiCookiesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCookieid()
    {
        return $this->m_cookieId;
    }
    public function setCookieid($value)
    {
        $this->m_cookieId = $value;
        $this->setOrigCookieid($value);
        return;
    }

    public function getCookie()
    {
        return $this->m_cookie;
    }
    public function setCookie($value)
    {
        $this->m_cookie = $value;
        return;
    }

    public function getOrigCookieid()
    {
        return $this->m_cookieId_Orig;
    }
    public function setOrigCookieid($value)
    {
        if (isset($this->m_cookieId_Orig)) { return; }
        $this->m_cookieId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCookieid($arrValues['cookieId']);
        $this->setCookie($arrValues['cookie']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'cookieId':
                    $this->setCookieid($val);
                    break;
                case 'cookie':
                    $this->setCookie($val);
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
        $arrValues['cookieId'] = $this->getCookieid();
        $arrValues['cookie'] = $this->getCookie();
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
