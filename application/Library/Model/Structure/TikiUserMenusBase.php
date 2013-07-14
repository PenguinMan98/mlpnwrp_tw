<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserMenusBase
{
    protected $m_user;
    protected $m_menuId;
    protected $m_url;
    protected $m_name;
    protected $m_position;
    protected $m_mode;
    protected $m_menuId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
        }
        return;
    }
    public function TikiUserMenusBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getMenuid()
    {
        return $this->m_menuId;
    }
    public function setMenuid($value)
    {
        $this->m_menuId = $value;
        $this->setOrigMenuid($value);
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

    public function getMode()
    {
        return $this->m_mode;
    }
    public function setMode($value)
    {
        $this->m_mode = $value;
        return;
    }

    public function getOrigMenuid()
    {
        return $this->m_menuId_Orig;
    }
    public function setOrigMenuid($value)
    {
        if (isset($this->m_menuId_Orig)) { return; }
        $this->m_menuId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUser($arrValues['user']);
        $this->setMenuid($arrValues['menuId']);
        $this->setUrl($arrValues['url']);
        $this->setName($arrValues['name']);
        $this->setPosition($arrValues['position']);
        $this->setMode($arrValues['mode']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'menuId':
                    $this->setMenuid($val);
                    break;
                case 'url':
                    $this->setUrl($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'position':
                    $this->setPosition($val);
                    break;
                case 'mode':
                    $this->setMode($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['menuId'] = $this->getMenuid();
        $arrValues['url'] = $this->getUrl();
        $arrValues['name'] = $this->getName();
        $arrValues['position'] = $this->getPosition();
        $arrValues['mode'] = $this->getMode();
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
