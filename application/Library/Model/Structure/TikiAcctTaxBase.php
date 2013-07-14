<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiAcctTaxBase
{
    protected $m_taxBookId;
    protected $m_taxId;
    protected $m_taxText;
    protected $m_taxAmount;
    protected $m_taxIsFix;
    protected $m_taxId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTaxamount(0);
            $this->setTaxisfix('n');
        }
        return;
    }
    public function TikiAcctTaxBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTaxbookid()
    {
        return $this->m_taxBookId;
    }
    public function setTaxbookid($value)
    {
        $this->m_taxBookId = $value;
        return;
    }

    public function getTaxid()
    {
        return $this->m_taxId;
    }
    public function setTaxid($value)
    {
        $this->m_taxId = $value;
        $this->setOrigTaxid($value);
        return;
    }

    public function getTaxtext()
    {
        return $this->m_taxText;
    }
    public function setTaxtext($value)
    {
        $this->m_taxText = $value;
        return;
    }

    public function getTaxamount()
    {
        return $this->m_taxAmount;
    }
    public function setTaxamount($value)
    {
        $this->m_taxAmount = $value;
        return;
    }

    public function getTaxisfix()
    {
        return $this->m_taxIsFix;
    }
    public function setTaxisfix($value)
    {
        $this->m_taxIsFix = $value;
        return;
    }

    public function getOrigTaxid()
    {
        return $this->m_taxId_Orig;
    }
    public function setOrigTaxid($value)
    {
        if (isset($this->m_taxId_Orig)) { return; }
        $this->m_taxId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTaxbookid($arrValues['taxBookId']);
        $this->setTaxid($arrValues['taxId']);
        $this->setTaxtext($arrValues['taxText']);
        $this->setTaxamount($arrValues['taxAmount']);
        $this->setTaxisfix($arrValues['taxIsFix']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'taxBookId':
                    $this->setTaxbookid($val);
                    break;
                case 'taxId':
                    $this->setTaxid($val);
                    break;
                case 'taxText':
                    $this->setTaxtext($val);
                    break;
                case 'taxAmount':
                    $this->setTaxamount($val);
                    break;
                case 'taxIsFix':
                    $this->setTaxisfix($val);
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
        $arrValues['taxBookId'] = $this->getTaxbookid();
        $arrValues['taxId'] = $this->getTaxid();
        $arrValues['taxText'] = $this->getTaxtext();
        $arrValues['taxAmount'] = $this->getTaxamount();
        $arrValues['taxIsFix'] = $this->getTaxisfix();
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
