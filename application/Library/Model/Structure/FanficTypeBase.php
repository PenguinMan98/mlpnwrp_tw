<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_FanficTypeBase
{
    protected $m_fanfic_type_id;
    protected $m_name;
    protected $m_description;
    protected $m_fanfic_type_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function FanficTypeBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getFanficTypeId()
    {
        return $this->m_fanfic_type_id;
    }
    public function setFanficTypeId($value)
    {
        $this->m_fanfic_type_id = $value;
        $this->setOrigFanficTypeId($value);
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

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getOrigFanficTypeId()
    {
        return $this->m_fanfic_type_id_Orig;
    }
    public function setOrigFanficTypeId($value)
    {
        if (isset($this->m_fanfic_type_id_Orig)) { return; }
        $this->m_fanfic_type_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setFanficTypeId($arrValues['fanfic_type_id']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'fanfic_type_id':
                    $this->setFanficTypeId($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
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
        $arrValues['fanfic_type_id'] = $this->getFanficTypeId();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
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
