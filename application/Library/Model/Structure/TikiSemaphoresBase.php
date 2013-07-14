<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSemaphoresBase
{
    protected $m_semName;
    protected $m_objectType;
    protected $m_user;
    protected $m_timestamp;
    protected $m_semName_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setObjecttype('wiki page');
            $this->setUser('');
        }
        return;
    }
    public function TikiSemaphoresBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getSemname()
    {
        return $this->m_semName;
    }
    public function setSemname($value)
    {
        $this->m_semName = $value;
        $this->setOrigSemname($value);
        return;
    }

    public function getObjecttype()
    {
        return $this->m_objectType;
    }
    public function setObjecttype($value)
    {
        $this->m_objectType = $value;
        return;
    }

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        return;
    }

    public function getTimestamp()
    {
        return $this->m_timestamp;
    }
    public function setTimestamp($value)
    {
        $this->m_timestamp = $value;
        return;
    }

    public function getOrigSemname()
    {
        return $this->m_semName_Orig;
    }
    public function setOrigSemname($value)
    {
        if (isset($this->m_semName_Orig)) { return; }
        $this->m_semName_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setSemname($arrValues['semName']);
        $this->setObjecttype($arrValues['objectType']);
        $this->setUser($arrValues['user']);
        $this->setTimestamp($arrValues['timestamp']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'semName':
                    $this->setSemname($val);
                    break;
                case 'objectType':
                    $this->setObjecttype($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'timestamp':
                    $this->setTimestamp($val);
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
        $arrValues['semName'] = $this->getSemname();
        $arrValues['objectType'] = $this->getObjecttype();
        $arrValues['user'] = $this->getUser();
        $arrValues['timestamp'] = $this->getTimestamp();
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
