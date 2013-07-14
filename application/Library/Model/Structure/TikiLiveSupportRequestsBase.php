<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiLiveSupportRequestsBase
{
    protected $m_reqId;
    protected $m_user;
    protected $m_tiki_user;
    protected $m_email;
    protected $m_operator;
    protected $m_operator_id;
    protected $m_user_id;
    protected $m_reason;
    protected $m_req_timestamp;
    protected $m_timestamp;
    protected $m_status;
    protected $m_resolution;
    protected $m_chat_started;
    protected $m_chat_ended;
    protected $m_reqId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
        }
        return;
    }
    public function TikiLiveSupportRequestsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getReqid()
    {
        return $this->m_reqId;
    }
    public function setReqid($value)
    {
        $this->m_reqId = $value;
        $this->setOrigReqid($value);
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

    public function getTikiUser()
    {
        return $this->m_tiki_user;
    }
    public function setTikiUser($value)
    {
        $this->m_tiki_user = $value;
        return;
    }

    public function getEmail()
    {
        return $this->m_email;
    }
    public function setEmail($value)
    {
        $this->m_email = $value;
        return;
    }

    public function getOperator()
    {
        return $this->m_operator;
    }
    public function setOperator($value)
    {
        $this->m_operator = $value;
        return;
    }

    public function getOperatorId()
    {
        return $this->m_operator_id;
    }
    public function setOperatorId($value)
    {
        $this->m_operator_id = $value;
        return;
    }

    public function getUserId()
    {
        return $this->m_user_id;
    }
    public function setUserId($value)
    {
        $this->m_user_id = $value;
        return;
    }

    public function getReason()
    {
        return $this->m_reason;
    }
    public function setReason($value)
    {
        $this->m_reason = $value;
        return;
    }

    public function getReqTimestamp()
    {
        return $this->m_req_timestamp;
    }
    public function setReqTimestamp($value)
    {
        $this->m_req_timestamp = $value;
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

    public function getStatus()
    {
        return $this->m_status;
    }
    public function setStatus($value)
    {
        $this->m_status = $value;
        return;
    }

    public function getResolution()
    {
        return $this->m_resolution;
    }
    public function setResolution($value)
    {
        $this->m_resolution = $value;
        return;
    }

    public function getChatStarted()
    {
        return $this->m_chat_started;
    }
    public function setChatStarted($value)
    {
        $this->m_chat_started = $value;
        return;
    }

    public function getChatEnded()
    {
        return $this->m_chat_ended;
    }
    public function setChatEnded($value)
    {
        $this->m_chat_ended = $value;
        return;
    }

    public function getOrigReqid()
    {
        return $this->m_reqId_Orig;
    }
    public function setOrigReqid($value)
    {
        if (isset($this->m_reqId_Orig)) { return; }
        $this->m_reqId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setReqid($arrValues['reqId']);
        $this->setUser($arrValues['user']);
        $this->setTikiUser($arrValues['tiki_user']);
        $this->setEmail($arrValues['email']);
        $this->setOperator($arrValues['operator']);
        $this->setOperatorId($arrValues['operator_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setReason($arrValues['reason']);
        $this->setReqTimestamp($arrValues['req_timestamp']);
        $this->setTimestamp($arrValues['timestamp']);
        $this->setStatus($arrValues['status']);
        $this->setResolution($arrValues['resolution']);
        $this->setChatStarted($arrValues['chat_started']);
        $this->setChatEnded($arrValues['chat_ended']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'reqId':
                    $this->setReqid($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'tiki_user':
                    $this->setTikiUser($val);
                    break;
                case 'email':
                    $this->setEmail($val);
                    break;
                case 'operator':
                    $this->setOperator($val);
                    break;
                case 'operator_id':
                    $this->setOperatorId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'reason':
                    $this->setReason($val);
                    break;
                case 'req_timestamp':
                    $this->setReqTimestamp($val);
                    break;
                case 'timestamp':
                    $this->setTimestamp($val);
                    break;
                case 'status':
                    $this->setStatus($val);
                    break;
                case 'resolution':
                    $this->setResolution($val);
                    break;
                case 'chat_started':
                    $this->setChatStarted($val);
                    break;
                case 'chat_ended':
                    $this->setChatEnded($val);
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
        $arrValues['reqId'] = $this->getReqid();
        $arrValues['user'] = $this->getUser();
        $arrValues['tiki_user'] = $this->getTikiUser();
        $arrValues['email'] = $this->getEmail();
        $arrValues['operator'] = $this->getOperator();
        $arrValues['operator_id'] = $this->getOperatorId();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['reason'] = $this->getReason();
        $arrValues['req_timestamp'] = $this->getReqTimestamp();
        $arrValues['timestamp'] = $this->getTimestamp();
        $arrValues['status'] = $this->getStatus();
        $arrValues['resolution'] = $this->getResolution();
        $arrValues['chat_started'] = $this->getChatStarted();
        $arrValues['chat_ended'] = $this->getChatEnded();
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
