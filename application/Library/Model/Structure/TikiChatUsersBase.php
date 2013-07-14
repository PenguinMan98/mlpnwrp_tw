<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiChatUsersBase
{
    protected $m_nickname;
    protected $m_channelId;
    protected $m_timestamp;
    protected $m_nickname_Orig;
    protected $m_channelId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiChatUsersBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getNickname()
    {
        return $this->m_nickname;
    }
    public function setNickname($value)
    {
        $this->m_nickname = $value;
        $this->setOrigNickname($value);
        return;
    }

    public function getChannelid()
    {
        return $this->m_channelId;
    }
    public function setChannelid($value)
    {
        $this->m_channelId = $value;
        $this->setOrigChannelid($value);
        return;
    }

    public function getTimestamp()
    {
        return $this->m_timestamp;
    }
    public function setTimestamp($value)
    {
        $this->m_timestamp = $value;
        return;
    }

    public function getOrigNickname()
    {
        return $this->m_nickname_Orig;
    }
    public function setOrigNickname($value)
    {
        if (isset($this->m_nickname_Orig)) { return; }
        $this->m_nickname_Orig = $value;
        return;
    }

    public function getOrigChannelid()
    {
        return $this->m_channelId_Orig;
    }
    public function setOrigChannelid($value)
    {
        if (isset($this->m_channelId_Orig)) { return; }
        $this->m_channelId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setNickname($arrValues['nickname']);
        $this->setChannelid($arrValues['channelId']);
        $this->setTimestamp($arrValues['timestamp']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'nickname':
                    $this->setNickname($val);
                    break;
                case 'channelId':
                    $this->setChannelid($val);
                    break;
                case 'timestamp':
                    $this->setTimestamp($val);
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
        $arrValues['nickname'] = $this->getNickname();
        $arrValues['channelId'] = $this->getChannelid();
        $arrValues['timestamp'] = $this->getTimestamp();
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
