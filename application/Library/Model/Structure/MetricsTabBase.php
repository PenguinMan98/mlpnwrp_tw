<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_MetricsTabBase
{
    protected $m_tab_id;
    protected $m_tab_name;
    protected $m_tab_order;
    protected $m_tab_content;
    protected $m_tab_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTabOrder(0);
        }
        return;
    }
    public function MetricsTabBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTabId()
    {
        return $this->m_tab_id;
    }
    public function setTabId($value)
    {
        $this->m_tab_id = $value;
        $this->setOrigTabId($value);
        return;
    }

    public function getTabName()
    {
        return $this->m_tab_name;
    }
    public function setTabName($value)
    {
        $this->m_tab_name = $value;
        return;
    }

    public function getTabOrder()
    {
        return $this->m_tab_order;
    }
    public function setTabOrder($value)
    {
        $this->m_tab_order = $value;
        return;
    }

    public function getTabContent()
    {
        return $this->m_tab_content;
    }
    public function setTabContent($value)
    {
        $this->m_tab_content = $value;
        return;
    }

    public function getOrigTabId()
    {
        return $this->m_tab_id_Orig;
    }
    public function setOrigTabId($value)
    {
        if (isset($this->m_tab_id_Orig)) { return; }
        $this->m_tab_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTabId($arrValues['tab_id']);
        $this->setTabName($arrValues['tab_name']);
        $this->setTabOrder($arrValues['tab_order']);
        $this->setTabContent($arrValues['tab_content']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'tab_id':
                    $this->setTabId($val);
                    break;
                case 'tab_name':
                    $this->setTabName($val);
                    break;
                case 'tab_order':
                    $this->setTabOrder($val);
                    break;
                case 'tab_content':
                    $this->setTabContent($val);
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
        $arrValues['tab_id'] = $this->getTabId();
        $arrValues['tab_name'] = $this->getTabName();
        $arrValues['tab_order'] = $this->getTabOrder();
        $arrValues['tab_content'] = $this->getTabContent();
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
