<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiRssFeedsBase
{
    protected $m_name;
    protected $m_rssVer;
    protected $m_refresh;
    protected $m_lastUpdated;
    protected $m_cache;
    protected $m_name_Orig;
    protected $m_rssVer_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setRefresh(300);
        }
        return;
    }
    public function TikiRssFeedsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
        $this->setOrigName($value);
        return;
    }

    public function getRssver()
    {
        return $this->m_rssVer;
    }
    public function setRssver($value)
    {
        $this->m_rssVer = $value;
        $this->setOrigRssver($value);
        return;
    }

    public function getRefresh()
    {
        return $this->m_refresh;
    }
    public function setRefresh($value)
    {
        $this->m_refresh = $value;
        return;
    }

    public function getLastupdated()
    {
        return $this->m_lastUpdated;
    }
    public function setLastupdated($value)
    {
        $this->m_lastUpdated = $value;
        return;
    }

    public function getCache()
    {
        return $this->m_cache;
    }
    public function setCache($value)
    {
        $this->m_cache = $value;
        return;
    }

    public function getOrigName()
    {
        return $this->m_name_Orig;
    }
    public function setOrigName($value)
    {
        if (isset($this->m_name_Orig)) { return; }
        $this->m_name_Orig = $value;
        return;
    }

    public function getOrigRssver()
    {
        return $this->m_rssVer_Orig;
    }
    public function setOrigRssver($value)
    {
        if (isset($this->m_rssVer_Orig)) { return; }
        $this->m_rssVer_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setName($arrValues['name']);
        $this->setRssver($arrValues['rssVer']);
        $this->setRefresh($arrValues['refresh']);
        $this->setLastupdated($arrValues['lastUpdated']);
        $this->setCache($arrValues['cache']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'name':
                    $this->setName($val);
                    break;
                case 'rssVer':
                    $this->setRssver($val);
                    break;
                case 'refresh':
                    $this->setRefresh($val);
                    break;
                case 'lastUpdated':
                    $this->setLastupdated($val);
                    break;
                case 'cache':
                    $this->setCache($val);
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
        $arrValues['name'] = $this->getName();
        $arrValues['rssVer'] = $this->getRssver();
        $arrValues['refresh'] = $this->getRefresh();
        $arrValues['lastUpdated'] = $this->getLastupdated();
        $arrValues['cache'] = $this->getCache();
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
