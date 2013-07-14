<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiActionlogConfBase
{
    protected $m_id;
    protected $m_action;
    protected $m_objectType;
    protected $m_status;
    protected $m_action_Orig;
    protected $m_objectType_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setStatus('');
        }
        return;
    }
    public function TikiActionlogConfBase($arrData = null)
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
        return;
    }

    public function getAction()
    {
        return $this->m_action;
    }
    public function setAction($value)
    {
        $this->m_action = $value;
        $this->setOrigAction($value);
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

    public function getStatus()
    {
        return $this->m_status;
    }
    public function setStatus($value)
    {
        $this->m_status = $value;
        return;
    }

    public function getOrigAction()
    {
        return $this->m_action_Orig;
    }
    public function setOrigAction($value)
    {
        if (isset($this->m_action_Orig)) { return; }
        $this->m_action_Orig = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setId($arrValues['id']);
        $this->setAction($arrValues['action']);
        $this->setObjecttype($arrValues['objectType']);
        $this->setStatus($arrValues['status']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'action':
                    $this->setAction($val);
                    break;
                case 'objectType':
                    $this->setObjecttype($val);
                    break;
                case 'status':
                    $this->setStatus($val);
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
        $arrValues['action'] = $this->getAction();
        $arrValues['objectType'] = $this->getObjecttype();
        $arrValues['status'] = $this->getStatus();
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
