<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiMinicalEventsBase
{
    protected $m_user;
    protected $m_eventId;
    protected $m_title;
    protected $m_description;
    protected $m_start;
    protected $m_end;
    protected $m_security;
    protected $m_duration;
    protected $m_topicId;
    protected $m_reminded;
    protected $m_eventId_Orig;

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
    public function TikiMinicalEventsBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getTitle()
    {
        return $this->m_title;
    }
    public function setTitle($value)
    {
        $this->m_title = $value;
        return;
    }

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getStart()
    {
        return $this->m_start;
    }
    public function setStart($value)
    {
        $this->m_start = $value;
        return;
    }

    public function getEnd()
    {
        return $this->m_end;
    }
    public function setEnd($value)
    {
        $this->m_end = $value;
        return;
    }

    public function getSecurity()
    {
        return $this->m_security;
    }
    public function setSecurity($value)
    {
        $this->m_security = $value;
        return;
    }

    public function getDuration()
    {
        return $this->m_duration;
    }
    public function setDuration($value)
    {
        $this->m_duration = $value;
        return;
    }

    public function getTopicid()
    {
        return $this->m_topicId;
    }
    public function setTopicid($value)
    {
        $this->m_topicId = $value;
        return;
    }

    public function getReminded()
    {
        return $this->m_reminded;
    }
    public function setReminded($value)
    {
        $this->m_reminded = $value;
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
        $this->setUser($arrValues['user']);
        $this->setEventid($arrValues['eventId']);
        $this->setTitle($arrValues['title']);
        $this->setDescription($arrValues['description']);
        $this->setStart($arrValues['start']);
        $this->setEnd($arrValues['end']);
        $this->setSecurity($arrValues['security']);
        $this->setDuration($arrValues['duration']);
        $this->setTopicid($arrValues['topicId']);
        $this->setReminded($arrValues['reminded']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'eventId':
                    $this->setEventid($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'start':
                    $this->setStart($val);
                    break;
                case 'end':
                    $this->setEnd($val);
                    break;
                case 'security':
                    $this->setSecurity($val);
                    break;
                case 'duration':
                    $this->setDuration($val);
                    break;
                case 'topicId':
                    $this->setTopicid($val);
                    break;
                case 'reminded':
                    $this->setReminded($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['eventId'] = $this->getEventid();
        $arrValues['title'] = $this->getTitle();
        $arrValues['description'] = $this->getDescription();
        $arrValues['start'] = $this->getStart();
        $arrValues['end'] = $this->getEnd();
        $arrValues['security'] = $this->getSecurity();
        $arrValues['duration'] = $this->getDuration();
        $arrValues['topicId'] = $this->getTopicid();
        $arrValues['reminded'] = $this->getReminded();
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
