<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiNewsletterGroupsBase
{
    protected $m_nlId;
    protected $m_groupName;
    protected $m_code;
    protected $m_include_groups;
    protected $m_nlId_Orig;
    protected $m_groupName_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setIncludeGroups('y');
        }
        return;
    }
    public function TikiNewsletterGroupsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getNlid()
    {
        return $this->m_nlId;
    }
    public function setNlid($value)
    {
        $this->m_nlId = $value;
        $this->setOrigNlid($value);
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

    public function getCode()
    {
        return $this->m_code;
    }
    public function setCode($value)
    {
        $this->m_code = $value;
        return;
    }

    public function getIncludeGroups()
    {
        return $this->m_include_groups;
    }
    public function setIncludeGroups($value)
    {
        $this->m_include_groups = $value;
        return;
    }

    public function getOrigNlid()
    {
        return $this->m_nlId_Orig;
    }
    public function setOrigNlid($value)
    {
        if (isset($this->m_nlId_Orig)) { return; }
        $this->m_nlId_Orig = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setNlid($arrValues['nlId']);
        $this->setGroupname($arrValues['groupName']);
        $this->setCode($arrValues['code']);
        $this->setIncludeGroups($arrValues['include_groups']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'nlId':
                    $this->setNlid($val);
                    break;
                case 'groupName':
                    $this->setGroupname($val);
                    break;
                case 'code':
                    $this->setCode($val);
                    break;
                case 'include_groups':
                    $this->setIncludeGroups($val);
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
        $arrValues['nlId'] = $this->getNlid();
        $arrValues['groupName'] = $this->getGroupname();
        $arrValues['code'] = $this->getCode();
        $arrValues['include_groups'] = $this->getIncludeGroups();
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
