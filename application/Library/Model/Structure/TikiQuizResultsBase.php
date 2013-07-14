<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiQuizResultsBase
{
    protected $m_resultId;
    protected $m_quizId;
    protected $m_fromPoints;
    protected $m_toPoints;
    protected $m_answer;
    protected $m_resultId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiQuizResultsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getResultid()
    {
        return $this->m_resultId;
    }
    public function setResultid($value)
    {
        $this->m_resultId = $value;
        $this->setOrigResultid($value);
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

    public function getFrompoints()
    {
        return $this->m_fromPoints;
    }
    public function setFrompoints($value)
    {
        $this->m_fromPoints = $value;
        return;
    }

    public function getTopoints()
    {
        return $this->m_toPoints;
    }
    public function setTopoints($value)
    {
        $this->m_toPoints = $value;
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

    public function getOrigResultid()
    {
        return $this->m_resultId_Orig;
    }
    public function setOrigResultid($value)
    {
        if (isset($this->m_resultId_Orig)) { return; }
        $this->m_resultId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setResultid($arrValues['resultId']);
        $this->setQuizid($arrValues['quizId']);
        $this->setFrompoints($arrValues['fromPoints']);
        $this->setTopoints($arrValues['toPoints']);
        $this->setAnswer($arrValues['answer']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'resultId':
                    $this->setResultid($val);
                    break;
                case 'quizId':
                    $this->setQuizid($val);
                    break;
                case 'fromPoints':
                    $this->setFrompoints($val);
                    break;
                case 'toPoints':
                    $this->setTopoints($val);
                    break;
                case 'answer':
                    $this->setAnswer($val);
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
        $arrValues['resultId'] = $this->getResultid();
        $arrValues['quizId'] = $this->getQuizid();
        $arrValues['fromPoints'] = $this->getFrompoints();
        $arrValues['toPoints'] = $this->getTopoints();
        $arrValues['answer'] = $this->getAnswer();
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
