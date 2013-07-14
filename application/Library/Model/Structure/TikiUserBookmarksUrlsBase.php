<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserBookmarksUrlsBase
{
    protected $m_urlId;
    protected $m_name;
    protected $m_url;
    protected $m_data;
    protected $m_lastUpdated;
    protected $m_folderId;
    protected $m_user;
    protected $m_urlId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setFolderid(0);
            $this->setUser('');
        }
        return;
    }
    public function TikiUserBookmarksUrlsBase($arrData = null)
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

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
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

    public function getLastupdated()
    {
        return $this->m_lastUpdated;
    }
    public function setLastupdated($value)
    {
        $this->m_lastUpdated = $value;
        return;
    }

    public function getFolderid()
    {
        return $this->m_folderId;
    }
    public function setFolderid($value)
    {
        $this->m_folderId = $value;
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
        $this->setName($arrValues['name']);
        $this->setUrl($arrValues['url']);
        $this->setData($arrValues['data']);
        $this->setLastupdated($arrValues['lastUpdated']);
        $this->setFolderid($arrValues['folderId']);
        $this->setUser($arrValues['user']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'urlId':
                    $this->setUrlid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'url':
                    $this->setUrl($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'lastUpdated':
                    $this->setLastupdated($val);
                    break;
                case 'folderId':
                    $this->setFolderid($val);
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
        $arrValues['urlId'] = $this->getUrlid();
        $arrValues['name'] = $this->getName();
        $arrValues['url'] = $this->getUrl();
        $arrValues['data'] = $this->getData();
        $arrValues['lastUpdated'] = $this->getLastupdated();
        $arrValues['folderId'] = $this->getFolderid();
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
