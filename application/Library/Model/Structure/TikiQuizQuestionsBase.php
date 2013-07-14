<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiQuizQuestionsBase
{
    protected $m_questionId;
    protected $m_quizId;
    protected $m_question;
    protected $m_position;
    protected $m_type;
    protected $m_maxPoints;
    protected $m_questionId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiQuizQuestionsBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getQuizid()
    {
        return $this->m_quizId;
    }
    public function setQuizid($value)
    {
        $this->m_quizId = $value;
        return;
    }

    public function getQuestion()
    {
        return $this->m_question;
    }
    public function setQuestion($value)
    {
        $this->m_question = $value;
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

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        return;
    }

    public function getMaxpoints()
    {
        return $this->m_maxPoints;
    }
    public function setMaxpoints($value)
    {
        $this->m_maxPoints = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setQuestionid($arrValues['questionId']);
        $this->setQuizid($arrValues['quizId']);
        $this->setQuestion($arrValues['question']);
        $this->setPosition($arrValues['position']);
        $this->setType($arrValues['type']);
        $this->setMaxpoints($arrValues['maxPoints']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'questionId':
                    $this->setQuestionid($val);
                    break;
                case 'quizId':
                    $this->setQuizid($val);
                    break;
                case 'question':
                    $this->setQuestion($val);
                    break;
                case 'position':
                    $this->setPosition($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'maxPoints':
                    $this->setMaxpoints($val);
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
        $arrValues['questionId'] = $this->getQuestionid();
        $arrValues['quizId'] = $this->getQuizid();
        $arrValues['question'] = $this->getQuestion();
        $arrValues['position'] = $this->getPosition();
        $arrValues['type'] = $this->getType();
        $arrValues['maxPoints'] = $this->getMaxpoints();
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
