<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserReportsCacheBase
{
    protected $m_id;
    protected $m_user;
    protected $m_event;
    protected $m_data;
    protected $m_time;
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
    public function TikiUserReportsCacheBase($arrData = null)
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

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
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

    public function getData()
    {
        return $this->m_data;
    }
    public function setData($value)
    {
        $this->m_data = $value;
        return;
    }

    public function getTime()
    {
        return $this->m_time;
    }
    public function setTime($value)
    {
        $this->m_time = $value;
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
        $this->setUser($arrValues['user']);
        $this->setEvent($arrValues['event']);
        $this->setData($arrValues['data']);
        $this->setTime($arrValues['time']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'event':
                    $this->setEvent($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'time':
                    $this->setTime($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['event'] = $this->getEvent();
        $arrValues['data'] = $this->getData();
        $arrValues['time'] = $this->getTime();
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
