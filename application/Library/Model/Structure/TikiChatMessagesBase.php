<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiChatMessagesBase
{
    protected $m_messageId;
    protected $m_channelId;
    protected $m_data;
    protected $m_poster;
    protected $m_timestamp;
    protected $m_messageId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setChannelid(0);
            $this->setPoster('anonymous');
        }
        return;
    }
    public function TikiChatMessagesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getMessageid()
    {
        return $this->m_messageId;
    }
    public function setMessageid($value)
    {
        $this->m_messageId = $value;
        $this->setOrigMessageid($value);
        return;
    }

    public function getChannelid()
    {
        return $this->m_channelId;
    }
    public function setChannelid($value)
    {
        $this->m_channelId = $value;
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

    public function getPoster()
    {
        return $this->m_poster;
    }
    public function setPoster($value)
    {
        $this->m_poster = $value;
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

    public function getOrigMessageid()
    {
        return $this->m_messageId_Orig;
    }
    public function setOrigMessageid($value)
    {
        if (isset($this->m_messageId_Orig)) { return; }
        $this->m_messageId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setMessageid($arrValues['messageId']);
        $this->setChannelid($arrValues['channelId']);
        $this->setData($arrValues['data']);
        $this->setPoster($arrValues['poster']);
        $this->setTimestamp($arrValues['timestamp']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'messageId':
                    $this->setMessageid($val);
                    break;
                case 'channelId':
                    $this->setChannelid($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'poster':
                    $this->setPoster($val);
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
        $arrValues['messageId'] = $this->getMessageid();
        $arrValues['channelId'] = $this->getChannelid();
        $arrValues['data'] = $this->getData();
        $arrValues['poster'] = $this->getPoster();
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
