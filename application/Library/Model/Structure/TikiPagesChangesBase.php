<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPagesChangesBase
{
    protected $m_page_id;
    protected $m_version;
    protected $m_segments_added;
    protected $m_segments_removed;
    protected $m_segments_total;
    protected $m_page_id_Orig;
    protected $m_version_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiPagesChangesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPageId()
    {
        return $this->m_page_id;
    }
    public function setPageId($value)
    {
        $this->m_page_id = $value;
        $this->setOrigPageId($value);
        return;
    }

    public function getVersion()
    {
        return $this->m_version;
    }
    public function setVersion($value)
    {
        $this->m_version = $value;
        $this->setOrigVersion($value);
        return;
    }

    public function getSegmentsAdded()
    {
        return $this->m_segments_added;
    }
    public function setSegmentsAdded($value)
    {
        $this->m_segments_added = $value;
        return;
    }

    public function getSegmentsRemoved()
    {
        return $this->m_segments_removed;
    }
    public function setSegmentsRemoved($value)
    {
        $this->m_segments_removed = $value;
        return;
    }

    public function getSegmentsTotal()
    {
        return $this->m_segments_total;
    }
    public function setSegmentsTotal($value)
    {
        $this->m_segments_total = $value;
        return;
    }

    public function getOrigPageId()
    {
        return $this->m_page_id_Orig;
    }
    public function setOrigPageId($value)
    {
        if (isset($this->m_page_id_Orig)) { return; }
        $this->m_page_id_Orig = $value;
        return;
    }

    public function getOrigVersion()
    {
        return $this->m_version_Orig;
    }
    public function setOrigVersion($value)
    {
        if (isset($this->m_version_Orig)) { return; }
        $this->m_version_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPageId($arrValues['page_id']);
        $this->setVersion($arrValues['version']);
        $this->setSegmentsAdded($arrValues['segments_added']);
        $this->setSegmentsRemoved($arrValues['segments_removed']);
        $this->setSegmentsTotal($arrValues['segments_total']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'page_id':
                    $this->setPageId($val);
                    break;
                case 'version':
                    $this->setVersion($val);
                    break;
                case 'segments_added':
                    $this->setSegmentsAdded($val);
                    break;
                case 'segments_removed':
                    $this->setSegmentsRemoved($val);
                    break;
                case 'segments_total':
                    $this->setSegmentsTotal($val);
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
        $arrValues['page_id'] = $this->getPageId();
        $arrValues['version'] = $this->getVersion();
        $arrValues['segments_added'] = $this->getSegmentsAdded();
        $arrValues['segments_removed'] = $this->getSegmentsRemoved();
        $arrValues['segments_total'] = $this->getSegmentsTotal();
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
