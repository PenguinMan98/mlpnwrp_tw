<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiDbStatusBase
{
    protected $m_id;
    protected $m_objectId;
    protected $m_tableName;
    protected $m_status;
    protected $m_other;
    protected $m_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiDbStatusBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getId()
    {
        return $this->m_id;
    }
    public function setId($value)
    {
        $this->m_id = $value;
        $this->setOrigId($value);
        return;
    }

    public function getObjectid()
    {
        return $this->m_objectId;
    }
    public function setObjectid($value)
    {
        $this->m_objectId = $value;
        return;
    }

    public function getTablename()
    {
        return $this->m_tableName;
    }
    public function setTablename($value)
    {
        $this->m_tableName = $value;
        return;
    }

    public function getStatus()
    {
        return $this->m_status;
    }
    public function setStatus($value)
    {
        $this->m_status = $value;
        return;
    }

    public function getOther()
    {
        return $this->m_other;
    }
    public function setOther($value)
    {
        $this->m_other = $value;
        return;
    }

    public function getOrigId()
    {
        return $this->m_id_Orig;
    }
    public function setOrigId($value)
    {
        if (isset($this->m_id_Orig)) { return; }
        $this->m_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setId($arrValues['id']);
        $this->setObjectid($arrValues['objectId']);
        $this->setTablename($arrValues['tableName']);
        $this->setStatus($arrValues['status']);
        $this->setOther($arrValues['other']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'objectId':
                    $this->setObjectid($val);
                    break;
                case 'tableName':
                    $this->setTablename($val);
                    break;
                case 'status':
                    $this->setStatus($val);
                    break;
                case 'other':
                    $this->setOther($val);
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
        $arrValues['id'] = $this->getId();
        $arrValues['objectId'] = $this->getObjectid();
        $arrValues['tableName'] = $this->getTablename();
        $arrValues['status'] = $this->getStatus();
        $arrValues['other'] = $this->getOther();
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
