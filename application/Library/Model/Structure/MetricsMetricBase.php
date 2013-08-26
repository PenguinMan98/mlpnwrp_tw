<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_MetricsMetricBase
{
    protected $m_metric_id;
    protected $m_metric_name;
    protected $m_metric_range;
    protected $m_metric_datatype;
    protected $m_metric_lastupdate;
    protected $m_metric_query;
    protected $m_metric_dsn;
    protected $m_metric_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setMetricRange('+');
            $this->setMetricDatatype('i');
            $this->setMetricLastupdate('CURRENT_TIMESTAMP');
            $this->setMetricDsn('local');
        }
        return;
    }
    public function MetricsMetricBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getMetricId()
    {
        return $this->m_metric_id;
    }
    public function setMetricId($value)
    {
        $this->m_metric_id = $value;
        $this->setOrigMetricId($value);
        return;
    }

    public function getMetricName()
    {
        return $this->m_metric_name;
    }
    public function setMetricName($value)
    {
        $this->m_metric_name = $value;
        return;
    }

    public function getMetricRange()
    {
        return $this->m_metric_range;
    }
    public function setMetricRange($value)
    {
        $this->m_metric_range = $value;
        return;
    }

    public function getMetricDatatype()
    {
        return $this->m_metric_datatype;
    }
    public function setMetricDatatype($value)
    {
        $this->m_metric_datatype = $value;
        return;
    }

    public function getMetricLastupdate()
    {
        return $this->m_metric_lastupdate;
    }
    public function setMetricLastupdate($value)
    {
        $this->m_metric_lastupdate = $value;
        return;
    }

    public function getMetricQuery()
    {
        return $this->m_metric_query;
    }
    public function setMetricQuery($value)
    {
        $this->m_metric_query = $value;
        return;
    }

    public function getMetricDsn()
    {
        return $this->m_metric_dsn;
    }
    public function setMetricDsn($value)
    {
        $this->m_metric_dsn = $value;
        return;
    }

    public function getOrigMetricId()
    {
        return $this->m_metric_id_Orig;
    }
    public function setOrigMetricId($value)
    {
        if (isset($this->m_metric_id_Orig)) { return; }
        $this->m_metric_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setMetricId($arrValues['metric_id']);
        $this->setMetricName($arrValues['metric_name']);
        $this->setMetricRange($arrValues['metric_range']);
        $this->setMetricDatatype($arrValues['metric_datatype']);
        $this->setMetricLastupdate($arrValues['metric_lastupdate']);
        $this->setMetricQuery($arrValues['metric_query']);
        $this->setMetricDsn($arrValues['metric_dsn']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'metric_id':
                    $this->setMetricId($val);
                    break;
                case 'metric_name':
                    $this->setMetricName($val);
                    break;
                case 'metric_range':
                    $this->setMetricRange($val);
                    break;
                case 'metric_datatype':
                    $this->setMetricDatatype($val);
                    break;
                case 'metric_lastupdate':
                    $this->setMetricLastupdate($val);
                    break;
                case 'metric_query':
                    $this->setMetricQuery($val);
                    break;
                case 'metric_dsn':
                    $this->setMetricDsn($val);
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
        $arrValues['metric_id'] = $this->getMetricId();
        $arrValues['metric_name'] = $this->getMetricName();
        $arrValues['metric_range'] = $this->getMetricRange();
        $arrValues['metric_datatype'] = $this->getMetricDatatype();
        $arrValues['metric_lastupdate'] = $this->getMetricLastupdate();
        $arrValues['metric_query'] = $this->getMetricQuery();
        $arrValues['metric_dsn'] = $this->getMetricDsn();
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
