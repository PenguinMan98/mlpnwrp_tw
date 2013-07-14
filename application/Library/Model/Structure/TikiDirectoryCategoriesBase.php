<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiDirectoryCategoriesBase
{
    protected $m_categId;
    protected $m_parent;
    protected $m_name;
    protected $m_description;
    protected $m_childrenType;
    protected $m_sites;
    protected $m_viewableChildren;
    protected $m_allowSites;
    protected $m_showCount;
    protected $m_editorGroup;
    protected $m_hits;
    protected $m_categId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiDirectoryCategoriesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCategid()
    {
        return $this->m_categId;
    }
    public function setCategid($value)
    {
        $this->m_categId = $value;
        $this->setOrigCategid($value);
        return;
    }

    public function getParent()
    {
        return $this->m_parent;
    }
    public function setParent($value)
    {
        $this->m_parent = $value;
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

    public function getChildrentype()
    {
        return $this->m_childrenType;
    }
    public function setChildrentype($value)
    {
        $this->m_childrenType = $value;
        return;
    }

    public function getSites()
    {
        return $this->m_sites;
    }
    public function setSites($value)
    {
        $this->m_sites = $value;
        return;
    }

    public function getViewablechildren()
    {
        return $this->m_viewableChildren;
    }
    public function setViewablechildren($value)
    {
        $this->m_viewableChildren = $value;
        return;
    }

    public function getAllowsites()
    {
        return $this->m_allowSites;
    }
    public function setAllowsites($value)
    {
        $this->m_allowSites = $value;
        return;
    }

    public function getShowcount()
    {
        return $this->m_showCount;
    }
    public function setShowcount($value)
    {
        $this->m_showCount = $value;
        return;
    }

    public function getEditorgroup()
    {
        return $this->m_editorGroup;
    }
    public function setEditorgroup($value)
    {
        $this->m_editorGroup = $value;
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

    public function getOrigCategid()
    {
        return $this->m_categId_Orig;
    }
    public function setOrigCategid($value)
    {
        if (isset($this->m_categId_Orig)) { return; }
        $this->m_categId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCategid($arrValues['categId']);
        $this->setParent($arrValues['parent']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setChildrentype($arrValues['childrenType']);
        $this->setSites($arrValues['sites']);
        $this->setViewablechildren($arrValues['viewableChildren']);
        $this->setAllowsites($arrValues['allowSites']);
        $this->setShowcount($arrValues['showCount']);
        $this->setEditorgroup($arrValues['editorGroup']);
        $this->setHits($arrValues['hits']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'categId':
                    $this->setCategid($val);
                    break;
                case 'parent':
                    $this->setParent($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'childrenType':
                    $this->setChildrentype($val);
                    break;
                case 'sites':
                    $this->setSites($val);
                    break;
                case 'viewableChildren':
                    $this->setViewablechildren($val);
                    break;
                case 'allowSites':
                    $this->setAllowsites($val);
                    break;
                case 'showCount':
                    $this->setShowcount($val);
                    break;
                case 'editorGroup':
                    $this->setEditorgroup($val);
                    break;
                case 'hits':
                    $this->setHits($val);
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
        $arrValues['categId'] = $this->getCategid();
        $arrValues['parent'] = $this->getParent();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['childrenType'] = $this->getChildrentype();
        $arrValues['sites'] = $this->getSites();
        $arrValues['viewableChildren'] = $this->getViewablechildren();
        $arrValues['allowSites'] = $this->getAllowsites();
        $arrValues['showCount'] = $this->getShowcount();
        $arrValues['editorGroup'] = $this->getEditorgroup();
        $arrValues['hits'] = $this->getHits();
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
