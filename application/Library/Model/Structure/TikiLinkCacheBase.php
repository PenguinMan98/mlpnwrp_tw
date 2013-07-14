<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiLinkCacheBase
{
    protected $m_cacheId;
    protected $m_url;
    protected $m_data;
    protected $m_refresh;
    protected $m_cacheId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiLinkCacheBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCacheid()
    {
        return $this->m_cacheId;
    }
    public function setCacheid($value)
    {
        $this->m_cacheId = $value;
        $this->setOrigCacheid($value);
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

    public function getData()
    {
        return $this->m_data;
    }
    public function setData($value)
    {
        $this->m_data = $value;
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

    public function getOrigCacheid()
    {
        return $this->m_cacheId_Orig;
    }
    public function setOrigCacheid($value)
    {
        if (isset($this->m_cacheId_Orig)) { return; }
        $this->m_cacheId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCacheid($arrValues['cacheId']);
        $this->setUrl($arrValues['url']);
        $this->setData($arrValues['data']);
        $this->setRefresh($arrValues['refresh']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'cacheId':
                    $this->setCacheid($val);
                    break;
                case 'url':
                    $this->setUrl($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'refresh':
                    $this->setRefresh($val);
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
        $arrValues['cacheId'] = $this->getCacheid();
        $arrValues['url'] = $this->getUrl();
        $arrValues['data'] = $this->getData();
        $arrValues['refresh'] = $this->getRefresh();
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
