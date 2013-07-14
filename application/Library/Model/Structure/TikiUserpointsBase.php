<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserpointsBase
{
    protected $m_user;
    protected $m_points;
    protected $m_voted;
    protected $m_user_Orig;
    protected $m_points_Orig;
    protected $m_voted_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiUserpointsBase($arrData = null)
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

    public function getPoints()
    {
        return $this->m_points;
    }
    public function setPoints($value)
    {
        $this->m_points = $value;
        $this->setOrigPoints($value);
        return;
    }

    public function getVoted()
    {
        return $this->m_voted;
    }
    public function setVoted($value)
    {
        $this->m_voted = $value;
        $this->setOrigVoted($value);
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

    public function getOrigPoints()
    {
        return $this->m_points_Orig;
    }
    public function setOrigPoints($value)
    {
        if (isset($this->m_points_Orig)) { return; }
        $this->m_points_Orig = $value;
        return;
    }

    public function getOrigVoted()
    {
        return $this->m_voted_Orig;
    }
    public function setOrigVoted($value)
    {
        if (isset($this->m_voted_Orig)) { return; }
        $this->m_voted_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUser($arrValues['user']);
        $this->setPoints($arrValues['points']);
        $this->setVoted($arrValues['voted']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'points':
                    $this->setPoints($val);
                    break;
                case 'voted':
                    $this->setVoted($val);
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
        $arrValues['points'] = $this->getPoints();
        $arrValues['voted'] = $this->getVoted();
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
