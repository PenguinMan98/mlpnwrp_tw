<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiContentBase
{
    protected $m_contentId;
    protected $m_description;
    protected $m_contentLabel;
    protected $m_contentId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setContentlabel('');
        }
        return;
    }
    public function TikiContentBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getContentid()
    {
        return $this->m_contentId;
    }
    public function setContentid($value)
    {
        $this->m_contentId = $value;
        $this->setOrigContentid($value);
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

    public function getContentlabel()
    {
        return $this->m_contentLabel;
    }
    public function setContentlabel($value)
    {
        $this->m_contentLabel = $value;
        return;
    }

    public function getOrigContentid()
    {
        return $this->m_contentId_Orig;
    }
    public function setOrigContentid($value)
    {
        if (isset($this->m_contentId_Orig)) { return; }
        $this->m_contentId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setContentid($arrValues['contentId']);
        $this->setDescription($arrValues['description']);
        $this->setContentlabel($arrValues['contentLabel']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'contentId':
                    $this->setContentid($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'contentLabel':
                    $this->setContentlabel($val);
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
        $arrValues['contentId'] = $this->getContentid();
        $arrValues['description'] = $this->getDescription();
        $arrValues['contentLabel'] = $this->getContentlabel();
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
