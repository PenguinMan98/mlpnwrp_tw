<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiNewsletterPagesBase
{
    protected $m_nlId;
    protected $m_wikiPageName;
    protected $m_validateAddrs;
    protected $m_addToList;
    protected $m_nlId_Orig;
    protected $m_wikiPageName_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setValidateaddrs('n');
            $this->setAddtolist('n');
        }
        return;
    }
    public function TikiNewsletterPagesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getNlid()
    {
        return $this->m_nlId;
    }
    public function setNlid($value)
    {
        $this->m_nlId = $value;
        $this->setOrigNlid($value);
        return;
    }

    public function getWikipagename()
    {
        return $this->m_wikiPageName;
    }
    public function setWikipagename($value)
    {
        $this->m_wikiPageName = $value;
        $this->setOrigWikipagename($value);
        return;
    }

    public function getValidateaddrs()
    {
        return $this->m_validateAddrs;
    }
    public function setValidateaddrs($value)
    {
        $this->m_validateAddrs = $value;
        return;
    }

    public function getAddtolist()
    {
        return $this->m_addToList;
    }
    public function setAddtolist($value)
    {
        $this->m_addToList = $value;
        return;
    }

    public function getOrigNlid()
    {
        return $this->m_nlId_Orig;
    }
    public function setOrigNlid($value)
    {
        if (isset($this->m_nlId_Orig)) { return; }
        $this->m_nlId_Orig = $value;
        return;
    }

    public function getOrigWikipagename()
    {
        return $this->m_wikiPageName_Orig;
    }
    public function setOrigWikipagename($value)
    {
        if (isset($this->m_wikiPageName_Orig)) { return; }
        $this->m_wikiPageName_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setNlid($arrValues['nlId']);
        $this->setWikipagename($arrValues['wikiPageName']);
        $this->setValidateaddrs($arrValues['validateAddrs']);
        $this->setAddtolist($arrValues['addToList']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'nlId':
                    $this->setNlid($val);
                    break;
                case 'wikiPageName':
                    $this->setWikipagename($val);
                    break;
                case 'validateAddrs':
                    $this->setValidateaddrs($val);
                    break;
                case 'addToList':
                    $this->setAddtolist($val);
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
        $arrValues['nlId'] = $this->getNlid();
        $arrValues['wikiPageName'] = $this->getWikipagename();
        $arrValues['validateAddrs'] = $this->getValidateaddrs();
        $arrValues['addToList'] = $this->getAddtolist();
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
