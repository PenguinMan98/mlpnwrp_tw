<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPrivateMessagesBase
{
    protected $m_messageId;
    protected $m_toNickname;
    protected $m_poster;
    protected $m_timestamp;
    protected $m_received;
    protected $m_message;
    protected $m_messageId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTonickname('');
            $this->setPoster('anonymous');
            $this->setReceived(0);
        }
        return;
    }
    public function TikiPrivateMessagesBase($arrData = null)
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

    public function getTonickname()
    {
        return $this->m_toNickname;
    }
    public function setTonickname($value)
    {
        $this->m_toNickname = $value;
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

    public function getReceived()
    {
        return $this->m_received;
    }
    public function setReceived($value)
    {
        $this->m_received = $value;
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
        $this->setTonickname($arrValues['toNickname']);
        $this->setPoster($arrValues['poster']);
        $this->setTimestamp($arrValues['timestamp']);
        $this->setReceived($arrValues['received']);
        $this->setMessage($arrValues['message']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'messageId':
                    $this->setMessageid($val);
                    break;
                case 'toNickname':
                    $this->setTonickname($val);
                    break;
                case 'poster':
                    $this->setPoster($val);
                    break;
                case 'timestamp':
                    $this->setTimestamp($val);
                    break;
                case 'received':
                    $this->setReceived($val);
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
        $arrValues['messageId'] = $this->getMessageid();
        $arrValues['toNickname'] = $this->getTonickname();
        $arrValues['poster'] = $this->getPoster();
        $arrValues['timestamp'] = $this->getTimestamp();
        $arrValues['received'] = $this->getReceived();
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
