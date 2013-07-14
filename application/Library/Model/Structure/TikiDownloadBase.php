<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiDownloadBase
{
    protected $m_id;
    protected $m_object;
    protected $m_userId;
    protected $m_type;
    protected $m_date;
    protected $m_IP;
    protected $m_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setObject('');
            $this->setUserid(0);
            $this->setType('');
            $this->setDate(0);
            $this->setIp('');
        }
        return;
    }
    public function TikiDownloadBase($arrData = null)
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

    public function getObject()
    {
        return $this->m_object;
    }
    public function setObject($value)
    {
        $this->m_object = $value;
        return;
    }

    public function getUserid()
    {
        return $this->m_userId;
    }
    public function setUserid($value)
    {
        $this->m_userId = $value;
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

    public function getDate()
    {
        return $this->m_date;
    }
    public function setDate($value)
    {
        $this->m_date = $value;
        return;
    }

    public function getIp()
    {
        return $this->m_IP;
    }
    public function setIp($value)
    {
        $this->m_IP = $value;
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
        $this->setObject($arrValues['object']);
        $this->setUserid($arrValues['userId']);
        $this->setType($arrValues['type']);
        $this->setDate($arrValues['date']);
        $this->setIp($arrValues['IP']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'object':
                    $this->setObject($val);
                    break;
                case 'userId':
                    $this->setUserid($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'date':
                    $this->setDate($val);
                    break;
                case 'IP':
                    $this->setIp($val);
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
        $arrValues['object'] = $this->getObject();
        $arrValues['userId'] = $this->getUserid();
        $arrValues['type'] = $this->getType();
        $arrValues['date'] = $this->getDate();
        $arrValues['IP'] = $this->getIp();
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
