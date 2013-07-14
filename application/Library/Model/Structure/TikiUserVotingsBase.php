<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserVotingsBase
{
    protected $m_user;
    protected $m_ip;
    protected $m_id;
    protected $m_optionId;
    protected $m_time;
    protected $m_user_Orig;
    protected $m_ip_Orig;
    protected $m_id_Orig;
    protected $m_optionId_Orig;
    protected $m_time_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiUserVotingsBase($arrData = null)
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
        $this->setOrigUser($value);
        return;
    }

    public function getIp()
    {
        return $this->m_ip;
    }
    public function setIp($value)
    {
        $this->m_ip = $value;
        $this->setOrigIp($value);
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

    public function getOptionid()
    {
        return $this->m_optionId;
    }
    public function setOptionid($value)
    {
        $this->m_optionId = $value;
        $this->setOrigOptionid($value);
        return;
    }

    public function getTime()
    {
        return $this->m_time;
    }
    public function setTime($value)
    {
        $this->m_time = $value;
        $this->setOrigTime($value);
        return;
    }

    public function getOrigUser()
    {
        return $this->m_user_Orig;
    }
    public function setOrigUser($value)
    {
        if (isset($this->m_user_Orig)) { return; }
        $this->m_user_Orig = $value;
        return;
    }

    public function getOrigIp()
    {
        return $this->m_ip_Orig;
    }
    public function setOrigIp($value)
    {
        if (isset($this->m_ip_Orig)) { return; }
        $this->m_ip_Orig = $value;
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

    public function getOrigOptionid()
    {
        return $this->m_optionId_Orig;
    }
    public function setOrigOptionid($value)
    {
        if (isset($this->m_optionId_Orig)) { return; }
        $this->m_optionId_Orig = $value;
        return;
    }

    public function getOrigTime()
    {
        return $this->m_time_Orig;
    }
    public function setOrigTime($value)
    {
        if (isset($this->m_time_Orig)) { return; }
        $this->m_time_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUser($arrValues['user']);
        $this->setIp($arrValues['ip']);
        $this->setId($arrValues['id']);
        $this->setOptionid($arrValues['optionId']);
        $this->setTime($arrValues['time']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'ip':
                    $this->setIp($val);
                    break;
                case 'id':
                    $this->setId($val);
                    break;
                case 'optionId':
                    $this->setOptionid($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['ip'] = $this->getIp();
        $arrValues['id'] = $this->getId();
        $arrValues['optionId'] = $this->getOptionid();
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
