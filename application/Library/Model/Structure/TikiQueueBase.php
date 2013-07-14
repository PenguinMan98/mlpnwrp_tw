<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiQueueBase
{
    protected $m_entryId;
    protected $m_queue;
    protected $m_timestamp;
    protected $m_handler;
    protected $m_message;
    protected $m_entryId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiQueueBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getEntryid()
    {
        return $this->m_entryId;
    }
    public function setEntryid($value)
    {
        $this->m_entryId = $value;
        $this->setOrigEntryid($value);
        return;
    }

    public function getQueue()
    {
        return $this->m_queue;
    }
    public function setQueue($value)
    {
        $this->m_queue = $value;
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

    public function getHandler()
    {
        return $this->m_handler;
    }
    public function setHandler($value)
    {
        $this->m_handler = $value;
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

    public function getOrigEntryid()
    {
        return $this->m_entryId_Orig;
    }
    public function setOrigEntryid($value)
    {
        if (isset($this->m_entryId_Orig)) { return; }
        $this->m_entryId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setEntryid($arrValues['entryId']);
        $this->setQueue($arrValues['queue']);
        $this->setTimestamp($arrValues['timestamp']);
        $this->setHandler($arrValues['handler']);
        $this->setMessage($arrValues['message']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'entryId':
                    $this->setEntryid($val);
                    break;
                case 'queue':
                    $this->setQueue($val);
                    break;
                case 'timestamp':
                    $this->setTimestamp($val);
                    break;
                case 'handler':
                    $this->setHandler($val);
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
        $arrValues['entryId'] = $this->getEntryid();
        $arrValues['queue'] = $this->getQueue();
        $arrValues['timestamp'] = $this->getTimestamp();
        $arrValues['handler'] = $this->getHandler();
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
