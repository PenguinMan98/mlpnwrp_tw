<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSurveyQuestionOptionsBase
{
    protected $m_optionId;
    protected $m_questionId;
    protected $m_qoption;
    protected $m_votes;
    protected $m_optionId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setQuestionid(0);
        }
        return;
    }
    public function TikiSurveyQuestionOptionsBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getQuestionid()
    {
        return $this->m_questionId;
    }
    public function setQuestionid($value)
    {
        $this->m_questionId = $value;
        return;
    }

    public function getQoption()
    {
        return $this->m_qoption;
    }
    public function setQoption($value)
    {
        $this->m_qoption = $value;
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
        $this->setOptionid($arrValues['optionId']);
        $this->setQuestionid($arrValues['questionId']);
        $this->setQoption($arrValues['qoption']);
        $this->setVotes($arrValues['votes']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'optionId':
                    $this->setOptionid($val);
                    break;
                case 'questionId':
                    $this->setQuestionid($val);
                    break;
                case 'qoption':
                    $this->setQoption($val);
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
        $arrValues['optionId'] = $this->getOptionid();
        $arrValues['questionId'] = $this->getQuestionid();
        $arrValues['qoption'] = $this->getQoption();
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
