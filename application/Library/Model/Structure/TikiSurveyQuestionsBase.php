<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSurveyQuestionsBase
{
    protected $m_questionId;
    protected $m_surveyId;
    protected $m_question;
    protected $m_options;
    protected $m_type;
    protected $m_position;
    protected $m_votes;
    protected $m_value;
    protected $m_average;
    protected $m_mandatory;
    protected $m_max_answers;
    protected $m_min_answers;
    protected $m_questionId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setSurveyid(0);
            $this->setMandatory('n');
            $this->setMaxAnswers(0);
            $this->setMinAnswers(0);
        }
        return;
    }
    public function TikiSurveyQuestionsBase($arrData = null)
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

    public function getSurveyid()
    {
        return $this->m_surveyId;
    }
    public function setSurveyid($value)
    {
        $this->m_surveyId = $value;
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

    public function getOptions()
    {
        return $this->m_options;
    }
    public function setOptions($value)
    {
        $this->m_options = $value;
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

    public function getValue()
    {
        return $this->m_value;
    }
    public function setValue($value)
    {
        $this->m_value = $value;
        return;
    }

    public function getAverage()
    {
        return $this->m_average;
    }
    public function setAverage($value)
    {
        $this->m_average = $value;
        return;
    }

    public function getMandatory()
    {
        return $this->m_mandatory;
    }
    public function setMandatory($value)
    {
        $this->m_mandatory = $value;
        return;
    }

    public function getMaxAnswers()
    {
        return $this->m_max_answers;
    }
    public function setMaxAnswers($value)
    {
        $this->m_max_answers = $value;
        return;
    }

    public function getMinAnswers()
    {
        return $this->m_min_answers;
    }
    public function setMinAnswers($value)
    {
        $this->m_min_answers = $value;
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
        $this->setSurveyid($arrValues['surveyId']);
        $this->setQuestion($arrValues['question']);
        $this->setOptions($arrValues['options']);
        $this->setType($arrValues['type']);
        $this->setPosition($arrValues['position']);
        $this->setVotes($arrValues['votes']);
        $this->setValue($arrValues['value']);
        $this->setAverage($arrValues['average']);
        $this->setMandatory($arrValues['mandatory']);
        $this->setMaxAnswers($arrValues['max_answers']);
        $this->setMinAnswers($arrValues['min_answers']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'questionId':
                    $this->setQuestionid($val);
                    break;
                case 'surveyId':
                    $this->setSurveyid($val);
                    break;
                case 'question':
                    $this->setQuestion($val);
                    break;
                case 'options':
                    $this->setOptions($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'position':
                    $this->setPosition($val);
                    break;
                case 'votes':
                    $this->setVotes($val);
                    break;
                case 'value':
                    $this->setValue($val);
                    break;
                case 'average':
                    $this->setAverage($val);
                    break;
                case 'mandatory':
                    $this->setMandatory($val);
                    break;
                case 'max_answers':
                    $this->setMaxAnswers($val);
                    break;
                case 'min_answers':
                    $this->setMinAnswers($val);
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
        $arrValues['surveyId'] = $this->getSurveyid();
        $arrValues['question'] = $this->getQuestion();
        $arrValues['options'] = $this->getOptions();
        $arrValues['type'] = $this->getType();
        $arrValues['position'] = $this->getPosition();
        $arrValues['votes'] = $this->getVotes();
        $arrValues['value'] = $this->getValue();
        $arrValues['average'] = $this->getAverage();
        $arrValues['mandatory'] = $this->getMandatory();
        $arrValues['max_answers'] = $this->getMaxAnswers();
        $arrValues['min_answers'] = $this->getMinAnswers();
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
