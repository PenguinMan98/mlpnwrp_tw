<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUrlShortenerBase
{
    protected $m_urlId;
    protected $m_user;
    protected $m_longurl;
    protected $m_longurl_hash;
    protected $m_service;
    protected $m_shorturl;
    protected $m_urlId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiUrlShortenerBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUrlid()
    {
        return $this->m_urlId;
    }
    public function setUrlid($value)
    {
        $this->m_urlId = $value;
        $this->setOrigUrlid($value);
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

    public function getLongurl()
    {
        return $this->m_longurl;
    }
    public function setLongurl($value)
    {
        $this->m_longurl = $value;
        return;
    }

    public function getLongurlHash()
    {
        return $this->m_longurl_hash;
    }
    public function setLongurlHash($value)
    {
        $this->m_longurl_hash = $value;
        return;
    }

    public function getService()
    {
        return $this->m_service;
    }
    public function setService($value)
    {
        $this->m_service = $value;
        return;
    }

    public function getShorturl()
    {
        return $this->m_shorturl;
    }
    public function setShorturl($value)
    {
        $this->m_shorturl = $value;
        return;
    }

    public function getOrigUrlid()
    {
        return $this->m_urlId_Orig;
    }
    public function setOrigUrlid($value)
    {
        if (isset($this->m_urlId_Orig)) { return; }
        $this->m_urlId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUrlid($arrValues['urlId']);
        $this->setUser($arrValues['user']);
        $this->setLongurl($arrValues['longurl']);
        $this->setLongurlHash($arrValues['longurl_hash']);
        $this->setService($arrValues['service']);
        $this->setShorturl($arrValues['shorturl']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'urlId':
                    $this->setUrlid($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'longurl':
                    $this->setLongurl($val);
                    break;
                case 'longurl_hash':
                    $this->setLongurlHash($val);
                    break;
                case 'service':
                    $this->setService($val);
                    break;
                case 'shorturl':
                    $this->setShorturl($val);
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
        $arrValues['urlId'] = $this->getUrlid();
        $arrValues['user'] = $this->getUser();
        $arrValues['longurl'] = $this->getLongurl();
        $arrValues['longurl_hash'] = $this->getLongurlHash();
        $arrValues['service'] = $this->getService();
        $arrValues['shorturl'] = $this->getShorturl();
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
