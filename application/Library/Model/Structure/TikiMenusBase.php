<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiMenusBase
{
    protected $m_menuId;
    protected $m_name;
    protected $m_description;
    protected $m_type;
    protected $m_icon;
    protected $m_use_items_icons;
    protected $m_parse;
    protected $m_menuId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setName('');
            $this->setUseItemsIcons('n');
            $this->setParse('n');
        }
        return;
    }
    public function TikiMenusBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
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

    public function getUseItemsIcons()
    {
        return $this->m_use_items_icons;
    }
    public function setUseItemsIcons($value)
    {
        $this->m_use_items_icons = $value;
        return;
    }

    public function getParse()
    {
        return $this->m_parse;
    }
    public function setParse($value)
    {
        $this->m_parse = $value;
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
        $this->setMenuid($arrValues['menuId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setType($arrValues['type']);
        $this->setIcon($arrValues['icon']);
        $this->setUseItemsIcons($arrValues['use_items_icons']);
        $this->setParse($arrValues['parse']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'menuId':
                    $this->setMenuid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'icon':
                    $this->setIcon($val);
                    break;
                case 'use_items_icons':
                    $this->setUseItemsIcons($val);
                    break;
                case 'parse':
                    $this->setParse($val);
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
        $arrValues['menuId'] = $this->getMenuid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['type'] = $this->getType();
        $arrValues['icon'] = $this->getIcon();
        $arrValues['use_items_icons'] = $this->getUseItemsIcons();
        $arrValues['parse'] = $this->getParse();
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
