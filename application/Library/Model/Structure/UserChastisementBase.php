<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_UserChastisementBase
{
    protected $m_userId;
    protected $m_type;
    protected $m_duration;
    protected $m_creation_date;
    protected $m_reason;
    protected $m_userId_Orig;
    protected $m_type_Orig;
    protected $m_duration_Orig;
    protected $m_creation_date_Orig;
    protected $m_reason_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setCreationDate('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function UserChastisementBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUserid()
    {
        return $this->m_userId;
    }
    public function setUserid($value)
    {
        $this->m_userId = $value;
        $this->setOrigUserid($value);
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        $this->setOrigType($value);
        return;
    }

    public function getDuration()
    {
        return $this->m_duration;
    }
    public function setDuration($value)
    {
        $this->m_duration = $value;
        $this->setOrigDuration($value);
        return;
    }

    public function getCreationDate()
    {
        return $this->m_creation_date;
    }
    public function setCreationDate($value)
    {
        $this->m_creation_date = $value;
        $this->setOrigCreationDate($value);
        return;
    }

    public function getReason()
    {
        return $this->m_reason;
    }
    public function setReason($value)
    {
        $this->m_reason = $value;
        $this->setOrigReason($value);
        return;
    }

    public function getOrigUserid()
    {
        return $this->m_userId_Orig;
    }
    public function setOrigUserid($value)
    {
        if (isset($this->m_userId_Orig)) { return; }
        $this->m_userId_Orig = $value;
        return;
    }

    public function getOrigType()
    {
        return $this->m_type_Orig;
    }
    public function setOrigType($value)
    {
        if (isset($this->m_type_Orig)) { return; }
        $this->m_type_Orig = $value;
        return;
    }

    public function getOrigDuration()
    {
        return $this->m_duration_Orig;
    }
    public function setOrigDuration($value)
    {
        if (isset($this->m_duration_Orig)) { return; }
        $this->m_duration_Orig = $value;
        return;
    }

    public function getOrigCreationDate()
    {
        return $this->m_creation_date_Orig;
    }
    public function setOrigCreationDate($value)
    {
        if (isset($this->m_creation_date_Orig)) { return; }
        $this->m_creation_date_Orig = $value;
        return;
    }

    public function getOrigReason()
    {
        return $this->m_reason_Orig;
    }
    public function setOrigReason($value)
    {
        if (isset($this->m_reason_Orig)) { return; }
        $this->m_reason_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUserid($arrValues['userId']);
        $this->setType($arrValues['type']);
        $this->setDuration($arrValues['duration']);
        $this->setCreationDate($arrValues['creation_date']);
        $this->setReason($arrValues['reason']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'userId':
                    $this->setUserid($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'duration':
                    $this->setDuration($val);
                    break;
                case 'creation_date':
                    $this->setCreationDate($val);
                    break;
                case 'reason':
                    $this->setReason($val);
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
        $arrValues['userId'] = $this->getUserid();
        $arrValues['type'] = $this->getType();
        $arrValues['duration'] = $this->getDuration();
        $arrValues['creation_date'] = $this->getCreationDate();
        $arrValues['reason'] = $this->getReason();
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
