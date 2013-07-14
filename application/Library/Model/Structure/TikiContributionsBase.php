<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiContributionsBase
{
    protected $m_contributionId;
    protected $m_name;
    protected $m_description;
    protected $m_contributionId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiContributionsBase($arrData = null)
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

    public function loadFromArray($arrValues)
    {
        $this->setContributionid($arrValues['contributionId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'contributionId':
                    $this->setContributionid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
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
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
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
