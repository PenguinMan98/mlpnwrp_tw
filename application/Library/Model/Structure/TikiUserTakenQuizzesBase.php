<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserTakenQuizzesBase
{
    protected $m_user;
    protected $m_quizId;
    protected $m_user_Orig;
    protected $m_quizId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiUserTakenQuizzesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        $this->setOrigUser($value);
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

    public function getOrigUser()
    {
        return $this->m_user_Orig;
    }
    public function setOrigUser($value)
    {
        if (isset($this->m_user_Orig)) { return; }
        $this->m_user_Orig = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setUser($arrValues['user']);
        $this->setQuizid($arrValues['quizId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'quizId':
                    $this->setQuizid($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['quizId'] = $this->getQuizid();
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
