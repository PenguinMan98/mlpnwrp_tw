<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiBanningSectionsBase
{
    protected $m_banId;
    protected $m_section;
    protected $m_banId_Orig;
    protected $m_section_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiBanningSectionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getBanid()
    {
        return $this->m_banId;
    }
    public function setBanid($value)
    {
        $this->m_banId = $value;
        $this->setOrigBanid($value);
        return;
    }

    public function getSection()
    {
        return $this->m_section;
    }
    public function setSection($value)
    {
        $this->m_section = $value;
        $this->setOrigSection($value);
        return;
    }

    public function getOrigBanid()
    {
        return $this->m_banId_Orig;
    }
    public function setOrigBanid($value)
    {
        if (isset($this->m_banId_Orig)) { return; }
        $this->m_banId_Orig = $value;
        return;
    }

    public function getOrigSection()
    {
        return $this->m_section_Orig;
    }
    public function setOrigSection($value)
    {
        if (isset($this->m_section_Orig)) { return; }
        $this->m_section_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setBanid($arrValues['banId']);
        $this->setSection($arrValues['section']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'banId':
                    $this->setBanid($val);
                    break;
                case 'section':
                    $this->setSection($val);
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
        $arrValues['banId'] = $this->getBanid();
        $arrValues['section'] = $this->getSection();
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
