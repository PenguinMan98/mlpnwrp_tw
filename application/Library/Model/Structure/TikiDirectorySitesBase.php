<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiDirectorySitesBase
{
    protected $m_siteId;
    protected $m_name;
    protected $m_description;
    protected $m_url;
    protected $m_country;
    protected $m_hits;
    protected $m_isValid;
    protected $m_created;
    protected $m_lastModif;
    protected $m_cache;
    protected $m_cache_timestamp;
    protected $m_siteId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiDirectorySitesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getSiteid()
    {
        return $this->m_siteId;
    }
    public function setSiteid($value)
    {
        $this->m_siteId = $value;
        $this->setOrigSiteid($value);
        return;
    }

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
        return;
    }

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getUrl()
    {
        return $this->m_url;
    }
    public function setUrl($value)
    {
        $this->m_url = $value;
        return;
    }

    public function getCountry()
    {
        return $this->m_country;
    }
    public function setCountry($value)
    {
        $this->m_country = $value;
        return;
    }

    public function getHits()
    {
        return $this->m_hits;
    }
    public function setHits($value)
    {
        $this->m_hits = $value;
        return;
    }

    public function getIsvalid()
    {
        return $this->m_isValid;
    }
    public function setIsvalid($value)
    {
        $this->m_isValid = $value;
        return;
    }

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
        return;
    }

    public function getLastmodif()
    {
        return $this->m_lastModif;
    }
    public function setLastmodif($value)
    {
        $this->m_lastModif = $value;
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

    public function getCacheTimestamp()
    {
        return $this->m_cache_timestamp;
    }
    public function setCacheTimestamp($value)
    {
        $this->m_cache_timestamp = $value;
        return;
    }

    public function getOrigSiteid()
    {
        return $this->m_siteId_Orig;
    }
    public function setOrigSiteid($value)
    {
        if (isset($this->m_siteId_Orig)) { return; }
        $this->m_siteId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setSiteid($arrValues['siteId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setUrl($arrValues['url']);
        $this->setCountry($arrValues['country']);
        $this->setHits($arrValues['hits']);
        $this->setIsvalid($arrValues['isValid']);
        $this->setCreated($arrValues['created']);
        $this->setLastmodif($arrValues['lastModif']);
        $this->setCache($arrValues['cache']);
        $this->setCacheTimestamp($arrValues['cache_timestamp']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'siteId':
                    $this->setSiteid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'url':
                    $this->setUrl($val);
                    break;
                case 'country':
                    $this->setCountry($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'isValid':
                    $this->setIsvalid($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
                    break;
                case 'cache':
                    $this->setCache($val);
                    break;
                case 'cache_timestamp':
                    $this->setCacheTimestamp($val);
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
        $arrValues['siteId'] = $this->getSiteid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['url'] = $this->getUrl();
        $arrValues['country'] = $this->getCountry();
        $arrValues['hits'] = $this->getHits();
        $arrValues['isValid'] = $this->getIsvalid();
        $arrValues['created'] = $this->getCreated();
        $arrValues['lastModif'] = $this->getLastmodif();
        $arrValues['cache'] = $this->getCache();
        $arrValues['cache_timestamp'] = $this->getCacheTimestamp();
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
