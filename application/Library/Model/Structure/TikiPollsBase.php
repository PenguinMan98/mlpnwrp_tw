<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPollsBase
{
    protected $m_pollId;
    protected $m_title;
    protected $m_votes;
    protected $m_active;
    protected $m_publishDate;
    protected $m_voteConsiderationSpan;
    protected $m_pollId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setVoteconsiderationspan(0);
        }
        return;
    }
    public function TikiPollsBase($arrData = null)
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
        $this->setOrigPollid($value);
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

    public function getVotes()
    {
        return $this->m_votes;
    }
    public function setVotes($value)
    {
        $this->m_votes = $value;
        return;
    }

    public function getActive()
    {
        return $this->m_active;
    }
    public function setActive($value)
    {
        $this->m_active = $value;
        return;
    }

    public function getPublishdate()
    {
        return $this->m_publishDate;
    }
    public function setPublishdate($value)
    {
        $this->m_publishDate = $value;
        return;
    }

    public function getVoteconsiderationspan()
    {
        return $this->m_voteConsiderationSpan;
    }
    public function setVoteconsiderationspan($value)
    {
        $this->m_voteConsiderationSpan = $value;
        return;
    }

    public function getOrigPollid()
    {
        return $this->m_pollId_Orig;
    }
    public function setOrigPollid($value)
    {
        if (isset($this->m_pollId_Orig)) { return; }
        $this->m_pollId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPollid($arrValues['pollId']);
        $this->setTitle($arrValues['title']);
        $this->setVotes($arrValues['votes']);
        $this->setActive($arrValues['active']);
        $this->setPublishdate($arrValues['publishDate']);
        $this->setVoteconsiderationspan($arrValues['voteConsiderationSpan']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'pollId':
                    $this->setPollid($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'votes':
                    $this->setVotes($val);
                    break;
                case 'active':
                    $this->setActive($val);
                    break;
                case 'publishDate':
                    $this->setPublishdate($val);
                    break;
                case 'voteConsiderationSpan':
                    $this->setVoteconsiderationspan($val);
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
        $arrValues['title'] = $this->getTitle();
        $arrValues['votes'] = $this->getVotes();
        $arrValues['active'] = $this->getActive();
        $arrValues['publishDate'] = $this->getPublishdate();
        $arrValues['voteConsiderationSpan'] = $this->getVoteconsiderationspan();
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
