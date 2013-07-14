<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiStructureVersionsBase
{
    protected $m_structure_id;
    protected $m_version;
    protected $m_structure_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiStructureVersionsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getStructureId()
    {
        return $this->m_structure_id;
    }
    public function setStructureId($value)
    {
        $this->m_structure_id = $value;
        $this->setOrigStructureId($value);
        return;
    }

    public function getVersion()
    {
        return $this->m_version;
    }
    public function setVersion($value)
    {
        $this->m_version = $value;
        return;
    }

    public function getOrigStructureId()
    {
        return $this->m_structure_id_Orig;
    }
    public function setOrigStructureId($value)
    {
        if (isset($this->m_structure_id_Orig)) { return; }
        $this->m_structure_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setStructureId($arrValues['structure_id']);
        $this->setVersion($arrValues['version']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'structure_id':
                    $this->setStructureId($val);
                    break;
                case 'version':
                    $this->setVersion($val);
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
        $arrValues['structure_id'] = $this->getStructureId();
        $arrValues['version'] = $this->getVersion();
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
