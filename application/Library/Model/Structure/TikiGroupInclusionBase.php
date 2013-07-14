<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiGroupInclusionBase
{
    protected $m_groupName;
    protected $m_includeGroup;
    protected $m_groupName_Orig;
    protected $m_includeGroup_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiGroupInclusionBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getGroupname()
    {
        return $this->m_groupName;
    }
    public function setGroupname($value)
    {
        $this->m_groupName = $value;
        $this->setOrigGroupname($value);
        return;
    }

    public function getIncludegroup()
    {
        return $this->m_includeGroup;
    }
    public function setIncludegroup($value)
    {
        $this->m_includeGroup = $value;
        $this->setOrigIncludegroup($value);
        return;
    }

    public function getOrigGroupname()
    {
        return $this->m_groupName_Orig;
    }
    public function setOrigGroupname($value)
    {
        if (isset($this->m_groupName_Orig)) { return; }
        $this->m_groupName_Orig = $value;
        return;
    }

    public function getOrigIncludegroup()
    {
        return $this->m_includeGroup_Orig;
    }
    public function setOrigIncludegroup($value)
    {
        if (isset($this->m_includeGroup_Orig)) { return; }
        $this->m_includeGroup_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setGroupname($arrValues['groupName']);
        $this->setIncludegroup($arrValues['includeGroup']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'groupName':
                    $this->setGroupname($val);
                    break;
                case 'includeGroup':
                    $this->setIncludegroup($val);
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
        $arrValues['groupName'] = $this->getGroupname();
        $arrValues['includeGroup'] = $this->getIncludegroup();
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
