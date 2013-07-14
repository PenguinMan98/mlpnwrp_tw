<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiFileBacklinksBase
{
    protected $m_fileId;
    protected $m_objectId;
    protected $m_fileId_Orig;
    protected $m_objectId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiFileBacklinksBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getFileid()
    {
        return $this->m_fileId;
    }
    public function setFileid($value)
    {
        $this->m_fileId = $value;
        $this->setOrigFileid($value);
        return;
    }

    public function getObjectid()
    {
        return $this->m_objectId;
    }
    public function setObjectid($value)
    {
        $this->m_objectId = $value;
        $this->setOrigObjectid($value);
        return;
    }

    public function getOrigFileid()
    {
        return $this->m_fileId_Orig;
    }
    public function setOrigFileid($value)
    {
        if (isset($this->m_fileId_Orig)) { return; }
        $this->m_fileId_Orig = $value;
        return;
    }

    public function getOrigObjectid()
    {
        return $this->m_objectId_Orig;
    }
    public function setOrigObjectid($value)
    {
        if (isset($this->m_objectId_Orig)) { return; }
        $this->m_objectId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setFileid($arrValues['fileId']);
        $this->setObjectid($arrValues['objectId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'fileId':
                    $this->setFileid($val);
                    break;
                case 'objectId':
                    $this->setObjectid($val);
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
        $arrValues['fileId'] = $this->getFileid();
        $arrValues['objectId'] = $this->getObjectid();
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
