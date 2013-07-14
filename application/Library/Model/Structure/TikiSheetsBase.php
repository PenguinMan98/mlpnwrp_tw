<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSheetsBase
{
    protected $m_sheetId;
    protected $m_title;
    protected $m_description;
    protected $m_author;
    protected $m_parentSheetId;
    protected $m_clonedSheetId;
    protected $m_sheetId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTitle('');
            $this->setAuthor('');
        }
        return;
    }
    public function TikiSheetsBase($arrData = null)
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

    public function getTitle()
    {
        return $this->m_title;
    }
    public function setTitle($value)
    {
        $this->m_title = $value;
        return;
    }

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getAuthor()
    {
        return $this->m_author;
    }
    public function setAuthor($value)
    {
        $this->m_author = $value;
        return;
    }

    public function getParentsheetid()
    {
        return $this->m_parentSheetId;
    }
    public function setParentsheetid($value)
    {
        $this->m_parentSheetId = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setSheetid($arrValues['sheetId']);
        $this->setTitle($arrValues['title']);
        $this->setDescription($arrValues['description']);
        $this->setAuthor($arrValues['author']);
        $this->setParentsheetid($arrValues['parentSheetId']);
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
                case 'title':
                    $this->setTitle($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'author':
                    $this->setAuthor($val);
                    break;
                case 'parentSheetId':
                    $this->setParentsheetid($val);
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
        $arrValues['title'] = $this->getTitle();
        $arrValues['description'] = $this->getDescription();
        $arrValues['author'] = $this->getAuthor();
        $arrValues['parentSheetId'] = $this->getParentsheetid();
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
