<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiDiscountBase
{
    protected $m_id;
    protected $m_code;
    protected $m_value;
    protected $m_max;
    protected $m_comment;
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
    public function TikiDiscountBase($arrData = null)
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

    public function getCode()
    {
        return $this->m_code;
    }
    public function setCode($value)
    {
        $this->m_code = $value;
        return;
    }

    public function getValue()
    {
        return $this->m_value;
    }
    public function setValue($value)
    {
        $this->m_value = $value;
        return;
    }

    public function getMax()
    {
        return $this->m_max;
    }
    public function setMax($value)
    {
        $this->m_max = $value;
        return;
    }

    public function getComment()
    {
        return $this->m_comment;
    }
    public function setComment($value)
    {
        $this->m_comment = $value;
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
        $this->setCode($arrValues['code']);
        $this->setValue($arrValues['value']);
        $this->setMax($arrValues['max']);
        $this->setComment($arrValues['comment']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'code':
                    $this->setCode($val);
                    break;
                case 'value':
                    $this->setValue($val);
                    break;
                case 'max':
                    $this->setMax($val);
                    break;
                case 'comment':
                    $this->setComment($val);
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
        $arrValues['code'] = $this->getCode();
        $arrValues['value'] = $this->getValue();
        $arrValues['max'] = $this->getMax();
        $arrValues['comment'] = $this->getComment();
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
