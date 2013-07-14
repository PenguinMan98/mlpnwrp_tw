<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiThemeControlSectionsBase
{
    protected $m_section;
    protected $m_theme;
    protected $m_section_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTheme('');
        }
        return;
    }
    public function TikiThemeControlSectionsBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getTheme()
    {
        return $this->m_theme;
    }
    public function setTheme($value)
    {
        $this->m_theme = $value;
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
        $this->setSection($arrValues['section']);
        $this->setTheme($arrValues['theme']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'section':
                    $this->setSection($val);
                    break;
                case 'theme':
                    $this->setTheme($val);
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
        $arrValues['section'] = $this->getSection();
        $arrValues['theme'] = $this->getTheme();
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
