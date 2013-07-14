<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiIntegratorRulesBase
{
    protected $m_ruleID;
    protected $m_repID;
    protected $m_ord;
    protected $m_srch;
    protected $m_repl;
    protected $m_type;
    protected $m_casesense;
    protected $m_rxmod;
    protected $m_enabled;
    protected $m_description;
    protected $m_ruleID_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setRepid(0);
            $this->setOrd(0);
            $this->setType('n');
            $this->setCasesense('y');
            $this->setRxmod('');
            $this->setEnabled('n');
        }
        return;
    }
    public function TikiIntegratorRulesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getRuleid()
    {
        return $this->m_ruleID;
    }
    public function setRuleid($value)
    {
        $this->m_ruleID = $value;
        $this->setOrigRuleid($value);
        return;
    }

    public function getRepid()
    {
        return $this->m_repID;
    }
    public function setRepid($value)
    {
        $this->m_repID = $value;
        return;
    }

    public function getOrd()
    {
        return $this->m_ord;
    }
    public function setOrd($value)
    {
        $this->m_ord = $value;
        return;
    }

    public function getSrch()
    {
        return $this->m_srch;
    }
    public function setSrch($value)
    {
        $this->m_srch = $value;
        return;
    }

    public function getRepl()
    {
        return $this->m_repl;
    }
    public function setRepl($value)
    {
        $this->m_repl = $value;
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        return;
    }

    public function getCasesense()
    {
        return $this->m_casesense;
    }
    public function setCasesense($value)
    {
        $this->m_casesense = $value;
        return;
    }

    public function getRxmod()
    {
        return $this->m_rxmod;
    }
    public function setRxmod($value)
    {
        $this->m_rxmod = $value;
        return;
    }

    public function getEnabled()
    {
        return $this->m_enabled;
    }
    public function setEnabled($value)
    {
        $this->m_enabled = $value;
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

    public function getOrigRuleid()
    {
        return $this->m_ruleID_Orig;
    }
    public function setOrigRuleid($value)
    {
        if (isset($this->m_ruleID_Orig)) { return; }
        $this->m_ruleID_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setRuleid($arrValues['ruleID']);
        $this->setRepid($arrValues['repID']);
        $this->setOrd($arrValues['ord']);
        $this->setSrch($arrValues['srch']);
        $this->setRepl($arrValues['repl']);
        $this->setType($arrValues['type']);
        $this->setCasesense($arrValues['casesense']);
        $this->setRxmod($arrValues['rxmod']);
        $this->setEnabled($arrValues['enabled']);
        $this->setDescription($arrValues['description']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'ruleID':
                    $this->setRuleid($val);
                    break;
                case 'repID':
                    $this->setRepid($val);
                    break;
                case 'ord':
                    $this->setOrd($val);
                    break;
                case 'srch':
                    $this->setSrch($val);
                    break;
                case 'repl':
                    $this->setRepl($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'casesense':
                    $this->setCasesense($val);
                    break;
                case 'rxmod':
                    $this->setRxmod($val);
                    break;
                case 'enabled':
                    $this->setEnabled($val);
                    break;
                case 'description':
                    $this->setDescription($val);
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
        $arrValues['ruleID'] = $this->getRuleid();
        $arrValues['repID'] = $this->getRepid();
        $arrValues['ord'] = $this->getOrd();
        $arrValues['srch'] = $this->getSrch();
        $arrValues['repl'] = $this->getRepl();
        $arrValues['type'] = $this->getType();
        $arrValues['casesense'] = $this->getCasesense();
        $arrValues['rxmod'] = $this->getRxmod();
        $arrValues['enabled'] = $this->getEnabled();
        $arrValues['description'] = $this->getDescription();
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
