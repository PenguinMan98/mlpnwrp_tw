<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiModulesBase
{
    protected $m_moduleId;
    protected $m_name;
    protected $m_position;
    protected $m_ord;
    protected $m_type;
    protected $m_title;
    protected $m_cache_time;
    protected $m_rows;
    protected $m_params;
    protected $m_groups;
    protected $m_moduleId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setName('');
            $this->setPosition('');
            $this->setOrd(0);
        }
        return;
    }
    public function TikiModulesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getModuleid()
    {
        return $this->m_moduleId;
    }
    public function setModuleid($value)
    {
        $this->m_moduleId = $value;
        $this->setOrigModuleid($value);
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

    public function getPosition()
    {
        return $this->m_position;
    }
    public function setPosition($value)
    {
        $this->m_position = $value;
        return;
    }

    public function getOrd()
    {
        return $this->m_ord;
    }
    public function setOrd($value)
    {
        $this->m_ord = $value;
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

    public function getTitle()
    {
        return $this->m_title;
    }
    public function setTitle($value)
    {
        $this->m_title = $value;
        return;
    }

    public function getCacheTime()
    {
        return $this->m_cache_time;
    }
    public function setCacheTime($value)
    {
        $this->m_cache_time = $value;
        return;
    }

    public function getRows()
    {
        return $this->m_rows;
    }
    public function setRows($value)
    {
        $this->m_rows = $value;
        return;
    }

    public function getParams()
    {
        return $this->m_params;
    }
    public function setParams($value)
    {
        $this->m_params = $value;
        return;
    }

    public function getGroups()
    {
        return $this->m_groups;
    }
    public function setGroups($value)
    {
        $this->m_groups = $value;
        return;
    }

    public function getOrigModuleid()
    {
        return $this->m_moduleId_Orig;
    }
    public function setOrigModuleid($value)
    {
        if (isset($this->m_moduleId_Orig)) { return; }
        $this->m_moduleId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setModuleid($arrValues['moduleId']);
        $this->setName($arrValues['name']);
        $this->setPosition($arrValues['position']);
        $this->setOrd($arrValues['ord']);
        $this->setType($arrValues['type']);
        $this->setTitle($arrValues['title']);
        $this->setCacheTime($arrValues['cache_time']);
        $this->setRows($arrValues['rows']);
        $this->setParams($arrValues['params']);
        $this->setGroups($arrValues['groups']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'moduleId':
                    $this->setModuleid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'position':
                    $this->setPosition($val);
                    break;
                case 'ord':
                    $this->setOrd($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'cache_time':
                    $this->setCacheTime($val);
                    break;
                case 'rows':
                    $this->setRows($val);
                    break;
                case 'params':
                    $this->setParams($val);
                    break;
                case 'groups':
                    $this->setGroups($val);
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
        $arrValues['moduleId'] = $this->getModuleid();
        $arrValues['name'] = $this->getName();
        $arrValues['position'] = $this->getPosition();
        $arrValues['ord'] = $this->getOrd();
        $arrValues['type'] = $this->getType();
        $arrValues['title'] = $this->getTitle();
        $arrValues['cache_time'] = $this->getCacheTime();
        $arrValues['rows'] = $this->getRows();
        $arrValues['params'] = $this->getParams();
        $arrValues['groups'] = $this->getGroups();
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
