<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiTagsBase
{
    protected $m_tagName;
    protected $m_pageName;
    protected $m_hits;
    protected $m_description;
    protected $m_data;
    protected $m_lastModif;
    protected $m_comment;
    protected $m_version;
    protected $m_user;
    protected $m_ip;
    protected $m_flag;
    protected $m_tagName_Orig;
    protected $m_pageName_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setVersion(0);
            $this->setUser('');
        }
        return;
    }
    public function TikiTagsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTagname()
    {
        return $this->m_tagName;
    }
    public function setTagname($value)
    {
        $this->m_tagName = $value;
        $this->setOrigTagname($value);
        return;
    }

    public function getPagename()
    {
        return $this->m_pageName;
    }
    public function setPagename($value)
    {
        $this->m_pageName = $value;
        $this->setOrigPagename($value);
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

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
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

    public function getLastmodif()
    {
        return $this->m_lastModif;
    }
    public function setLastmodif($value)
    {
        $this->m_lastModif = $value;
        return;
    }

    public function getComment()
    {
        return $this->m_comment;
    }
    public function setComment($value)
    {
        $this->m_comment = $value;
        return;
    }

    public function getVersion()
    {
        return $this->m_version;
    }
    public function setVersion($value)
    {
        $this->m_version = $value;
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

    public function getIp()
    {
        return $this->m_ip;
    }
    public function setIp($value)
    {
        $this->m_ip = $value;
        return;
    }

    public function getFlag()
    {
        return $this->m_flag;
    }
    public function setFlag($value)
    {
        $this->m_flag = $value;
        return;
    }

    public function getOrigTagname()
    {
        return $this->m_tagName_Orig;
    }
    public function setOrigTagname($value)
    {
        if (isset($this->m_tagName_Orig)) { return; }
        $this->m_tagName_Orig = $value;
        return;
    }

    public function getOrigPagename()
    {
        return $this->m_pageName_Orig;
    }
    public function setOrigPagename($value)
    {
        if (isset($this->m_pageName_Orig)) { return; }
        $this->m_pageName_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTagname($arrValues['tagName']);
        $this->setPagename($arrValues['pageName']);
        $this->setHits($arrValues['hits']);
        $this->setDescription($arrValues['description']);
        $this->setData($arrValues['data']);
        $this->setLastmodif($arrValues['lastModif']);
        $this->setComment($arrValues['comment']);
        $this->setVersion($arrValues['version']);
        $this->setUser($arrValues['user']);
        $this->setIp($arrValues['ip']);
        $this->setFlag($arrValues['flag']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'tagName':
                    $this->setTagname($val);
                    break;
                case 'pageName':
                    $this->setPagename($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
                    break;
                case 'comment':
                    $this->setComment($val);
                    break;
                case 'version':
                    $this->setVersion($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'ip':
                    $this->setIp($val);
                    break;
                case 'flag':
                    $this->setFlag($val);
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
        $arrValues['tagName'] = $this->getTagname();
        $arrValues['pageName'] = $this->getPagename();
        $arrValues['hits'] = $this->getHits();
        $arrValues['description'] = $this->getDescription();
        $arrValues['data'] = $this->getData();
        $arrValues['lastModif'] = $this->getLastmodif();
        $arrValues['comment'] = $this->getComment();
        $arrValues['version'] = $this->getVersion();
        $arrValues['user'] = $this->getUser();
        $arrValues['ip'] = $this->getIp();
        $arrValues['flag'] = $this->getFlag();
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
