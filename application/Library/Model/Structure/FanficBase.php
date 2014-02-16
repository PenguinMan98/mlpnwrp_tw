<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_FanficBase
{
    protected $m_fanfic_id;
    protected $m_title;
    protected $m_text;
    protected $m_fanfic_type_id;
    protected $m_setting;
    protected $m_ic;
    protected $m_fanfic_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function FanficBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getFanficId()
    {
        return $this->m_fanfic_id;
    }
    public function setFanficId($value)
    {
        $this->m_fanfic_id = $value;
        $this->setOrigFanficId($value);
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

    public function getText()
    {
        return $this->m_text;
    }
    public function setText($value)
    {
        $this->m_text = $value;
        return;
    }

    public function getFanficTypeId()
    {
        return $this->m_fanfic_type_id;
    }
    public function setFanficTypeId($value)
    {
        $this->m_fanfic_type_id = $value;
        return;
    }

    public function getSetting()
    {
        return $this->m_setting;
    }
    public function setSetting($value)
    {
        $this->m_setting = $value;
        return;
    }

    public function getIc()
    {
        return $this->m_ic;
    }
    public function setIc($value)
    {
        $this->m_ic = $value;
        return;
    }

    public function getOrigFanficId()
    {
        return $this->m_fanfic_id_Orig;
    }
    public function setOrigFanficId($value)
    {
        if (isset($this->m_fanfic_id_Orig)) { return; }
        $this->m_fanfic_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setFanficId($arrValues['fanfic_id']);
        $this->setTitle($arrValues['title']);
        $this->setText($arrValues['text']);
        $this->setFanficTypeId($arrValues['fanfic_type_id']);
        $this->setSetting($arrValues['setting']);
        $this->setIc($arrValues['ic']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'fanfic_id':
                    $this->setFanficId($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'text':
                    $this->setText($val);
                    break;
                case 'fanfic_type_id':
                    $this->setFanficTypeId($val);
                    break;
                case 'setting':
                    $this->setSetting($val);
                    break;
                case 'ic':
                    $this->setIc($val);
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
        $arrValues['fanfic_id'] = $this->getFanficId();
        $arrValues['title'] = $this->getTitle();
        $arrValues['text'] = $this->getText();
        $arrValues['fanfic_type_id'] = $this->getFanficTypeId();
        $arrValues['setting'] = $this->getSetting();
        $arrValues['ic'] = $this->getIc();
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
