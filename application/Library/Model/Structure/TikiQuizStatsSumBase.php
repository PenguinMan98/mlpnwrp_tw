<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiQuizStatsSumBase
{
    protected $m_quizId;
    protected $m_quizName;
    protected $m_timesTaken;
    protected $m_avgpoints;
    protected $m_avgavg;
    protected $m_avgtime;
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
    public function TikiQuizStatsSumBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getQuizname()
    {
        return $this->m_quizName;
    }
    public function setQuizname($value)
    {
        $this->m_quizName = $value;
        return;
    }

    public function getTimestaken()
    {
        return $this->m_timesTaken;
    }
    public function setTimestaken($value)
    {
        $this->m_timesTaken = $value;
        return;
    }

    public function getAvgpoints()
    {
        return $this->m_avgpoints;
    }
    public function setAvgpoints($value)
    {
        $this->m_avgpoints = $value;
        return;
    }

    public function getAvgavg()
    {
        return $this->m_avgavg;
    }
    public function setAvgavg($value)
    {
        $this->m_avgavg = $value;
        return;
    }

    public function getAvgtime()
    {
        return $this->m_avgtime;
    }
    public function setAvgtime($value)
    {
        $this->m_avgtime = $value;
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
        $this->setQuizid($arrValues['quizId']);
        $this->setQuizname($arrValues['quizName']);
        $this->setTimestaken($arrValues['timesTaken']);
        $this->setAvgpoints($arrValues['avgpoints']);
        $this->setAvgavg($arrValues['avgavg']);
        $this->setAvgtime($arrValues['avgtime']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'quizId':
                    $this->setQuizid($val);
                    break;
                case 'quizName':
                    $this->setQuizname($val);
                    break;
                case 'timesTaken':
                    $this->setTimestaken($val);
                    break;
                case 'avgpoints':
                    $this->setAvgpoints($val);
                    break;
                case 'avgavg':
                    $this->setAvgavg($val);
                    break;
                case 'avgtime':
                    $this->setAvgtime($val);
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
        $arrValues['quizId'] = $this->getQuizid();
        $arrValues['quizName'] = $this->getQuizname();
        $arrValues['timesTaken'] = $this->getTimestaken();
        $arrValues['avgpoints'] = $this->getAvgpoints();
        $arrValues['avgavg'] = $this->getAvgavg();
        $arrValues['avgtime'] = $this->getAvgtime();
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
