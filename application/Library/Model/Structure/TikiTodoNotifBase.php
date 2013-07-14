<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiTodoNotifBase
{
    protected $m_todoId;
    protected $m_objectType;
    protected $m_objectId;
    protected $m_todoId_Orig;
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
    public function TikiTodoNotifBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTodoid()
    {
        return $this->m_todoId;
    }
    public function setTodoid($value)
    {
        $this->m_todoId = $value;
        $this->setOrigTodoid($value);
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

    public function getOrigTodoid()
    {
        return $this->m_todoId_Orig;
    }
    public function setOrigTodoid($value)
    {
        if (isset($this->m_todoId_Orig)) { return; }
        $this->m_todoId_Orig = $value;
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
        $this->setTodoid($arrValues['todoId']);
        $this->setObjecttype($arrValues['objectType']);
        $this->setObjectid($arrValues['objectId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'todoId':
                    $this->setTodoid($val);
                    break;
                case 'objectType':
                    $this->setObjecttype($val);
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
        $arrValues['todoId'] = $this->getTodoid();
        $arrValues['objectType'] = $this->getObjecttype();
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
