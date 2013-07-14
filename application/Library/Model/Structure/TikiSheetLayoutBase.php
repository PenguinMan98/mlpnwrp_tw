<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSheetLayoutBase
{
    protected $m_sheetId;
    protected $m_begin;
    protected $m_end;
    protected $m_headerRow;
    protected $m_footerRow;
    protected $m_className;
    protected $m_parseValues;
    protected $m_clonedSheetId;
    protected $m_sheetId_Orig;
    protected $m_begin_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setHeaderrow(0);
            $this->setFooterrow(0);
            $this->setParsevalues('n');
        }
        return;
    }
    public function TikiSheetLayoutBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getSheetid()
    {
        return $this->m_sheetId;
    }
    public function setSheetid($value)
    {
        $this->m_sheetId = $value;
        $this->setOrigSheetid($value);
        return;
    }

    public function getBegin()
    {
        return $this->m_begin;
    }
    public function setBegin($value)
    {
        $this->m_begin = $value;
        $this->setOrigBegin($value);
        return;
    }

    public function getEnd()
    {
        return $this->m_end;
    }
    public function setEnd($value)
    {
        $this->m_end = $value;
        return;
    }

    public function getHeaderrow()
    {
        return $this->m_headerRow;
    }
    public function setHeaderrow($value)
    {
        $this->m_headerRow = $value;
        return;
    }

    public function getFooterrow()
    {
        return $this->m_footerRow;
    }
    public function setFooterrow($value)
    {
        $this->m_footerRow = $value;
        return;
    }

    public function getClassname()
    {
        return $this->m_className;
    }
    public function setClassname($value)
    {
        $this->m_className = $value;
        return;
    }

    public function getParsevalues()
    {
        return $this->m_parseValues;
    }
    public function setParsevalues($value)
    {
        $this->m_parseValues = $value;
        return;
    }

    public function getClonedsheetid()
    {
        return $this->m_clonedSheetId;
    }
    public function setClonedsheetid($value)
    {
        $this->m_clonedSheetId = $value;
        return;
    }

    public function getOrigSheetid()
    {
        return $this->m_sheetId_Orig;
    }
    public function setOrigSheetid($value)
    {
        if (isset($this->m_sheetId_Orig)) { return; }
        $this->m_sheetId_Orig = $value;
        return;
    }

    public function getOrigBegin()
    {
        return $this->m_begin_Orig;
    }
    public function setOrigBegin($value)
    {
        if (isset($this->m_begin_Orig)) { return; }
        $this->m_begin_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setSheetid($arrValues['sheetId']);
        $this->setBegin($arrValues['begin']);
        $this->setEnd($arrValues['end']);
        $this->setHeaderrow($arrValues['headerRow']);
        $this->setFooterrow($arrValues['footerRow']);
        $this->setClassname($arrValues['className']);
        $this->setParsevalues($arrValues['parseValues']);
        $this->setClonedsheetid($arrValues['clonedSheetId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'sheetId':
                    $this->setSheetid($val);
                    break;
                case 'begin':
                    $this->setBegin($val);
                    break;
                case 'end':
                    $this->setEnd($val);
                    break;
                case 'headerRow':
                    $this->setHeaderrow($val);
                    break;
                case 'footerRow':
                    $this->setFooterrow($val);
                    break;
                case 'className':
                    $this->setClassname($val);
                    break;
                case 'parseValues':
                    $this->setParsevalues($val);
                    break;
                case 'clonedSheetId':
                    $this->setClonedsheetid($val);
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
        $arrValues['sheetId'] = $this->getSheetid();
        $arrValues['begin'] = $this->getBegin();
        $arrValues['end'] = $this->getEnd();
        $arrValues['headerRow'] = $this->getHeaderrow();
        $arrValues['footerRow'] = $this->getFooterrow();
        $arrValues['className'] = $this->getClassname();
        $arrValues['parseValues'] = $this->getParsevalues();
        $arrValues['clonedSheetId'] = $this->getClonedsheetid();
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
