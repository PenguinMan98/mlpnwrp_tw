<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiAreasBase
{
    protected $m_categId;
    protected $m_perspectives;
    protected $m_exclusive;
    protected $m_share_common;
    protected $m_enabled;
    protected $m_categId_Orig;
    protected $m_perspectives_Orig;
    protected $m_exclusive_Orig;
    protected $m_share_common_Orig;
    protected $m_enabled_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiAreasBase($arrData = null)
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

    public function getPerspectives()
    {
        return $this->m_perspectives;
    }
    public function setPerspectives($value)
    {
        $this->m_perspectives = $value;
        $this->setOrigPerspectives($value);
        return;
    }

    public function getExclusive()
    {
        return $this->m_exclusive;
    }
    public function setExclusive($value)
    {
        $this->m_exclusive = $value;
        $this->setOrigExclusive($value);
        return;
    }

    public function getShareCommon()
    {
        return $this->m_share_common;
    }
    public function setShareCommon($value)
    {
        $this->m_share_common = $value;
        $this->setOrigShareCommon($value);
        return;
    }

    public function getEnabled()
    {
        return $this->m_enabled;
    }
    public function setEnabled($value)
    {
        $this->m_enabled = $value;
        $this->setOrigEnabled($value);
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

    public function getOrigPerspectives()
    {
        return $this->m_perspectives_Orig;
    }
    public function setOrigPerspectives($value)
    {
        if (isset($this->m_perspectives_Orig)) { return; }
        $this->m_perspectives_Orig = $value;
        return;
    }

    public function getOrigExclusive()
    {
        return $this->m_exclusive_Orig;
    }
    public function setOrigExclusive($value)
    {
        if (isset($this->m_exclusive_Orig)) { return; }
        $this->m_exclusive_Orig = $value;
        return;
    }

    public function getOrigShareCommon()
    {
        return $this->m_share_common_Orig;
    }
    public function setOrigShareCommon($value)
    {
        if (isset($this->m_share_common_Orig)) { return; }
        $this->m_share_common_Orig = $value;
        return;
    }

    public function getOrigEnabled()
    {
        return $this->m_enabled_Orig;
    }
    public function setOrigEnabled($value)
    {
        if (isset($this->m_enabled_Orig)) { return; }
        $this->m_enabled_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCategid($arrValues['categId']);
        $this->setPerspectives($arrValues['perspectives']);
        $this->setExclusive($arrValues['exclusive']);
        $this->setShareCommon($arrValues['share_common']);
        $this->setEnabled($arrValues['enabled']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'categId':
                    $this->setCategid($val);
                    break;
                case 'perspectives':
                    $this->setPerspectives($val);
                    break;
                case 'exclusive':
                    $this->setExclusive($val);
                    break;
                case 'share_common':
                    $this->setShareCommon($val);
                    break;
                case 'enabled':
                    $this->setEnabled($val);
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
        $arrValues['perspectives'] = $this->getPerspectives();
        $arrValues['exclusive'] = $this->getExclusive();
        $arrValues['share_common'] = $this->getShareCommon();
        $arrValues['enabled'] = $this->getEnabled();
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
