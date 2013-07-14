<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiRegistrationFieldsBase
{
    protected $m_id;
    protected $m_field;
    protected $m_name;
    protected $m_type;
    protected $m_show;
    protected $m_size;
    protected $m_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setField('');
            $this->setType('text');
            $this->setShow(1);
            $this->setSize(10);
        }
        return;
    }
    public function TikiRegistrationFieldsBase($arrData = null)
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

    public function getField()
    {
        return $this->m_field;
    }
    public function setField($value)
    {
        $this->m_field = $value;
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

    public function getShow()
    {
        return $this->m_show;
    }
    public function setShow($value)
    {
        $this->m_show = $value;
        return;
    }

    public function getSize()
    {
        return $this->m_size;
    }
    public function setSize($value)
    {
        $this->m_size = $value;
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
        $this->setField($arrValues['field']);
        $this->setName($arrValues['name']);
        $this->setType($arrValues['type']);
        $this->setShow($arrValues['show']);
        $this->setSize($arrValues['size']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'field':
                    $this->setField($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'show':
                    $this->setShow($val);
                    break;
                case 'size':
                    $this->setSize($val);
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
        $arrValues['field'] = $this->getField();
        $arrValues['name'] = $this->getName();
        $arrValues['type'] = $this->getType();
        $arrValues['show'] = $this->getShow();
        $arrValues['size'] = $this->getSize();
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
