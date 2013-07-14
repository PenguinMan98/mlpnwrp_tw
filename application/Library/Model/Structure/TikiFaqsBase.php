<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiFaqsBase
{
    protected $m_faqId;
    protected $m_title;
    protected $m_description;
    protected $m_created;
    protected $m_questions;
    protected $m_hits;
    protected $m_canSuggest;
    protected $m_faqId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiFaqsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getFaqid()
    {
        return $this->m_faqId;
    }
    public function setFaqid($value)
    {
        $this->m_faqId = $value;
        $this->setOrigFaqid($value);
        return;
    }

    public function getTitle()
    {
        return $this->m_title;
    }
    public function setTitle($value)
    {
        $this->m_title = $value;
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

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
        return;
    }

    public function getQuestions()
    {
        return $this->m_questions;
    }
    public function setQuestions($value)
    {
        $this->m_questions = $value;
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

    public function getCansuggest()
    {
        return $this->m_canSuggest;
    }
    public function setCansuggest($value)
    {
        $this->m_canSuggest = $value;
        return;
    }

    public function getOrigFaqid()
    {
        return $this->m_faqId_Orig;
    }
    public function setOrigFaqid($value)
    {
        if (isset($this->m_faqId_Orig)) { return; }
        $this->m_faqId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setFaqid($arrValues['faqId']);
        $this->setTitle($arrValues['title']);
        $this->setDescription($arrValues['description']);
        $this->setCreated($arrValues['created']);
        $this->setQuestions($arrValues['questions']);
        $this->setHits($arrValues['hits']);
        $this->setCansuggest($arrValues['canSuggest']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'faqId':
                    $this->setFaqid($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'questions':
                    $this->setQuestions($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'canSuggest':
                    $this->setCansuggest($val);
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
        $arrValues['faqId'] = $this->getFaqid();
        $arrValues['title'] = $this->getTitle();
        $arrValues['description'] = $this->getDescription();
        $arrValues['created'] = $this->getCreated();
        $arrValues['questions'] = $this->getQuestions();
        $arrValues['hits'] = $this->getHits();
        $arrValues['canSuggest'] = $this->getCansuggest();
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
