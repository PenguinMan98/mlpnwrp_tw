<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiCategorySitesBase
{
    protected $m_categId;
    protected $m_siteId;
    protected $m_categId_Orig;
    protected $m_siteId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiCategorySitesBase($arrData = null)
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

    public function getSiteid()
    {
        return $this->m_siteId;
    }
    public function setSiteid($value)
    {
        $this->m_siteId = $value;
        $this->setOrigSiteid($value);
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

    public function getOrigSiteid()
    {
        return $this->m_siteId_Orig;
    }
    public function setOrigSiteid($value)
    {
        if (isset($this->m_siteId_Orig)) { return; }
        $this->m_siteId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCategid($arrValues['categId']);
        $this->setSiteid($arrValues['siteId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'categId':
                    $this->setCategid($val);
                    break;
                case 'siteId':
                    $this->setSiteid($val);
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
        $arrValues['siteId'] = $this->getSiteid();
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
