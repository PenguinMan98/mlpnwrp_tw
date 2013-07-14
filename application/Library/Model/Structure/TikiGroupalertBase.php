<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiGroupalertBase
{
    protected $m_groupName;
    protected $m_objectType;
    protected $m_objectId;
    protected $m_displayEachuser;
    protected $m_groupName_Orig;
    protected $m_objectType_Orig;
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
    public function TikiGroupalertBase($arrData = null)
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

    public function getObjecttype()
    {
        return $this->m_objectType;
    }
    public function setObjecttype($value)
    {
        $this->m_objectType = $value;
        $this->setOrigObjecttype($value);
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

    public function getDisplayeachuser()
    {
        return $this->m_displayEachuser;
    }
    public function setDisplayeachuser($value)
    {
        $this->m_displayEachuser = $value;
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

    public function getOrigObjecttype()
    {
        return $this->m_objectType_Orig;
    }
    public function setOrigObjecttype($value)
    {
        if (isset($this->m_objectType_Orig)) { return; }
        $this->m_objectType_Orig = $value;
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
        $this->setGroupname($arrValues['groupName']);
        $this->setObjecttype($arrValues['objectType']);
        $this->setObjectid($arrValues['objectId']);
        $this->setDisplayeachuser($arrValues['displayEachuser']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'groupName':
                    $this->setGroupname($val);
                    break;
                case 'objectType':
                    $this->setObjecttype($val);
                    break;
                case 'objectId':
                    $this->setObjectid($val);
                    break;
                case 'displayEachuser':
                    $this->setDisplayeachuser($val);
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
        $arrValues['objectType'] = $this->getObjecttype();
        $arrValues['objectId'] = $this->getObjectid();
        $arrValues['displayEachuser'] = $this->getDisplayeachuser();
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
