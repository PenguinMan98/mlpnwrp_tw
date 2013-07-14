<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiMailEventsBase
{
    protected $m_event;
    protected $m_object;
    protected $m_email;
    protected $m_event_Orig;
    protected $m_object_Orig;
    protected $m_email_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiMailEventsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getEvent()
    {
        return $this->m_event;
    }
    public function setEvent($value)
    {
        $this->m_event = $value;
        $this->setOrigEvent($value);
        return;
    }

    public function getObject()
    {
        return $this->m_object;
    }
    public function setObject($value)
    {
        $this->m_object = $value;
        $this->setOrigObject($value);
        return;
    }

    public function getEmail()
    {
        return $this->m_email;
    }
    public function setEmail($value)
    {
        $this->m_email = $value;
        $this->setOrigEmail($value);
        return;
    }

    public function getOrigEvent()
    {
        return $this->m_event_Orig;
    }
    public function setOrigEvent($value)
    {
        if (isset($this->m_event_Orig)) { return; }
        $this->m_event_Orig = $value;
        return;
    }

    public function getOrigObject()
    {
        return $this->m_object_Orig;
    }
    public function setOrigObject($value)
    {
        if (isset($this->m_object_Orig)) { return; }
        $this->m_object_Orig = $value;
        return;
    }

    public function getOrigEmail()
    {
        return $this->m_email_Orig;
    }
    public function setOrigEmail($value)
    {
        if (isset($this->m_email_Orig)) { return; }
        $this->m_email_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setEvent($arrValues['event']);
        $this->setObject($arrValues['object']);
        $this->setEmail($arrValues['email']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'event':
                    $this->setEvent($val);
                    break;
                case 'object':
                    $this->setObject($val);
                    break;
                case 'email':
                    $this->setEmail($val);
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
        $arrValues['event'] = $this->getEvent();
        $arrValues['object'] = $this->getObject();
        $arrValues['email'] = $this->getEmail();
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
