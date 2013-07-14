<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiTodoBase
{
    protected $m_todoId;
    protected $m_after;
    protected $m_event;
    protected $m_objectType;
    protected $m_objectId;
    protected $m_from;
    protected $m_to;
    protected $m_todoId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiTodoBase($arrData = null)
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

    public function getAfter()
    {
        return $this->m_after;
    }
    public function setAfter($value)
    {
        $this->m_after = $value;
        return;
    }

    public function getEvent()
    {
        return $this->m_event;
    }
    public function setEvent($value)
    {
        $this->m_event = $value;
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

    public function getObjectid()
    {
        return $this->m_objectId;
    }
    public function setObjectid($value)
    {
        $this->m_objectId = $value;
        return;
    }

    public function getFrom()
    {
        return $this->m_from;
    }
    public function setFrom($value)
    {
        $this->m_from = $value;
        return;
    }

    public function getTo()
    {
        return $this->m_to;
    }
    public function setTo($value)
    {
        $this->m_to = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setTodoid($arrValues['todoId']);
        $this->setAfter($arrValues['after']);
        $this->setEvent($arrValues['event']);
        $this->setObjecttype($arrValues['objectType']);
        $this->setObjectid($arrValues['objectId']);
        $this->setFrom($arrValues['from']);
        $this->setTo($arrValues['to']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'todoId':
                    $this->setTodoid($val);
                    break;
                case 'after':
                    $this->setAfter($val);
                    break;
                case 'event':
                    $this->setEvent($val);
                    break;
                case 'objectType':
                    $this->setObjecttype($val);
                    break;
                case 'objectId':
                    $this->setObjectid($val);
                    break;
                case 'from':
                    $this->setFrom($val);
                    break;
                case 'to':
                    $this->setTo($val);
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
        $arrValues['after'] = $this->getAfter();
        $arrValues['event'] = $this->getEvent();
        $arrValues['objectType'] = $this->getObjecttype();
        $arrValues['objectId'] = $this->getObjectid();
        $arrValues['from'] = $this->getFrom();
        $arrValues['to'] = $this->getTo();
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
