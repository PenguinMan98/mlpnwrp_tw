<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSearchStatsBase
{
    protected $m_term;
    protected $m_hits;
    protected $m_term_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiSearchStatsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTerm()
    {
        return $this->m_term;
    }
    public function setTerm($value)
    {
        $this->m_term = $value;
        $this->setOrigTerm($value);
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

    public function getOrigTerm()
    {
        return $this->m_term_Orig;
    }
    public function setOrigTerm($value)
    {
        if (isset($this->m_term_Orig)) { return; }
        $this->m_term_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTerm($arrValues['term']);
        $this->setHits($arrValues['hits']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'term':
                    $this->setTerm($val);
                    break;
                case 'hits':
                    $this->setHits($val);
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
        $arrValues['term'] = $this->getTerm();
        $arrValues['hits'] = $this->getHits();
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
