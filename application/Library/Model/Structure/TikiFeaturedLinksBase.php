<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiFeaturedLinksBase
{
    protected $m_url;
    protected $m_title;
    protected $m_description;
    protected $m_hits;
    protected $m_position;
    protected $m_type;
    protected $m_url_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiFeaturedLinksBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUrl()
    {
        return $this->m_url;
    }
    public function setUrl($value)
    {
        $this->m_url = $value;
        $this->setOrigUrl($value);
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

    public function getHits()
    {
        return $this->m_hits;
    }
    public function setHits($value)
    {
        $this->m_hits = $value;
        return;
    }

    public function getPosition()
    {
        return $this->m_position;
    }
    public function setPosition($value)
    {
        $this->m_position = $value;
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        return;
    }

    public function getOrigUrl()
    {
        return $this->m_url_Orig;
    }
    public function setOrigUrl($value)
    {
        if (isset($this->m_url_Orig)) { return; }
        $this->m_url_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUrl($arrValues['url']);
        $this->setTitle($arrValues['title']);
        $this->setDescription($arrValues['description']);
        $this->setHits($arrValues['hits']);
        $this->setPosition($arrValues['position']);
        $this->setType($arrValues['type']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'url':
                    $this->setUrl($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'position':
                    $this->setPosition($val);
                    break;
                case 'type':
                    $this->setType($val);
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
        $arrValues['url'] = $this->getUrl();
        $arrValues['title'] = $this->getTitle();
        $arrValues['description'] = $this->getDescription();
        $arrValues['hits'] = $this->getHits();
        $arrValues['position'] = $this->getPosition();
        $arrValues['type'] = $this->getType();
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
