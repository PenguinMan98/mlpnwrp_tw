<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiContributionsAssignedBase
{
    protected $m_contributionId;
    protected $m_objectId;
    protected $m_contributionId_Orig;
    protected $m_objectId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiContributionsAssignedBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getContributionid()
    {
        return $this->m_contributionId;
    }
    public function setContributionid($value)
    {
        $this->m_contributionId = $value;
        $this->setOrigContributionid($value);
        return;
    }

    public function getObjectid()
    {
        return $this->m_objectId;
    }
    public function setObjectid($value)
    {
        $this->m_objectId = $value;
        $this->setOrigObjectid($value);
        return;
    }

    public function getOrigContributionid()
    {
        return $this->m_contributionId_Orig;
    }
    public function setOrigContributionid($value)
    {
        if (isset($this->m_contributionId_Orig)) { return; }
        $this->m_contributionId_Orig = $value;
        return;
    }

    public function getOrigObjectid()
    {
        return $this->m_objectId_Orig;
    }
    public function setOrigObjectid($value)
    {
        if (isset($this->m_objectId_Orig)) { return; }
        $this->m_objectId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setContributionid($arrValues['contributionId']);
        $this->setObjectid($arrValues['objectId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'contributionId':
                    $this->setContributionid($val);
                    break;
                case 'objectId':
                    $this->setObjectid($val);
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
        $arrValues['contributionId'] = $this->getContributionid();
        $arrValues['objectId'] = $this->getObjectid();
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
