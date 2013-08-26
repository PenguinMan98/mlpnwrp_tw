<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_MetricsAssignedBase
{
    protected $m_assigned_id;
    protected $m_metric_id;
    protected $m_tab_id;
    protected $m_assigned_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function MetricsAssignedBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getAssignedId()
    {
        return $this->m_assigned_id;
    }
    public function setAssignedId($value)
    {
        $this->m_assigned_id = $value;
        $this->setOrigAssignedId($value);
        return;
    }

    public function getMetricId()
    {
        return $this->m_metric_id;
    }
    public function setMetricId($value)
    {
        $this->m_metric_id = $value;
        return;
    }

    public function getTabId()
    {
        return $this->m_tab_id;
    }
    public function setTabId($value)
    {
        $this->m_tab_id = $value;
        return;
    }

    public function getOrigAssignedId()
    {
        return $this->m_assigned_id_Orig;
    }
    public function setOrigAssignedId($value)
    {
        if (isset($this->m_assigned_id_Orig)) { return; }
        $this->m_assigned_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setAssignedId($arrValues['assigned_id']);
        $this->setMetricId($arrValues['metric_id']);
        $this->setTabId($arrValues['tab_id']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'assigned_id':
                    $this->setAssignedId($val);
                    break;
                case 'metric_id':
                    $this->setMetricId($val);
                    break;
                case 'tab_id':
                    $this->setTabId($val);
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
        $arrValues['assigned_id'] = $this->getAssignedId();
        $arrValues['metric_id'] = $this->getMetricId();
        $arrValues['tab_id'] = $this->getTabId();
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
