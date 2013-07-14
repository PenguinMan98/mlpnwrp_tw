<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPerspectivePreferencesBase
{
    protected $m_perspectiveId;
    protected $m_pref;
    protected $m_value;
    protected $m_perspectiveId_Orig;
    protected $m_pref_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiPerspectivePreferencesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getPerspectiveid()
    {
        return $this->m_perspectiveId;
    }
    public function setPerspectiveid($value)
    {
        $this->m_perspectiveId = $value;
        $this->setOrigPerspectiveid($value);
        return;
    }

    public function getPref()
    {
        return $this->m_pref;
    }
    public function setPref($value)
    {
        $this->m_pref = $value;
        $this->setOrigPref($value);
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

    public function getOrigPerspectiveid()
    {
        return $this->m_perspectiveId_Orig;
    }
    public function setOrigPerspectiveid($value)
    {
        if (isset($this->m_perspectiveId_Orig)) { return; }
        $this->m_perspectiveId_Orig = $value;
        return;
    }

    public function getOrigPref()
    {
        return $this->m_pref_Orig;
    }
    public function setOrigPref($value)
    {
        if (isset($this->m_pref_Orig)) { return; }
        $this->m_pref_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setPerspectiveid($arrValues['perspectiveId']);
        $this->setPref($arrValues['pref']);
        $this->setValue($arrValues['value']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'perspectiveId':
                    $this->setPerspectiveid($val);
                    break;
                case 'pref':
                    $this->setPref($val);
                    break;
                case 'value':
                    $this->setValue($val);
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
        $arrValues['perspectiveId'] = $this->getPerspectiveid();
        $arrValues['pref'] = $this->getPref();
        $arrValues['value'] = $this->getValue();
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
