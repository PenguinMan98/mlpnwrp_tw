<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSentNewslettersFilesBase
{
    protected $m_id;
    protected $m_editionId;
    protected $m_name;
    protected $m_type;
    protected $m_size;
    protected $m_filename;
    protected $m_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiSentNewslettersFilesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getId()
    {
        return $this->m_id;
    }
    public function setId($value)
    {
        $this->m_id = $value;
        $this->setOrigId($value);
        return;
    }

    public function getEditionid()
    {
        return $this->m_editionId;
    }
    public function setEditionid($value)
    {
        $this->m_editionId = $value;
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

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        return;
    }

    public function getSize()
    {
        return $this->m_size;
    }
    public function setSize($value)
    {
        $this->m_size = $value;
        return;
    }

    public function getFilename()
    {
        return $this->m_filename;
    }
    public function setFilename($value)
    {
        $this->m_filename = $value;
        return;
    }

    public function getOrigId()
    {
        return $this->m_id_Orig;
    }
    public function setOrigId($value)
    {
        if (isset($this->m_id_Orig)) { return; }
        $this->m_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setId($arrValues['id']);
        $this->setEditionid($arrValues['editionId']);
        $this->setName($arrValues['name']);
        $this->setType($arrValues['type']);
        $this->setSize($arrValues['size']);
        $this->setFilename($arrValues['filename']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'id':
                    $this->setId($val);
                    break;
                case 'editionId':
                    $this->setEditionid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'size':
                    $this->setSize($val);
                    break;
                case 'filename':
                    $this->setFilename($val);
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
        $arrValues['id'] = $this->getId();
        $arrValues['editionId'] = $this->getEditionid();
        $arrValues['name'] = $this->getName();
        $arrValues['type'] = $this->getType();
        $arrValues['size'] = $this->getSize();
        $arrValues['filename'] = $this->getFilename();
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
