<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiLiveSupportMessageCommentsBase
{
    protected $m_cId;
    protected $m_msgId;
    protected $m_data;
    protected $m_timestamp;
    protected $m_cId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiLiveSupportMessageCommentsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCid()
    {
        return $this->m_cId;
    }
    public function setCid($value)
    {
        $this->m_cId = $value;
        $this->setOrigCid($value);
        return;
    }

    public function getMsgid()
    {
        return $this->m_msgId;
    }
    public function setMsgid($value)
    {
        $this->m_msgId = $value;
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

    public function getOrigCid()
    {
        return $this->m_cId_Orig;
    }
    public function setOrigCid($value)
    {
        if (isset($this->m_cId_Orig)) { return; }
        $this->m_cId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCid($arrValues['cId']);
        $this->setMsgid($arrValues['msgId']);
        $this->setData($arrValues['data']);
        $this->setTimestamp($arrValues['timestamp']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'cId':
                    $this->setCid($val);
                    break;
                case 'msgId':
                    $this->setMsgid($val);
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
        $arrValues['cId'] = $this->getCid();
        $arrValues['msgId'] = $this->getMsgid();
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
