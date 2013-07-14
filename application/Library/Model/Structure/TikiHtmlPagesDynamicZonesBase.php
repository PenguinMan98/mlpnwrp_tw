<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiHtmlPagesDynamicZonesBase
{
    protected $m_pageName;
    protected $m_zone;
    protected $m_type;
    protected $m_content;
    protected $m_pageName_Orig;
    protected $m_zone_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiHtmlPagesDynamicZonesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPagename()
    {
        return $this->m_pageName;
    }
    public function setPagename($value)
    {
        $this->m_pageName = $value;
        $this->setOrigPagename($value);
        return;
    }

    public function getZone()
    {
        return $this->m_zone;
    }
    public function setZone($value)
    {
        $this->m_zone = $value;
        $this->setOrigZone($value);
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

    public function getContent()
    {
        return $this->m_content;
    }
    public function setContent($value)
    {
        $this->m_content = $value;
        return;
    }

    public function getOrigPagename()
    {
        return $this->m_pageName_Orig;
    }
    public function setOrigPagename($value)
    {
        if (isset($this->m_pageName_Orig)) { return; }
        $this->m_pageName_Orig = $value;
        return;
    }

    public function getOrigZone()
    {
        return $this->m_zone_Orig;
    }
    public function setOrigZone($value)
    {
        if (isset($this->m_zone_Orig)) { return; }
        $this->m_zone_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPagename($arrValues['pageName']);
        $this->setZone($arrValues['zone']);
        $this->setType($arrValues['type']);
        $this->setContent($arrValues['content']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'pageName':
                    $this->setPagename($val);
                    break;
                case 'zone':
                    $this->setZone($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'content':
                    $this->setContent($val);
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
        $arrValues['pageName'] = $this->getPagename();
        $arrValues['zone'] = $this->getZone();
        $arrValues['type'] = $this->getType();
        $arrValues['content'] = $this->getContent();
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
