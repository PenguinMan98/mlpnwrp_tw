<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserReportsBase
{
    protected $m_id;
    protected $m_user;
    protected $m_interval;
    protected $m_view;
    protected $m_type;
    protected $m_always_email;
    protected $m_last_report;
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
    public function TikiUserReportsBase($arrData = null)
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

    public function getInterval()
    {
        return $this->m_interval;
    }
    public function setInterval($value)
    {
        $this->m_interval = $value;
        return;
    }

    public function getView()
    {
        return $this->m_view;
    }
    public function setView($value)
    {
        $this->m_view = $value;
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

    public function getAlwaysEmail()
    {
        return $this->m_always_email;
    }
    public function setAlwaysEmail($value)
    {
        $this->m_always_email = $value;
        return;
    }

    public function getLastReport()
    {
        return $this->m_last_report;
    }
    public function setLastReport($value)
    {
        $this->m_last_report = $value;
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
        $this->setInterval($arrValues['interval']);
        $this->setView($arrValues['view']);
        $this->setType($arrValues['type']);
        $this->setAlwaysEmail($arrValues['always_email']);
        $this->setLastReport($arrValues['last_report']);
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
                case 'interval':
                    $this->setInterval($val);
                    break;
                case 'view':
                    $this->setView($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'always_email':
                    $this->setAlwaysEmail($val);
                    break;
                case 'last_report':
                    $this->setLastReport($val);
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
        $arrValues['interval'] = $this->getInterval();
        $arrValues['view'] = $this->getView();
        $arrValues['type'] = $this->getType();
        $arrValues['always_email'] = $this->getAlwaysEmail();
        $arrValues['last_report'] = $this->getLastReport();
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
