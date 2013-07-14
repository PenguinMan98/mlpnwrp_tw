<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPageFootnotesBase
{
    protected $m_user;
    protected $m_pageName;
    protected $m_data;
    protected $m_user_Orig;
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
    public function TikiPageFootnotesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        $this->setOrigUser($value);
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

    public function getData()
    {
        return $this->m_data;
    }
    public function setData($value)
    {
        $this->m_data = $value;
        return;
    }

    public function getOrigUser()
    {
        return $this->m_user_Orig;
    }
    public function setOrigUser($value)
    {
        if (isset($this->m_user_Orig)) { return; }
        $this->m_user_Orig = $value;
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
        $this->setUser($arrValues['user']);
        $this->setPagename($arrValues['pageName']);
        $this->setData($arrValues['data']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'pageName':
                    $this->setPagename($val);
                    break;
                case 'data':
                    $this->setData($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['pageName'] = $this->getPagename();
        $arrValues['data'] = $this->getData();
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
