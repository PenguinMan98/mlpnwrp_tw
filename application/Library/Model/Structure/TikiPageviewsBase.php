<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPageviewsBase
{
    protected $m_day;
    protected $m_pageviews;
    protected $m_day_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiPageviewsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getDay()
    {
        return $this->m_day;
    }
    public function setDay($value)
    {
        $this->m_day = $value;
        $this->setOrigDay($value);
        return;
    }

    public function getPageviews()
    {
        return $this->m_pageviews;
    }
    public function setPageviews($value)
    {
        $this->m_pageviews = $value;
        return;
    }

    public function getOrigDay()
    {
        return $this->m_day_Orig;
    }
    public function setOrigDay($value)
    {
        if (isset($this->m_day_Orig)) { return; }
        $this->m_day_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setDay($arrValues['day']);
        $this->setPageviews($arrValues['pageviews']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'day':
                    $this->setDay($val);
                    break;
                case 'pageviews':
                    $this->setPageviews($val);
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
        $arrValues['day'] = $this->getDay();
        $arrValues['pageviews'] = $this->getPageviews();
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
