<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiTransitionsBase
{
    protected $m_transitionId;
    protected $m_preserve;
    protected $m_name;
    protected $m_type;
    protected $m_from;
    protected $m_to;
    protected $m_guards;
    protected $m_transitionId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setPreserve(0);
        }
        return;
    }
    public function TikiTransitionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTransitionid()
    {
        return $this->m_transitionId;
    }
    public function setTransitionid($value)
    {
        $this->m_transitionId = $value;
        $this->setOrigTransitionid($value);
        return;
    }

    public function getPreserve()
    {
        return $this->m_preserve;
    }
    public function setPreserve($value)
    {
        $this->m_preserve = $value;
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

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
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

    public function getGuards()
    {
        return $this->m_guards;
    }
    public function setGuards($value)
    {
        $this->m_guards = $value;
        return;
    }

    public function getOrigTransitionid()
    {
        return $this->m_transitionId_Orig;
    }
    public function setOrigTransitionid($value)
    {
        if (isset($this->m_transitionId_Orig)) { return; }
        $this->m_transitionId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTransitionid($arrValues['transitionId']);
        $this->setPreserve($arrValues['preserve']);
        $this->setName($arrValues['name']);
        $this->setType($arrValues['type']);
        $this->setFrom($arrValues['from']);
        $this->setTo($arrValues['to']);
        $this->setGuards($arrValues['guards']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'transitionId':
                    $this->setTransitionid($val);
                    break;
                case 'preserve':
                    $this->setPreserve($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'from':
                    $this->setFrom($val);
                    break;
                case 'to':
                    $this->setTo($val);
                    break;
                case 'guards':
                    $this->setGuards($val);
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
        $arrValues['transitionId'] = $this->getTransitionid();
        $arrValues['preserve'] = $this->getPreserve();
        $arrValues['name'] = $this->getName();
        $arrValues['type'] = $this->getType();
        $arrValues['from'] = $this->getFrom();
        $arrValues['to'] = $this->getTo();
        $arrValues['guards'] = $this->getGuards();
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
