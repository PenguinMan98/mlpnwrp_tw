<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiExtwikiBase
{
    protected $m_extwikiId;
    protected $m_name;
    protected $m_extwiki;
    protected $m_extwikiId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setName('');
        }
        return;
    }
    public function TikiExtwikiBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getExtwikiid()
    {
        return $this->m_extwikiId;
    }
    public function setExtwikiid($value)
    {
        $this->m_extwikiId = $value;
        $this->setOrigExtwikiid($value);
        return;
    }

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
        return;
    }

    public function getExtwiki()
    {
        return $this->m_extwiki;
    }
    public function setExtwiki($value)
    {
        $this->m_extwiki = $value;
        return;
    }

    public function getOrigExtwikiid()
    {
        return $this->m_extwikiId_Orig;
    }
    public function setOrigExtwikiid($value)
    {
        if (isset($this->m_extwikiId_Orig)) { return; }
        $this->m_extwikiId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setExtwikiid($arrValues['extwikiId']);
        $this->setName($arrValues['name']);
        $this->setExtwiki($arrValues['extwiki']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'extwikiId':
                    $this->setExtwikiid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'extwiki':
                    $this->setExtwiki($val);
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
        $arrValues['extwikiId'] = $this->getExtwikiid();
        $arrValues['name'] = $this->getName();
        $arrValues['extwiki'] = $this->getExtwiki();
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
