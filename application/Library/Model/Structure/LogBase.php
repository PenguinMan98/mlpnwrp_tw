<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_LogBase
{
    protected $m_log_id;
    protected $m_file;
    protected $m_log_entry;
    protected $m_severity;
    protected $m_timestamp;
    protected $m_log_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setTimestamp('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function LogBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getLogId()
    {
        return $this->m_log_id;
    }
    public function setLogId($value)
    {
        $this->m_log_id = $value;
        $this->setOrigLogId($value);
        return;
    }

    public function getFile()
    {
        return $this->m_file;
    }
    public function setFile($value)
    {
        $this->m_file = $value;
        return;
    }

    public function getLogEntry()
    {
        return $this->m_log_entry;
    }
    public function setLogEntry($value)
    {
        $this->m_log_entry = $value;
        return;
    }

    public function getSeverity()
    {
        return $this->m_severity;
    }
    public function setSeverity($value)
    {
        $this->m_severity = $value;
        return;
    }

    public function getTimestamp()
    {
        return $this->m_timestamp;
    }
    public function setTimestamp($value)
    {
        $this->m_timestamp = $value;
        return;
    }

    public function getOrigLogId()
    {
        return $this->m_log_id_Orig;
    }
    public function setOrigLogId($value)
    {
        if (isset($this->m_log_id_Orig)) { return; }
        $this->m_log_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setLogId($arrValues['log_id']);
        $this->setFile($arrValues['file']);
        $this->setLogEntry($arrValues['log_entry']);
        $this->setSeverity($arrValues['severity']);
        $this->setTimestamp($arrValues['timestamp']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'log_id':
                    $this->setLogId($val);
                    break;
                case 'file':
                    $this->setFile($val);
                    break;
                case 'log_entry':
                    $this->setLogEntry($val);
                    break;
                case 'severity':
                    $this->setSeverity($val);
                    break;
                case 'timestamp':
                    $this->setTimestamp($val);
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
        $arrValues['log_id'] = $this->getLogId();
        $arrValues['file'] = $this->getFile();
        $arrValues['log_entry'] = $this->getLogEntry();
        $arrValues['severity'] = $this->getSeverity();
        $arrValues['timestamp'] = $this->getTimestamp();
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
