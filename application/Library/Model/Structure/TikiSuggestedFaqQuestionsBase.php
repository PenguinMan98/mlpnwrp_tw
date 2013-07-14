<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSuggestedFaqQuestionsBase
{
    protected $m_sfqId;
    protected $m_faqId;
    protected $m_question;
    protected $m_answer;
    protected $m_created;
    protected $m_user;
    protected $m_sfqId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setFaqid(0);
            $this->setUser('');
        }
        return;
    }
    public function TikiSuggestedFaqQuestionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getSfqid()
    {
        return $this->m_sfqId;
    }
    public function setSfqid($value)
    {
        $this->m_sfqId = $value;
        $this->setOrigSfqid($value);
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

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        return;
    }

    public function getOrigSfqid()
    {
        return $this->m_sfqId_Orig;
    }
    public function setOrigSfqid($value)
    {
        if (isset($this->m_sfqId_Orig)) { return; }
        $this->m_sfqId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setSfqid($arrValues['sfqId']);
        $this->setFaqid($arrValues['faqId']);
        $this->setQuestion($arrValues['question']);
        $this->setAnswer($arrValues['answer']);
        $this->setCreated($arrValues['created']);
        $this->setUser($arrValues['user']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'sfqId':
                    $this->setSfqid($val);
                    break;
                case 'faqId':
                    $this->setFaqid($val);
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
                case 'user':
                    $this->setUser($val);
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
        $arrValues['sfqId'] = $this->getSfqid();
        $arrValues['faqId'] = $this->getFaqid();
        $arrValues['question'] = $this->getQuestion();
        $arrValues['answer'] = $this->getAnswer();
        $arrValues['created'] = $this->getCreated();
        $arrValues['user'] = $this->getUser();
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
