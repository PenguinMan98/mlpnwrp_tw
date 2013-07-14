<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiIntegratorRepsBase
{
    protected $m_repID;
    protected $m_name;
    protected $m_path;
    protected $m_start_page;
    protected $m_css_file;
    protected $m_visibility;
    protected $m_cacheable;
    protected $m_expiration;
    protected $m_description;
    protected $m_repID_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setName('');
            $this->setPath('');
            $this->setStartPage('');
            $this->setCssFile('');
            $this->setVisibility('y');
            $this->setCacheable('y');
            $this->setExpiration(0);
        }
        return;
    }
    public function TikiIntegratorRepsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getRepid()
    {
        return $this->m_repID;
    }
    public function setRepid($value)
    {
        $this->m_repID = $value;
        $this->setOrigRepid($value);
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

    public function getPath()
    {
        return $this->m_path;
    }
    public function setPath($value)
    {
        $this->m_path = $value;
        return;
    }

    public function getStartPage()
    {
        return $this->m_start_page;
    }
    public function setStartPage($value)
    {
        $this->m_start_page = $value;
        return;
    }

    public function getCssFile()
    {
        return $this->m_css_file;
    }
    public function setCssFile($value)
    {
        $this->m_css_file = $value;
        return;
    }

    public function getVisibility()
    {
        return $this->m_visibility;
    }
    public function setVisibility($value)
    {
        $this->m_visibility = $value;
        return;
    }

    public function getCacheable()
    {
        return $this->m_cacheable;
    }
    public function setCacheable($value)
    {
        $this->m_cacheable = $value;
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

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getOrigRepid()
    {
        return $this->m_repID_Orig;
    }
    public function setOrigRepid($value)
    {
        if (isset($this->m_repID_Orig)) { return; }
        $this->m_repID_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setRepid($arrValues['repID']);
        $this->setName($arrValues['name']);
        $this->setPath($arrValues['path']);
        $this->setStartPage($arrValues['start_page']);
        $this->setCssFile($arrValues['css_file']);
        $this->setVisibility($arrValues['visibility']);
        $this->setCacheable($arrValues['cacheable']);
        $this->setExpiration($arrValues['expiration']);
        $this->setDescription($arrValues['description']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'repID':
                    $this->setRepid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'path':
                    $this->setPath($val);
                    break;
                case 'start_page':
                    $this->setStartPage($val);
                    break;
                case 'css_file':
                    $this->setCssFile($val);
                    break;
                case 'visibility':
                    $this->setVisibility($val);
                    break;
                case 'cacheable':
                    $this->setCacheable($val);
                    break;
                case 'expiration':
                    $this->setExpiration($val);
                    break;
                case 'description':
                    $this->setDescription($val);
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
        $arrValues['repID'] = $this->getRepid();
        $arrValues['name'] = $this->getName();
        $arrValues['path'] = $this->getPath();
        $arrValues['start_page'] = $this->getStartPage();
        $arrValues['css_file'] = $this->getCssFile();
        $arrValues['visibility'] = $this->getVisibility();
        $arrValues['cacheable'] = $this->getCacheable();
        $arrValues['expiration'] = $this->getExpiration();
        $arrValues['description'] = $this->getDescription();
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
