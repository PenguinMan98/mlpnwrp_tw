<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiDsnBase
{
    protected $m_dsnId;
    protected $m_name;
    protected $m_dsn;
    protected $m_dsnId_Orig;

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
    public function TikiDsnBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getDsnid()
    {
        return $this->m_dsnId;
    }
    public function setDsnid($value)
    {
        $this->m_dsnId = $value;
        $this->setOrigDsnid($value);
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

    public function getDsn()
    {
        return $this->m_dsn;
    }
    public function setDsn($value)
    {
        $this->m_dsn = $value;
        return;
    }

    public function getOrigDsnid()
    {
        return $this->m_dsnId_Orig;
    }
    public function setOrigDsnid($value)
    {
        if (isset($this->m_dsnId_Orig)) { return; }
        $this->m_dsnId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setDsnid($arrValues['dsnId']);
        $this->setName($arrValues['name']);
        $this->setDsn($arrValues['dsn']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'dsnId':
                    $this->setDsnid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'dsn':
                    $this->setDsn($val);
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
        $arrValues['dsnId'] = $this->getDsnid();
        $arrValues['name'] = $this->getName();
        $arrValues['dsn'] = $this->getDsn();
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
