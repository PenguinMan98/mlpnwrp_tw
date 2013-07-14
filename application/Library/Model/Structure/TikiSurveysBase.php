<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSurveysBase
{
    protected $m_surveyId;
    protected $m_name;
    protected $m_description;
    protected $m_taken;
    protected $m_lastTaken;
    protected $m_created;
    protected $m_status;
    protected $m_surveyId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiSurveysBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getSurveyid()
    {
        return $this->m_surveyId;
    }
    public function setSurveyid($value)
    {
        $this->m_surveyId = $value;
        $this->setOrigSurveyid($value);
        return;
    }

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
        return;
    }

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getTaken()
    {
        return $this->m_taken;
    }
    public function setTaken($value)
    {
        $this->m_taken = $value;
        return;
    }

    public function getLasttaken()
    {
        return $this->m_lastTaken;
    }
    public function setLasttaken($value)
    {
        $this->m_lastTaken = $value;
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

    public function getStatus()
    {
        return $this->m_status;
    }
    public function setStatus($value)
    {
        $this->m_status = $value;
        return;
    }

    public function getOrigSurveyid()
    {
        return $this->m_surveyId_Orig;
    }
    public function setOrigSurveyid($value)
    {
        if (isset($this->m_surveyId_Orig)) { return; }
        $this->m_surveyId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setSurveyid($arrValues['surveyId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setTaken($arrValues['taken']);
        $this->setLasttaken($arrValues['lastTaken']);
        $this->setCreated($arrValues['created']);
        $this->setStatus($arrValues['status']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'surveyId':
                    $this->setSurveyid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'taken':
                    $this->setTaken($val);
                    break;
                case 'lastTaken':
                    $this->setLasttaken($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'status':
                    $this->setStatus($val);
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
        $arrValues['surveyId'] = $this->getSurveyid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['taken'] = $this->getTaken();
        $arrValues['lastTaken'] = $this->getLasttaken();
        $arrValues['created'] = $this->getCreated();
        $arrValues['status'] = $this->getStatus();
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
