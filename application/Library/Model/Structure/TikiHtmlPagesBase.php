<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiHtmlPagesBase
{
    protected $m_pageName;
    protected $m_content;
    protected $m_refresh;
    protected $m_type;
    protected $m_created;
    protected $m_pageName_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiHtmlPagesBase($arrData = null)
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

    public function getContent()
    {
        return $this->m_content;
    }
    public function setContent($value)
    {
        $this->m_content = $value;
        return;
    }

    public function getRefresh()
    {
        return $this->m_refresh;
    }
    public function setRefresh($value)
    {
        $this->m_refresh = $value;
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

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setPagename($arrValues['pageName']);
        $this->setContent($arrValues['content']);
        $this->setRefresh($arrValues['refresh']);
        $this->setType($arrValues['type']);
        $this->setCreated($arrValues['created']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'pageName':
                    $this->setPagename($val);
                    break;
                case 'content':
                    $this->setContent($val);
                    break;
                case 'refresh':
                    $this->setRefresh($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'created':
                    $this->setCreated($val);
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
        $arrValues['content'] = $this->getContent();
        $arrValues['refresh'] = $this->getRefresh();
        $arrValues['type'] = $this->getType();
        $arrValues['created'] = $this->getCreated();
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
