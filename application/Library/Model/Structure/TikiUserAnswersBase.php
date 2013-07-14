<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserAnswersBase
{
    protected $m_userResultId;
    protected $m_quizId;
    protected $m_questionId;
    protected $m_optionId;
    protected $m_userResultId_Orig;
    protected $m_quizId_Orig;
    protected $m_questionId_Orig;
    protected $m_optionId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiUserAnswersBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUserresultid()
    {
        return $this->m_userResultId;
    }
    public function setUserresultid($value)
    {
        $this->m_userResultId = $value;
        $this->setOrigUserresultid($value);
        return;
    }

    public function getQuizid()
    {
        return $this->m_quizId;
    }
    public function setQuizid($value)
    {
        $this->m_quizId = $value;
        $this->setOrigQuizid($value);
        return;
    }

    public function getQuestionid()
    {
        return $this->m_questionId;
    }
    public function setQuestionid($value)
    {
        $this->m_questionId = $value;
        $this->setOrigQuestionid($value);
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

    public function getOrigUserresultid()
    {
        return $this->m_userResultId_Orig;
    }
    public function setOrigUserresultid($value)
    {
        if (isset($this->m_userResultId_Orig)) { return; }
        $this->m_userResultId_Orig = $value;
        return;
    }

    public function getOrigQuizid()
    {
        return $this->m_quizId_Orig;
    }
    public function setOrigQuizid($value)
    {
        if (isset($this->m_quizId_Orig)) { return; }
        $this->m_quizId_Orig = $value;
        return;
    }

    public function getOrigQuestionid()
    {
        return $this->m_questionId_Orig;
    }
    public function setOrigQuestionid($value)
    {
        if (isset($this->m_questionId_Orig)) { return; }
        $this->m_questionId_Orig = $value;
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
        $this->setUserresultid($arrValues['userResultId']);
        $this->setQuizid($arrValues['quizId']);
        $this->setQuestionid($arrValues['questionId']);
        $this->setOptionid($arrValues['optionId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'userResultId':
                    $this->setUserresultid($val);
                    break;
                case 'quizId':
                    $this->setQuizid($val);
                    break;
                case 'questionId':
                    $this->setQuestionid($val);
                    break;
                case 'optionId':
                    $this->setOptionid($val);
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
        $arrValues['userResultId'] = $this->getUserresultid();
        $arrValues['quizId'] = $this->getQuizid();
        $arrValues['questionId'] = $this->getQuestionid();
        $arrValues['optionId'] = $this->getOptionid();
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
