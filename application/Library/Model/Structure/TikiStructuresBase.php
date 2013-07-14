<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiStructuresBase
{
    protected $m_page_ref_id;
    protected $m_structure_id;
    protected $m_parent_id;
    protected $m_page_id;
    protected $m_page_version;
    protected $m_page_alias;
    protected $m_pos;
    protected $m_page_ref_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setPageAlias('');
        }
        return;
    }
    public function TikiStructuresBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPageRefId()
    {
        return $this->m_page_ref_id;
    }
    public function setPageRefId($value)
    {
        $this->m_page_ref_id = $value;
        $this->setOrigPageRefId($value);
        return;
    }

    public function getStructureId()
    {
        return $this->m_structure_id;
    }
    public function setStructureId($value)
    {
        $this->m_structure_id = $value;
        return;
    }

    public function getParentId()
    {
        return $this->m_parent_id;
    }
    public function setParentId($value)
    {
        $this->m_parent_id = $value;
        return;
    }

    public function getPageId()
    {
        return $this->m_page_id;
    }
    public function setPageId($value)
    {
        $this->m_page_id = $value;
        return;
    }

    public function getPageVersion()
    {
        return $this->m_page_version;
    }
    public function setPageVersion($value)
    {
        $this->m_page_version = $value;
        return;
    }

    public function getPageAlias()
    {
        return $this->m_page_alias;
    }
    public function setPageAlias($value)
    {
        $this->m_page_alias = $value;
        return;
    }

    public function getPos()
    {
        return $this->m_pos;
    }
    public function setPos($value)
    {
        $this->m_pos = $value;
        return;
    }

    public function getOrigPageRefId()
    {
        return $this->m_page_ref_id_Orig;
    }
    public function setOrigPageRefId($value)
    {
        if (isset($this->m_page_ref_id_Orig)) { return; }
        $this->m_page_ref_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPageRefId($arrValues['page_ref_id']);
        $this->setStructureId($arrValues['structure_id']);
        $this->setParentId($arrValues['parent_id']);
        $this->setPageId($arrValues['page_id']);
        $this->setPageVersion($arrValues['page_version']);
        $this->setPageAlias($arrValues['page_alias']);
        $this->setPos($arrValues['pos']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'page_ref_id':
                    $this->setPageRefId($val);
                    break;
                case 'structure_id':
                    $this->setStructureId($val);
                    break;
                case 'parent_id':
                    $this->setParentId($val);
                    break;
                case 'page_id':
                    $this->setPageId($val);
                    break;
                case 'page_version':
                    $this->setPageVersion($val);
                    break;
                case 'page_alias':
                    $this->setPageAlias($val);
                    break;
                case 'pos':
                    $this->setPos($val);
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
        $arrValues['page_ref_id'] = $this->getPageRefId();
        $arrValues['structure_id'] = $this->getStructureId();
        $arrValues['parent_id'] = $this->getParentId();
        $arrValues['page_id'] = $this->getPageId();
        $arrValues['page_version'] = $this->getPageVersion();
        $arrValues['page_alias'] = $this->getPageAlias();
        $arrValues['pos'] = $this->getPos();
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
