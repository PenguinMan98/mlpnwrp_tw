<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiBanningBase
{
    protected $m_banId;
    protected $m_mode;
    protected $m_title;
    protected $m_ip1;
    protected $m_ip2;
    protected $m_ip3;
    protected $m_ip4;
    protected $m_user;
    protected $m_date_from;
    protected $m_date_to;
    protected $m_use_dates;
    protected $m_created;
    protected $m_message;
    protected $m_banId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
            $this->setDateFrom('CURRENT_TIMESTAMP');
            $this->setDateTo('0000-00-00 00:00:00');
        }
        return;
    }
    public function TikiBanningBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getBanid()
    {
        return $this->m_banId;
    }
    public function setBanid($value)
    {
        $this->m_banId = $value;
        $this->setOrigBanid($value);
        return;
    }

    public function getMode()
    {
        return $this->m_mode;
    }
    public function setMode($value)
    {
        $this->m_mode = $value;
        return;
    }

    public function getTitle()
    {
        return $this->m_title;
    }
    public function setTitle($value)
    {
        $this->m_title = $value;
        return;
    }

    public function getIp1()
    {
        return $this->m_ip1;
    }
    public function setIp1($value)
    {
        $this->m_ip1 = $value;
        return;
    }

    public function getIp2()
    {
        return $this->m_ip2;
    }
    public function setIp2($value)
    {
        $this->m_ip2 = $value;
        return;
    }

    public function getIp3()
    {
        return $this->m_ip3;
    }
    public function setIp3($value)
    {
        $this->m_ip3 = $value;
        return;
    }

    public function getIp4()
    {
        return $this->m_ip4;
    }
    public function setIp4($value)
    {
        $this->m_ip4 = $value;
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

    public function getDateFrom()
    {
        return $this->m_date_from;
    }
    public function setDateFrom($value)
    {
        $this->m_date_from = $value;
        return;
    }

    public function getDateTo()
    {
        return $this->m_date_to;
    }
    public function setDateTo($value)
    {
        $this->m_date_to = $value;
        return;
    }

    public function getUseDates()
    {
        return $this->m_use_dates;
    }
    public function setUseDates($value)
    {
        $this->m_use_dates = $value;
        return;
    }

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
        return;
    }

    public function getMessage()
    {
        return $this->m_message;
    }
    public function setMessage($value)
    {
        $this->m_message = $value;
        return;
    }

    public function getOrigBanid()
    {
        return $this->m_banId_Orig;
    }
    public function setOrigBanid($value)
    {
        if (isset($this->m_banId_Orig)) { return; }
        $this->m_banId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setBanid($arrValues['banId']);
        $this->setMode($arrValues['mode']);
        $this->setTitle($arrValues['title']);
        $this->setIp1($arrValues['ip1']);
        $this->setIp2($arrValues['ip2']);
        $this->setIp3($arrValues['ip3']);
        $this->setIp4($arrValues['ip4']);
        $this->setUser($arrValues['user']);
        $this->setDateFrom($arrValues['date_from']);
        $this->setDateTo($arrValues['date_to']);
        $this->setUseDates($arrValues['use_dates']);
        $this->setCreated($arrValues['created']);
        $this->setMessage($arrValues['message']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'banId':
                    $this->setBanid($val);
                    break;
                case 'mode':
                    $this->setMode($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'ip1':
                    $this->setIp1($val);
                    break;
                case 'ip2':
                    $this->setIp2($val);
                    break;
                case 'ip3':
                    $this->setIp3($val);
                    break;
                case 'ip4':
                    $this->setIp4($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'date_from':
                    $this->setDateFrom($val);
                    break;
                case 'date_to':
                    $this->setDateTo($val);
                    break;
                case 'use_dates':
                    $this->setUseDates($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'message':
                    $this->setMessage($val);
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
        $arrValues['banId'] = $this->getBanid();
        $arrValues['mode'] = $this->getMode();
        $arrValues['title'] = $this->getTitle();
        $arrValues['ip1'] = $this->getIp1();
        $arrValues['ip2'] = $this->getIp2();
        $arrValues['ip3'] = $this->getIp3();
        $arrValues['ip4'] = $this->getIp4();
        $arrValues['user'] = $this->getUser();
        $arrValues['date_from'] = $this->getDateFrom();
        $arrValues['date_to'] = $this->getDateTo();
        $arrValues['use_dates'] = $this->getUseDates();
        $arrValues['created'] = $this->getCreated();
        $arrValues['message'] = $this->getMessage();
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
