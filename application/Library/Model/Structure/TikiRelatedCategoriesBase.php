<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiRelatedCategoriesBase
{
    protected $m_categId;
    protected $m_relatedTo;
    protected $m_categId_Orig;
    protected $m_relatedTo_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiRelatedCategoriesBase($arrData = null)
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

    public function getRelatedto()
    {
        return $this->m_relatedTo;
    }
    public function setRelatedto($value)
    {
        $this->m_relatedTo = $value;
        $this->setOrigRelatedto($value);
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

    public function getOrigRelatedto()
    {
        return $this->m_relatedTo_Orig;
    }
    public function setOrigRelatedto($value)
    {
        if (isset($this->m_relatedTo_Orig)) { return; }
        $this->m_relatedTo_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCategid($arrValues['categId']);
        $this->setRelatedto($arrValues['relatedTo']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'categId':
                    $this->setCategid($val);
                    break;
                case 'relatedTo':
                    $this->setRelatedto($val);
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
        $arrValues['relatedTo'] = $this->getRelatedto();
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
