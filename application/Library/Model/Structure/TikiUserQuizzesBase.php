<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserQuizzesBase
{
    protected $m_user;
    protected $m_quizId;
    protected $m_timestamp;
    protected $m_timeTaken;
    protected $m_points;
    protected $m_maxPoints;
    protected $m_resultId;
    protected $m_userResultId;
    protected $m_userResultId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
        }
        return;
    }
    public function TikiUserQuizzesBase($arrData = null)
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

    public function getTimestamp()
    {
        return $this->m_timestamp;
    }
    public function setTimestamp($value)
    {
        $this->m_timestamp = $value;
        return;
    }

    public function getTimetaken()
    {
        return $this->m_timeTaken;
    }
    public function setTimetaken($value)
    {
        $this->m_timeTaken = $value;
        return;
    }

    public function getPoints()
    {
        return $this->m_points;
    }
    public function setPoints($value)
    {
        $this->m_points = $value;
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

    public function getResultid()
    {
        return $this->m_resultId;
    }
    public function setResultid($value)
    {
        $this->m_resultId = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setUser($arrValues['user']);
        $this->setQuizid($arrValues['quizId']);
        $this->setTimestamp($arrValues['timestamp']);
        $this->setTimetaken($arrValues['timeTaken']);
        $this->setPoints($arrValues['points']);
        $this->setMaxpoints($arrValues['maxPoints']);
        $this->setResultid($arrValues['resultId']);
        $this->setUserresultid($arrValues['userResultId']);
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
                case 'timestamp':
                    $this->setTimestamp($val);
                    break;
                case 'timeTaken':
                    $this->setTimetaken($val);
                    break;
                case 'points':
                    $this->setPoints($val);
                    break;
                case 'maxPoints':
                    $this->setMaxpoints($val);
                    break;
                case 'resultId':
                    $this->setResultid($val);
                    break;
                case 'userResultId':
                    $this->setUserresultid($val);
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
        $arrValues['timestamp'] = $this->getTimestamp();
        $arrValues['timeTaken'] = $this->getTimetaken();
        $arrValues['points'] = $this->getPoints();
        $arrValues['maxPoints'] = $this->getMaxpoints();
        $arrValues['resultId'] = $this->getResultid();
        $arrValues['userResultId'] = $this->getUserresultid();
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
