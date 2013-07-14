<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiObjectRelationsBase
{
    protected $m_relationId;
    protected $m_relation;
    protected $m_source_type;
    protected $m_source_itemId;
    protected $m_target_type;
    protected $m_target_itemId;
    protected $m_relationId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiObjectRelationsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getRelationid()
    {
        return $this->m_relationId;
    }
    public function setRelationid($value)
    {
        $this->m_relationId = $value;
        $this->setOrigRelationid($value);
        return;
    }

    public function getRelation()
    {
        return $this->m_relation;
    }
    public function setRelation($value)
    {
        $this->m_relation = $value;
        return;
    }

    public function getSourceType()
    {
        return $this->m_source_type;
    }
    public function setSourceType($value)
    {
        $this->m_source_type = $value;
        return;
    }

    public function getSourceItemid()
    {
        return $this->m_source_itemId;
    }
    public function setSourceItemid($value)
    {
        $this->m_source_itemId = $value;
        return;
    }

    public function getTargetType()
    {
        return $this->m_target_type;
    }
    public function setTargetType($value)
    {
        $this->m_target_type = $value;
        return;
    }

    public function getTargetItemid()
    {
        return $this->m_target_itemId;
    }
    public function setTargetItemid($value)
    {
        $this->m_target_itemId = $value;
        return;
    }

    public function getOrigRelationid()
    {
        return $this->m_relationId_Orig;
    }
    public function setOrigRelationid($value)
    {
        if (isset($this->m_relationId_Orig)) { return; }
        $this->m_relationId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setRelationid($arrValues['relationId']);
        $this->setRelation($arrValues['relation']);
        $this->setSourceType($arrValues['source_type']);
        $this->setSourceItemid($arrValues['source_itemId']);
        $this->setTargetType($arrValues['target_type']);
        $this->setTargetItemid($arrValues['target_itemId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'relationId':
                    $this->setRelationid($val);
                    break;
                case 'relation':
                    $this->setRelation($val);
                    break;
                case 'source_type':
                    $this->setSourceType($val);
                    break;
                case 'source_itemId':
                    $this->setSourceItemid($val);
                    break;
                case 'target_type':
                    $this->setTargetType($val);
                    break;
                case 'target_itemId':
                    $this->setTargetItemid($val);
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
        $arrValues['relationId'] = $this->getRelationid();
        $arrValues['relation'] = $this->getRelation();
        $arrValues['source_type'] = $this->getSourceType();
        $arrValues['source_itemId'] = $this->getSourceItemid();
        $arrValues['target_type'] = $this->getTargetType();
        $arrValues['target_itemId'] = $this->getTargetItemid();
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
