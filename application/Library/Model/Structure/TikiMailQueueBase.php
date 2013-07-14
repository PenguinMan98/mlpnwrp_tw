<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiMailQueueBase
{
    protected $m_messageId;
    protected $m_message;
    protected $m_attempts;
    protected $m_messageId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setAttempts(0);
        }
        return;
    }
    public function TikiMailQueueBase($arrData = null)
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

    public function getMessage()
    {
        return $this->m_message;
    }
    public function setMessage($value)
    {
        $this->m_message = $value;
        return;
    }

    public function getAttempts()
    {
        return $this->m_attempts;
    }
    public function setAttempts($value)
    {
        $this->m_attempts = $value;
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
        $this->setMessage($arrValues['message']);
        $this->setAttempts($arrValues['attempts']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'messageId':
                    $this->setMessageid($val);
                    break;
                case 'message':
                    $this->setMessage($val);
                    break;
                case 'attempts':
                    $this->setAttempts($val);
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
        $arrValues['message'] = $this->getMessage();
        $arrValues['attempts'] = $this->getAttempts();
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
