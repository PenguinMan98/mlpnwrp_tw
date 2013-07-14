<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiRefererStatsBase
{
    protected $m_referer;
    protected $m_hits;
    protected $m_last;
    protected $m_lasturl;
    protected $m_referer_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiRefererStatsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getReferer()
    {
        return $this->m_referer;
    }
    public function setReferer($value)
    {
        $this->m_referer = $value;
        $this->setOrigReferer($value);
        return;
    }

    public function getHits()
    {
        return $this->m_hits;
    }
    public function setHits($value)
    {
        $this->m_hits = $value;
        return;
    }

    public function getLast()
    {
        return $this->m_last;
    }
    public function setLast($value)
    {
        $this->m_last = $value;
        return;
    }

    public function getLasturl()
    {
        return $this->m_lasturl;
    }
    public function setLasturl($value)
    {
        $this->m_lasturl = $value;
        return;
    }

    public function getOrigReferer()
    {
        return $this->m_referer_Orig;
    }
    public function setOrigReferer($value)
    {
        if (isset($this->m_referer_Orig)) { return; }
        $this->m_referer_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setReferer($arrValues['referer']);
        $this->setHits($arrValues['hits']);
        $this->setLast($arrValues['last']);
        $this->setLasturl($arrValues['lasturl']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'referer':
                    $this->setReferer($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'last':
                    $this->setLast($val);
                    break;
                case 'lasturl':
                    $this->setLasturl($val);
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
        $arrValues['referer'] = $this->getReferer();
        $arrValues['hits'] = $this->getHits();
        $arrValues['last'] = $this->getLast();
        $arrValues['lasturl'] = $this->getLasturl();
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
