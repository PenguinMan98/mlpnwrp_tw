<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiScoreBase
{
    protected $m_event;
    protected $m_score;
    protected $m_expiration;
    protected $m_event_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setScore(0);
            $this->setExpiration(0);
        }
        return;
    }
    public function TikiScoreBase($arrData = null)
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

    public function getScore()
    {
        return $this->m_score;
    }
    public function setScore($value)
    {
        $this->m_score = $value;
        return;
    }

    public function getExpiration()
    {
        return $this->m_expiration;
    }
    public function setExpiration($value)
    {
        $this->m_expiration = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setEvent($arrValues['event']);
        $this->setScore($arrValues['score']);
        $this->setExpiration($arrValues['expiration']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'event':
                    $this->setEvent($val);
                    break;
                case 'score':
                    $this->setScore($val);
                    break;
                case 'expiration':
                    $this->setExpiration($val);
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
        $arrValues['score'] = $this->getScore();
        $arrValues['expiration'] = $this->getExpiration();
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
