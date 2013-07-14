<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCategoriesBase
{
    protected $m_categId;
    protected $m_name;
    protected $m_description;
    protected $m_parentId;
    protected $m_rootId;
    protected $m_hits;
    protected $m_categId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setRootid(0);
        }
        return;
    }
    public function TikiCategoriesBase($arrData = null)
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

    public function getParentid()
    {
        return $this->m_parentId;
    }
    public function setParentid($value)
    {
        $this->m_parentId = $value;
        return;
    }

    public function getRootid()
    {
        return $this->m_rootId;
    }
    public function setRootid($value)
    {
        $this->m_rootId = $value;
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
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setParentid($arrValues['parentId']);
        $this->setRootid($arrValues['rootId']);
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
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'parentId':
                    $this->setParentid($val);
                    break;
                case 'rootId':
                    $this->setRootid($val);
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
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['parentId'] = $this->getParentid();
        $arrValues['rootId'] = $this->getRootid();
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
