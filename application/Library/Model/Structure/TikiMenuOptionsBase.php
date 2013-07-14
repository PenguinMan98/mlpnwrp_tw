<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiMenuOptionsBase
{
    protected $m_optionId;
    protected $m_menuId;
    protected $m_type;
    protected $m_name;
    protected $m_url;
    protected $m_position;
    protected $m_section;
    protected $m_perm;
    protected $m_groupname;
    protected $m_userlevel;
    protected $m_icon;
    protected $m_optionId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUserlevel(0);
        }
        return;
    }
    public function TikiMenuOptionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getOptionid()
    {
        return $this->m_optionId;
    }
    public function setOptionid($value)
    {
        $this->m_optionId = $value;
        $this->setOrigOptionid($value);
        return;
    }

    public function getMenuid()
    {
        return $this->m_menuId;
    }
    public function setMenuid($value)
    {
        $this->m_menuId = $value;
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

    public function getPosition()
    {
        return $this->m_position;
    }
    public function setPosition($value)
    {
        $this->m_position = $value;
        return;
    }

    public function getSection()
    {
        return $this->m_section;
    }
    public function setSection($value)
    {
        $this->m_section = $value;
        return;
    }

    public function getPerm()
    {
        return $this->m_perm;
    }
    public function setPerm($value)
    {
        $this->m_perm = $value;
        return;
    }

    public function getGroupname()
    {
        return $this->m_groupname;
    }
    public function setGroupname($value)
    {
        $this->m_groupname = $value;
        return;
    }

    public function getUserlevel()
    {
        return $this->m_userlevel;
    }
    public function setUserlevel($value)
    {
        $this->m_userlevel = $value;
        return;
    }

    public function getIcon()
    {
        return $this->m_icon;
    }
    public function setIcon($value)
    {
        $this->m_icon = $value;
        return;
    }

    public function getOrigOptionid()
    {
        return $this->m_optionId_Orig;
    }
    public function setOrigOptionid($value)
    {
        if (isset($this->m_optionId_Orig)) { return; }
        $this->m_optionId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setOptionid($arrValues['optionId']);
        $this->setMenuid($arrValues['menuId']);
        $this->setType($arrValues['type']);
        $this->setName($arrValues['name']);
        $this->setUrl($arrValues['url']);
        $this->setPosition($arrValues['position']);
        $this->setSection($arrValues['section']);
        $this->setPerm($arrValues['perm']);
        $this->setGroupname($arrValues['groupname']);
        $this->setUserlevel($arrValues['userlevel']);
        $this->setIcon($arrValues['icon']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'optionId':
                    $this->setOptionid($val);
                    break;
                case 'menuId':
                    $this->setMenuid($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'url':
                    $this->setUrl($val);
                    break;
                case 'position':
                    $this->setPosition($val);
                    break;
                case 'section':
                    $this->setSection($val);
                    break;
                case 'perm':
                    $this->setPerm($val);
                    break;
                case 'groupname':
                    $this->setGroupname($val);
                    break;
                case 'userlevel':
                    $this->setUserlevel($val);
                    break;
                case 'icon':
                    $this->setIcon($val);
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
        $arrValues['optionId'] = $this->getOptionid();
        $arrValues['menuId'] = $this->getMenuid();
        $arrValues['type'] = $this->getType();
        $arrValues['name'] = $this->getName();
        $arrValues['url'] = $this->getUrl();
        $arrValues['position'] = $this->getPosition();
        $arrValues['section'] = $this->getSection();
        $arrValues['perm'] = $this->getPerm();
        $arrValues['groupname'] = $this->getGroupname();
        $arrValues['userlevel'] = $this->getUserlevel();
        $arrValues['icon'] = $this->getIcon();
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
