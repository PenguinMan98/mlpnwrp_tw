<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiLinksBase
{
    protected $m_fromPage;
    protected $m_toPage;
    protected $m_fromPage_Orig;
    protected $m_toPage_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiLinksBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getFrompage()
    {
        return $this->m_fromPage;
    }
    public function setFrompage($value)
    {
        $this->m_fromPage = $value;
        $this->setOrigFrompage($value);
        return;
    }

    public function getTopage()
    {
        return $this->m_toPage;
    }
    public function setTopage($value)
    {
        $this->m_toPage = $value;
        $this->setOrigTopage($value);
        return;
    }

    public function getOrigFrompage()
    {
        return $this->m_fromPage_Orig;
    }
    public function setOrigFrompage($value)
    {
        if (isset($this->m_fromPage_Orig)) { return; }
        $this->m_fromPage_Orig = $value;
        return;
    }

    public function getOrigTopage()
    {
        return $this->m_toPage_Orig;
    }
    public function setOrigTopage($value)
    {
        if (isset($this->m_toPage_Orig)) { return; }
        $this->m_toPage_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setFrompage($arrValues['fromPage']);
        $this->setTopage($arrValues['toPage']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'fromPage':
                    $this->setFrompage($val);
                    break;
                case 'toPage':
                    $this->setTopage($val);
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
        $arrValues['fromPage'] = $this->getFrompage();
        $arrValues['toPage'] = $this->getTopage();
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
