<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiQuizQuestionOptionsBase
{
    protected $m_optionId;
    protected $m_questionId;
    protected $m_optionText;
    protected $m_points;
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
    public function TikiQuizQuestionOptionsBase($arrData = null)
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

    public function getOptiontext()
    {
        return $this->m_optionText;
    }
    public function setOptiontext($value)
    {
        $this->m_optionText = $value;
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
        $this->setOptiontext($arrValues['optionText']);
        $this->setPoints($arrValues['points']);
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
                case 'optionText':
                    $this->setOptiontext($val);
                    break;
                case 'points':
                    $this->setPoints($val);
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
        $arrValues['optionText'] = $this->getOptiontext();
        $arrValues['points'] = $this->getPoints();
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
