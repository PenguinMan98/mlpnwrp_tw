<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserModulesBase
{
    protected $m_name;
    protected $m_title;
    protected $m_data;
    protected $m_parse;
    protected $m_status;
    protected $m_name_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setStatus('');
        }
        return;
    }
    public function TikiUserModulesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
        $this->setOrigName($value);
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

    public function getData()
    {
        return $this->m_data;
    }
    public function setData($value)
    {
        $this->m_data = $value;
        return;
    }

    public function getParse()
    {
        return $this->m_parse;
    }
    public function setParse($value)
    {
        $this->m_parse = $value;
        return;
    }

    public function getStatus()
    {
        return $this->m_status;
    }
    public function setStatus($value)
    {
        $this->m_status = $value;
        return;
    }

    public function getOrigName()
    {
        return $this->m_name_Orig;
    }
    public function setOrigName($value)
    {
        if (isset($this->m_name_Orig)) { return; }
        $this->m_name_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setName($arrValues['name']);
        $this->setTitle($arrValues['title']);
        $this->setData($arrValues['data']);
        $this->setParse($arrValues['parse']);
        $this->setStatus($arrValues['status']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'name':
                    $this->setName($val);
                    break;
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'parse':
                    $this->setParse($val);
                    break;
                case 'status':
                    $this->setStatus($val);
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
        $arrValues['name'] = $this->getName();
        $arrValues['title'] = $this->getTitle();
        $arrValues['data'] = $this->getData();
        $arrValues['parse'] = $this->getParse();
        $arrValues['status'] = $this->getStatus();
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
