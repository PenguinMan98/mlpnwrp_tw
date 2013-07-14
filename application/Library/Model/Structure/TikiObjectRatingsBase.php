<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiObjectRatingsBase
{
    protected $m_catObjectId;
    protected $m_pollId;
    protected $m_catObjectId_Orig;
    protected $m_pollId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiObjectRatingsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCatobjectid()
    {
        return $this->m_catObjectId;
    }
    public function setCatobjectid($value)
    {
        $this->m_catObjectId = $value;
        $this->setOrigCatobjectid($value);
        return;
    }

    public function getPollid()
    {
        return $this->m_pollId;
    }
    public function setPollid($value)
    {
        $this->m_pollId = $value;
        $this->setOrigPollid($value);
        return;
    }

    public function getOrigCatobjectid()
    {
        return $this->m_catObjectId_Orig;
    }
    public function setOrigCatobjectid($value)
    {
        if (isset($this->m_catObjectId_Orig)) { return; }
        $this->m_catObjectId_Orig = $value;
        return;
    }

    public function getOrigPollid()
    {
        return $this->m_pollId_Orig;
    }
    public function setOrigPollid($value)
    {
        if (isset($this->m_pollId_Orig)) { return; }
        $this->m_pollId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCatobjectid($arrValues['catObjectId']);
        $this->setPollid($arrValues['pollId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'catObjectId':
                    $this->setCatobjectid($val);
                    break;
                case 'pollId':
                    $this->setPollid($val);
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
        $arrValues['catObjectId'] = $this->getCatobjectid();
        $arrValues['pollId'] = $this->getPollid();
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
