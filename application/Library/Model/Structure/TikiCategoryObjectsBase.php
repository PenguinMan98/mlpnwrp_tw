<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCategoryObjectsBase
{
    protected $m_catObjectId;
    protected $m_categId;
    protected $m_catObjectId_Orig;
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
    public function TikiCategoryObjectsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCatobjectid()
    {
        return $this->m_catObjectId;
    }
    public function setCatobjectid($value)
    {
        $this->m_catObjectId = $value;
        $this->setOrigCatobjectid($value);
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

    public function getOrigCatobjectid()
    {
        return $this->m_catObjectId_Orig;
    }
    public function setOrigCatobjectid($value)
    {
        if (isset($this->m_catObjectId_Orig)) { return; }
        $this->m_catObjectId_Orig = $value;
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
        $this->setCatobjectid($arrValues['catObjectId']);
        $this->setCategid($arrValues['categId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'catObjectId':
                    $this->setCatobjectid($val);
                    break;
                case 'categId':
                    $this->setCategid($val);
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
        $arrValues['catObjectId'] = $this->getCatobjectid();
        $arrValues['categId'] = $this->getCategid();
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
