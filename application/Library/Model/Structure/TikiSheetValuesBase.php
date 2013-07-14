<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSheetValuesBase
{
    protected $m_sheetId;
    protected $m_begin;
    protected $m_end;
    protected $m_rowIndex;
    protected $m_columnIndex;
    protected $m_value;
    protected $m_calculation;
    protected $m_width;
    protected $m_height;
    protected $m_format;
    protected $m_user;
    protected $m_style;
    protected $m_class;
    protected $m_clonedSheetId;
    protected $m_sheetId_Orig;
    protected $m_begin_Orig;
    protected $m_rowIndex_Orig;
    protected $m_columnIndex_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setWidth(1);
            $this->setHeight(1);
            $this->setUser('');
            $this->setStyle('');
            $this->setClass('');
        }
        return;
    }
    public function TikiSheetValuesBase($arrData = null)
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

    public function getRowindex()
    {
        return $this->m_rowIndex;
    }
    public function setRowindex($value)
    {
        $this->m_rowIndex = $value;
        $this->setOrigRowindex($value);
        return;
    }

    public function getColumnindex()
    {
        return $this->m_columnIndex;
    }
    public function setColumnindex($value)
    {
        $this->m_columnIndex = $value;
        $this->setOrigColumnindex($value);
        return;
    }

    public function getValue()
    {
        return $this->m_value;
    }
    public function setValue($value)
    {
        $this->m_value = $value;
        return;
    }

    public function getCalculation()
    {
        return $this->m_calculation;
    }
    public function setCalculation($value)
    {
        $this->m_calculation = $value;
        return;
    }

    public function getWidth()
    {
        return $this->m_width;
    }
    public function setWidth($value)
    {
        $this->m_width = $value;
        return;
    }

    public function getHeight()
    {
        return $this->m_height;
    }
    public function setHeight($value)
    {
        $this->m_height = $value;
        return;
    }

    public function getFormat()
    {
        return $this->m_format;
    }
    public function setFormat($value)
    {
        $this->m_format = $value;
        return;
    }

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        return;
    }

    public function getStyle()
    {
        return $this->m_style;
    }
    public function setStyle($value)
    {
        $this->m_style = $value;
        return;
    }

    public function getClass()
    {
        return $this->m_class;
    }
    public function setClass($value)
    {
        $this->m_class = $value;
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

    public function getOrigRowindex()
    {
        return $this->m_rowIndex_Orig;
    }
    public function setOrigRowindex($value)
    {
        if (isset($this->m_rowIndex_Orig)) { return; }
        $this->m_rowIndex_Orig = $value;
        return;
    }

    public function getOrigColumnindex()
    {
        return $this->m_columnIndex_Orig;
    }
    public function setOrigColumnindex($value)
    {
        if (isset($this->m_columnIndex_Orig)) { return; }
        $this->m_columnIndex_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setSheetid($arrValues['sheetId']);
        $this->setBegin($arrValues['begin']);
        $this->setEnd($arrValues['end']);
        $this->setRowindex($arrValues['rowIndex']);
        $this->setColumnindex($arrValues['columnIndex']);
        $this->setValue($arrValues['value']);
        $this->setCalculation($arrValues['calculation']);
        $this->setWidth($arrValues['width']);
        $this->setHeight($arrValues['height']);
        $this->setFormat($arrValues['format']);
        $this->setUser($arrValues['user']);
        $this->setStyle($arrValues['style']);
        $this->setClass($arrValues['class']);
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
                case 'rowIndex':
                    $this->setRowindex($val);
                    break;
                case 'columnIndex':
                    $this->setColumnindex($val);
                    break;
                case 'value':
                    $this->setValue($val);
                    break;
                case 'calculation':
                    $this->setCalculation($val);
                    break;
                case 'width':
                    $this->setWidth($val);
                    break;
                case 'height':
                    $this->setHeight($val);
                    break;
                case 'format':
                    $this->setFormat($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'style':
                    $this->setStyle($val);
                    break;
                case 'class':
                    $this->setClass($val);
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
        $arrValues['rowIndex'] = $this->getRowindex();
        $arrValues['columnIndex'] = $this->getColumnindex();
        $arrValues['value'] = $this->getValue();
        $arrValues['calculation'] = $this->getCalculation();
        $arrValues['width'] = $this->getWidth();
        $arrValues['height'] = $this->getHeight();
        $arrValues['format'] = $this->getFormat();
        $arrValues['user'] = $this->getUser();
        $arrValues['style'] = $this->getStyle();
        $arrValues['class'] = $this->getClass();
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
