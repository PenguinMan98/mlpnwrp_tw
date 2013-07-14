<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPollOptionsBase
{
    protected $m_pollId;
    protected $m_optionId;
    protected $m_title;
    protected $m_position;
    protected $m_votes;
    protected $m_optionId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setPollid(0);
            $this->setPosition(0);
        }
        return;
    }
    public function TikiPollOptionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPollid()
    {
        return $this->m_pollId;
    }
    public function setPollid($value)
    {
        $this->m_pollId = $value;
        return;
    }

    public function getOptionid()
    {
        return $this->m_optionId;
    }
    public function setOptionid($value)
    {
        $this->m_optionId = $value;
        $this->setOrigOptionid($value);
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

    public function getPosition()
    {
        return $this->m_position;
    }
    public function setPosition($value)
    {
        $this->m_position = $value;
        return;
    }

    public function getVotes()
    {
        return $this->m_votes;
    }
    public function setVotes($value)
    {
        $this->m_votes = $value;
        return;
    }

    public function getOrigOptionid()
    {
        return $this->m_optionId_Orig;
    }
    public function setOrigOptionid($value)
    {
        if (isset($this->m_optionId_Orig)) { return; }
        $this->m_optionId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPollid($arrValues['pollId']);
        $this->setOptionid($arrValues['optionId']);
        $this->setTitle($arrValues['title']);
        $this->setPosition($arrValues['position']);
        $this->setVotes($arrValues['votes']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'pollId':
                    $this->setPollid($val);
                    break;
                case 'optionId':
                    $this->setOptionid($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'position':
                    $this->setPosition($val);
                    break;
                case 'votes':
                    $this->setVotes($val);
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
        $arrValues['pollId'] = $this->getPollid();
        $arrValues['optionId'] = $this->getOptionid();
        $arrValues['title'] = $this->getTitle();
        $arrValues['position'] = $this->getPosition();
        $arrValues['votes'] = $this->getVotes();
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
