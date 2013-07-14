<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPerspectivesBase
{
    protected $m_perspectiveId;
    protected $m_name;
    protected $m_perspectiveId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiPerspectivesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPerspectiveid()
    {
        return $this->m_perspectiveId;
    }
    public function setPerspectiveid($value)
    {
        $this->m_perspectiveId = $value;
        $this->setOrigPerspectiveid($value);
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

    public function getOrigPerspectiveid()
    {
        return $this->m_perspectiveId_Orig;
    }
    public function setOrigPerspectiveid($value)
    {
        if (isset($this->m_perspectiveId_Orig)) { return; }
        $this->m_perspectiveId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPerspectiveid($arrValues['perspectiveId']);
        $this->setName($arrValues['name']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'perspectiveId':
                    $this->setPerspectiveid($val);
                    break;
                case 'name':
                    $this->setName($val);
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
        $arrValues['perspectiveId'] = $this->getPerspectiveid();
        $arrValues['name'] = $this->getName();
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
