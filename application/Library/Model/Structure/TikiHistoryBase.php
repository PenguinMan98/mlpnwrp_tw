<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiHistoryBase
{
    protected $m_historyId;
    protected $m_pageName;
    protected $m_version;
    protected $m_version_minor;
    protected $m_lastModif;
    protected $m_description;
    protected $m_user;
    protected $m_ip;
    protected $m_comment;
    protected $m_data;
    protected $m_type;
    protected $m_is_html;
    protected $m_pageName_Orig;
    protected $m_version_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setVersionMinor(0);
            $this->setUser('');
            $this->setIsHtml(0);
        }
        return;
    }
    public function TikiHistoryBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getHistoryid()
    {
        return $this->m_historyId;
    }
    public function setHistoryid($value)
    {
        $this->m_historyId = $value;
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

    public function getVersion()
    {
        return $this->m_version;
    }
    public function setVersion($value)
    {
        $this->m_version = $value;
        $this->setOrigVersion($value);
        return;
    }

    public function getVersionMinor()
    {
        return $this->m_version_minor;
    }
    public function setVersionMinor($value)
    {
        $this->m_version_minor = $value;
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

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
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

    public function getComment()
    {
        return $this->m_comment;
    }
    public function setComment($value)
    {
        $this->m_comment = $value;
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

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        return;
    }

    public function getIsHtml()
    {
        return $this->m_is_html;
    }
    public function setIsHtml($value)
    {
        $this->m_is_html = $value;
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

    public function getOrigVersion()
    {
        return $this->m_version_Orig;
    }
    public function setOrigVersion($value)
    {
        if (isset($this->m_version_Orig)) { return; }
        $this->m_version_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setHistoryid($arrValues['historyId']);
        $this->setPagename($arrValues['pageName']);
        $this->setVersion($arrValues['version']);
        $this->setVersionMinor($arrValues['version_minor']);
        $this->setLastmodif($arrValues['lastModif']);
        $this->setDescription($arrValues['description']);
        $this->setUser($arrValues['user']);
        $this->setIp($arrValues['ip']);
        $this->setComment($arrValues['comment']);
        $this->setData($arrValues['data']);
        $this->setType($arrValues['type']);
        $this->setIsHtml($arrValues['is_html']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'historyId':
                    $this->setHistoryid($val);
                    break;
                case 'pageName':
                    $this->setPagename($val);
                    break;
                case 'version':
                    $this->setVersion($val);
                    break;
                case 'version_minor':
                    $this->setVersionMinor($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'ip':
                    $this->setIp($val);
                    break;
                case 'comment':
                    $this->setComment($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'is_html':
                    $this->setIsHtml($val);
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
        $arrValues['historyId'] = $this->getHistoryid();
        $arrValues['pageName'] = $this->getPagename();
        $arrValues['version'] = $this->getVersion();
        $arrValues['version_minor'] = $this->getVersionMinor();
        $arrValues['lastModif'] = $this->getLastmodif();
        $arrValues['description'] = $this->getDescription();
        $arrValues['user'] = $this->getUser();
        $arrValues['ip'] = $this->getIp();
        $arrValues['comment'] = $this->getComment();
        $arrValues['data'] = $this->getData();
        $arrValues['type'] = $this->getType();
        $arrValues['is_html'] = $this->getIsHtml();
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
