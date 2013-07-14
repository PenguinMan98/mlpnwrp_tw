<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiLiveSupportEventsBase
{
    protected $m_eventId;
    protected $m_reqId;
    protected $m_type;
    protected $m_seqId;
    protected $m_senderId;
    protected $m_data;
    protected $m_timestamp;
    protected $m_eventId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setReqid('');
        }
        return;
    }
    public function TikiLiveSupportEventsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getEventid()
    {
        return $this->m_eventId;
    }
    public function setEventid($value)
    {
        $this->m_eventId = $value;
        $this->setOrigEventid($value);
        return;
    }

    public function getReqid()
    {
        return $this->m_reqId;
    }
    public function setReqid($value)
    {
        $this->m_reqId = $value;
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

    public function getSeqid()
    {
        return $this->m_seqId;
    }
    public function setSeqid($value)
    {
        $this->m_seqId = $value;
        return;
    }

    public function getSenderid()
    {
        return $this->m_senderId;
    }
    public function setSenderid($value)
    {
        $this->m_senderId = $value;
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

    public function getTimestamp()
    {
        return $this->m_timestamp;
    }
    public function setTimestamp($value)
    {
        $this->m_timestamp = $value;
        return;
    }

    public function getOrigEventid()
    {
        return $this->m_eventId_Orig;
    }
    public function setOrigEventid($value)
    {
        if (isset($this->m_eventId_Orig)) { return; }
        $this->m_eventId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setEventid($arrValues['eventId']);
        $this->setReqid($arrValues['reqId']);
        $this->setType($arrValues['type']);
        $this->setSeqid($arrValues['seqId']);
        $this->setSenderid($arrValues['senderId']);
        $this->setData($arrValues['data']);
        $this->setTimestamp($arrValues['timestamp']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'eventId':
                    $this->setEventid($val);
                    break;
                case 'reqId':
                    $this->setReqid($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'seqId':
                    $this->setSeqid($val);
                    break;
                case 'senderId':
                    $this->setSenderid($val);
                    break;
                case 'data':
                    $this->setData($val);
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
        $arrValues['eventId'] = $this->getEventid();
        $arrValues['reqId'] = $this->getReqid();
        $arrValues['type'] = $this->getType();
        $arrValues['seqId'] = $this->getSeqid();
        $arrValues['senderId'] = $this->getSenderid();
        $arrValues['data'] = $this->getData();
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
