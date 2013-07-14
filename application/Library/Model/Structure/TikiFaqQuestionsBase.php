<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiFaqQuestionsBase
{
    protected $m_questionId;
    protected $m_faqId;
    protected $m_position;
    protected $m_question;
    protected $m_answer;
    protected $m_created;
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
    public function TikiFaqQuestionsBase($arrData = null)
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

    public function getFaqid()
    {
        return $this->m_faqId;
    }
    public function setFaqid($value)
    {
        $this->m_faqId = $value;
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

    public function getQuestion()
    {
        return $this->m_question;
    }
    public function setQuestion($value)
    {
        $this->m_question = $value;
        return;
    }

    public function getAnswer()
    {
        return $this->m_answer;
    }
    public function setAnswer($value)
    {
        $this->m_answer = $value;
        return;
    }

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
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
        $this->setFaqid($arrValues['faqId']);
        $this->setPosition($arrValues['position']);
        $this->setQuestion($arrValues['question']);
        $this->setAnswer($arrValues['answer']);
        $this->setCreated($arrValues['created']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'questionId':
                    $this->setQuestionid($val);
                    break;
                case 'faqId':
                    $this->setFaqid($val);
                    break;
                case 'position':
                    $this->setPosition($val);
                    break;
                case 'question':
                    $this->setQuestion($val);
                    break;
                case 'answer':
                    $this->setAnswer($val);
                    break;
                case 'created':
                    $this->setCreated($val);
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
        $arrValues['faqId'] = $this->getFaqid();
        $arrValues['position'] = $this->getPosition();
        $arrValues['question'] = $this->getQuestion();
        $arrValues['answer'] = $this->getAnswer();
        $arrValues['created'] = $this->getCreated();
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
