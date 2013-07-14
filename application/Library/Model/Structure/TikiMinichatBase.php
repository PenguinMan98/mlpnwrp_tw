<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiMinichatBase
{
    protected $m_id;
    protected $m_channel;
    protected $m_ts;
    protected $m_user;
    protected $m_nick;
    protected $m_msg;
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
    public function TikiMinichatBase($arrData = null)
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

    public function getChannel()
    {
        return $this->m_channel;
    }
    public function setChannel($value)
    {
        $this->m_channel = $value;
        return;
    }

    public function getTs()
    {
        return $this->m_ts;
    }
    public function setTs($value)
    {
        $this->m_ts = $value;
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

    public function getNick()
    {
        return $this->m_nick;
    }
    public function setNick($value)
    {
        $this->m_nick = $value;
        return;
    }

    public function getMsg()
    {
        return $this->m_msg;
    }
    public function setMsg($value)
    {
        $this->m_msg = $value;
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
        $this->setChannel($arrValues['channel']);
        $this->setTs($arrValues['ts']);
        $this->setUser($arrValues['user']);
        $this->setNick($arrValues['nick']);
        $this->setMsg($arrValues['msg']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'channel':
                    $this->setChannel($val);
                    break;
                case 'ts':
                    $this->setTs($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'nick':
                    $this->setNick($val);
                    break;
                case 'msg':
                    $this->setMsg($val);
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
        $arrValues['channel'] = $this->getChannel();
        $arrValues['ts'] = $this->getTs();
        $arrValues['user'] = $this->getUser();
        $arrValues['nick'] = $this->getNick();
        $arrValues['msg'] = $this->getMsg();
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
