<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiAcctBookBase
{
    protected $m_bookId;
    protected $m_bookName;
    protected $m_bookClosed;
    protected $m_bookStartDate;
    protected $m_bookEndDate;
    protected $m_bookCurrency;
    protected $m_bookCurrencyPos;
    protected $m_bookDecimals;
    protected $m_bookDecPoint;
    protected $m_bookThousand;
    protected $m_exportSeparator;
    protected $m_exportEOL;
    protected $m_exportQuote;
    protected $m_bookAutoTax;
    protected $m_bookId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setBookclosed('n');
            $this->setBookcurrency('EUR');
            $this->setBookdecimals(2);
            $this->setBookdecpoint(',');
            $this->setBookthousand('.');
            $this->setExportseparator(';');
            $this->setExporteol('LF');
            $this->setExportquote('"');
            $this->setBookautotax('y');
        }
        return;
    }
    public function TikiAcctBookBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getBookid()
    {
        return $this->m_bookId;
    }
    public function setBookid($value)
    {
        $this->m_bookId = $value;
        $this->setOrigBookid($value);
        return;
    }

    public function getBookname()
    {
        return $this->m_bookName;
    }
    public function setBookname($value)
    {
        $this->m_bookName = $value;
        return;
    }

    public function getBookclosed()
    {
        return $this->m_bookClosed;
    }
    public function setBookclosed($value)
    {
        $this->m_bookClosed = $value;
        return;
    }

    public function getBookstartdate()
    {
        return $this->m_bookStartDate;
    }
    public function setBookstartdate($value)
    {
        $this->m_bookStartDate = $value;
        return;
    }

    public function getBookenddate()
    {
        return $this->m_bookEndDate;
    }
    public function setBookenddate($value)
    {
        $this->m_bookEndDate = $value;
        return;
    }

    public function getBookcurrency()
    {
        return $this->m_bookCurrency;
    }
    public function setBookcurrency($value)
    {
        $this->m_bookCurrency = $value;
        return;
    }

    public function getBookcurrencypos()
    {
        return $this->m_bookCurrencyPos;
    }
    public function setBookcurrencypos($value)
    {
        $this->m_bookCurrencyPos = $value;
        return;
    }

    public function getBookdecimals()
    {
        return $this->m_bookDecimals;
    }
    public function setBookdecimals($value)
    {
        $this->m_bookDecimals = $value;
        return;
    }

    public function getBookdecpoint()
    {
        return $this->m_bookDecPoint;
    }
    public function setBookdecpoint($value)
    {
        $this->m_bookDecPoint = $value;
        return;
    }

    public function getBookthousand()
    {
        return $this->m_bookThousand;
    }
    public function setBookthousand($value)
    {
        $this->m_bookThousand = $value;
        return;
    }

    public function getExportseparator()
    {
        return $this->m_exportSeparator;
    }
    public function setExportseparator($value)
    {
        $this->m_exportSeparator = $value;
        return;
    }

    public function getExporteol()
    {
        return $this->m_exportEOL;
    }
    public function setExporteol($value)
    {
        $this->m_exportEOL = $value;
        return;
    }

    public function getExportquote()
    {
        return $this->m_exportQuote;
    }
    public function setExportquote($value)
    {
        $this->m_exportQuote = $value;
        return;
    }

    public function getBookautotax()
    {
        return $this->m_bookAutoTax;
    }
    public function setBookautotax($value)
    {
        $this->m_bookAutoTax = $value;
        return;
    }

    public function getOrigBookid()
    {
        return $this->m_bookId_Orig;
    }
    public function setOrigBookid($value)
    {
        if (isset($this->m_bookId_Orig)) { return; }
        $this->m_bookId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setBookid($arrValues['bookId']);
        $this->setBookname($arrValues['bookName']);
        $this->setBookclosed($arrValues['bookClosed']);
        $this->setBookstartdate($arrValues['bookStartDate']);
        $this->setBookenddate($arrValues['bookEndDate']);
        $this->setBookcurrency($arrValues['bookCurrency']);
        $this->setBookcurrencypos($arrValues['bookCurrencyPos']);
        $this->setBookdecimals($arrValues['bookDecimals']);
        $this->setBookdecpoint($arrValues['bookDecPoint']);
        $this->setBookthousand($arrValues['bookThousand']);
        $this->setExportseparator($arrValues['exportSeparator']);
        $this->setExporteol($arrValues['exportEOL']);
        $this->setExportquote($arrValues['exportQuote']);
        $this->setBookautotax($arrValues['bookAutoTax']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'bookId':
                    $this->setBookid($val);
                    break;
                case 'bookName':
                    $this->setBookname($val);
                    break;
                case 'bookClosed':
                    $this->setBookclosed($val);
                    break;
                case 'bookStartDate':
                    $this->setBookstartdate($val);
                    break;
                case 'bookEndDate':
                    $this->setBookenddate($val);
                    break;
                case 'bookCurrency':
                    $this->setBookcurrency($val);
                    break;
                case 'bookCurrencyPos':
                    $this->setBookcurrencypos($val);
                    break;
                case 'bookDecimals':
                    $this->setBookdecimals($val);
                    break;
                case 'bookDecPoint':
                    $this->setBookdecpoint($val);
                    break;
                case 'bookThousand':
                    $this->setBookthousand($val);
                    break;
                case 'exportSeparator':
                    $this->setExportseparator($val);
                    break;
                case 'exportEOL':
                    $this->setExporteol($val);
                    break;
                case 'exportQuote':
                    $this->setExportquote($val);
                    break;
                case 'bookAutoTax':
                    $this->setBookautotax($val);
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
        $arrValues['bookId'] = $this->getBookid();
        $arrValues['bookName'] = $this->getBookname();
        $arrValues['bookClosed'] = $this->getBookclosed();
        $arrValues['bookStartDate'] = $this->getBookstartdate();
        $arrValues['bookEndDate'] = $this->getBookenddate();
        $arrValues['bookCurrency'] = $this->getBookcurrency();
        $arrValues['bookCurrencyPos'] = $this->getBookcurrencypos();
        $arrValues['bookDecimals'] = $this->getBookdecimals();
        $arrValues['bookDecPoint'] = $this->getBookdecpoint();
        $arrValues['bookThousand'] = $this->getBookthousand();
        $arrValues['exportSeparator'] = $this->getExportseparator();
        $arrValues['exportEOL'] = $this->getExporteol();
        $arrValues['exportQuote'] = $this->getExportquote();
        $arrValues['bookAutoTax'] = $this->getBookautotax();
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
