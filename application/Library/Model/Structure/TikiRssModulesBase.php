<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiRssModulesBase
{
    protected $m_rssId;
    protected $m_name;
    protected $m_description;
    protected $m_url;
    protected $m_refresh;
    protected $m_lastUpdated;
    protected $m_showTitle;
    protected $m_showPubDate;
    protected $m_sitetitle;
    protected $m_siteurl;
    protected $m_actions;
    protected $m_rssId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setName('');
            $this->setUrl('');
            $this->setShowtitle('n');
            $this->setShowpubdate('n');
        }
        return;
    }
    public function TikiRssModulesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getRssid()
    {
        return $this->m_rssId;
    }
    public function setRssid($value)
    {
        $this->m_rssId = $value;
        $this->setOrigRssid($value);
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

    public function getShowtitle()
    {
        return $this->m_showTitle;
    }
    public function setShowtitle($value)
    {
        $this->m_showTitle = $value;
        return;
    }

    public function getShowpubdate()
    {
        return $this->m_showPubDate;
    }
    public function setShowpubdate($value)
    {
        $this->m_showPubDate = $value;
        return;
    }

    public function getSitetitle()
    {
        return $this->m_sitetitle;
    }
    public function setSitetitle($value)
    {
        $this->m_sitetitle = $value;
        return;
    }

    public function getSiteurl()
    {
        return $this->m_siteurl;
    }
    public function setSiteurl($value)
    {
        $this->m_siteurl = $value;
        return;
    }

    public function getActions()
    {
        return $this->m_actions;
    }
    public function setActions($value)
    {
        $this->m_actions = $value;
        return;
    }

    public function getOrigRssid()
    {
        return $this->m_rssId_Orig;
    }
    public function setOrigRssid($value)
    {
        if (isset($this->m_rssId_Orig)) { return; }
        $this->m_rssId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setRssid($arrValues['rssId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setUrl($arrValues['url']);
        $this->setRefresh($arrValues['refresh']);
        $this->setLastupdated($arrValues['lastUpdated']);
        $this->setShowtitle($arrValues['showTitle']);
        $this->setShowpubdate($arrValues['showPubDate']);
        $this->setSitetitle($arrValues['sitetitle']);
        $this->setSiteurl($arrValues['siteurl']);
        $this->setActions($arrValues['actions']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'rssId':
                    $this->setRssid($val);
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
                case 'refresh':
                    $this->setRefresh($val);
                    break;
                case 'lastUpdated':
                    $this->setLastupdated($val);
                    break;
                case 'showTitle':
                    $this->setShowtitle($val);
                    break;
                case 'showPubDate':
                    $this->setShowpubdate($val);
                    break;
                case 'sitetitle':
                    $this->setSitetitle($val);
                    break;
                case 'siteurl':
                    $this->setSiteurl($val);
                    break;
                case 'actions':
                    $this->setActions($val);
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
        $arrValues['rssId'] = $this->getRssid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['url'] = $this->getUrl();
        $arrValues['refresh'] = $this->getRefresh();
        $arrValues['lastUpdated'] = $this->getLastupdated();
        $arrValues['showTitle'] = $this->getShowtitle();
        $arrValues['showPubDate'] = $this->getShowpubdate();
        $arrValues['sitetitle'] = $this->getSitetitle();
        $arrValues['siteurl'] = $this->getSiteurl();
        $arrValues['actions'] = $this->getActions();
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
