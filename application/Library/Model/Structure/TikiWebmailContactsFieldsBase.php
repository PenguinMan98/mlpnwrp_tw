<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiWebmailContactsFieldsBase
{
    protected $m_user;
    protected $m_fieldname;
    protected $m_order;
    protected $m_show;
    protected $m_fieldId;
    protected $m_flagsPublic;
    protected $m_fieldId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setOrder(0);
            $this->setShow('n');
            $this->setFlagspublic('n');
        }
        return;
    }
    public function TikiWebmailContactsFieldsBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getFieldname()
    {
        return $this->m_fieldname;
    }
    public function setFieldname($value)
    {
        $this->m_fieldname = $value;
        return;
    }

    public function getOrder()
    {
        return $this->m_order;
    }
    public function setOrder($value)
    {
        $this->m_order = $value;
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

    public function getFieldid()
    {
        return $this->m_fieldId;
    }
    public function setFieldid($value)
    {
        $this->m_fieldId = $value;
        $this->setOrigFieldid($value);
        return;
    }

    public function getFlagspublic()
    {
        return $this->m_flagsPublic;
    }
    public function setFlagspublic($value)
    {
        $this->m_flagsPublic = $value;
        return;
    }

    public function getOrigFieldid()
    {
        return $this->m_fieldId_Orig;
    }
    public function setOrigFieldid($value)
    {
        if (isset($this->m_fieldId_Orig)) { return; }
        $this->m_fieldId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUser($arrValues['user']);
        $this->setFieldname($arrValues['fieldname']);
        $this->setOrder($arrValues['order']);
        $this->setShow($arrValues['show']);
        $this->setFieldid($arrValues['fieldId']);
        $this->setFlagspublic($arrValues['flagsPublic']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'fieldname':
                    $this->setFieldname($val);
                    break;
                case 'order':
                    $this->setOrder($val);
                    break;
                case 'show':
                    $this->setShow($val);
                    break;
                case 'fieldId':
                    $this->setFieldid($val);
                    break;
                case 'flagsPublic':
                    $this->setFlagspublic($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['fieldname'] = $this->getFieldname();
        $arrValues['order'] = $this->getOrder();
        $arrValues['show'] = $this->getShow();
        $arrValues['fieldId'] = $this->getFieldid();
        $arrValues['flagsPublic'] = $this->getFlagspublic();
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
