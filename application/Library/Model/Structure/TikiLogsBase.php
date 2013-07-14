<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiLogsBase
{
    protected $m_logId;
    protected $m_logtype;
    protected $m_logmessage;
    protected $m_loguser;
    protected $m_logip;
    protected $m_logclient;
    protected $m_logtime;
    protected $m_logId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiLogsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getLogid()
    {
        return $this->m_logId;
    }
    public function setLogid($value)
    {
        $this->m_logId = $value;
        $this->setOrigLogid($value);
        return;
    }

    public function getLogtype()
    {
        return $this->m_logtype;
    }
    public function setLogtype($value)
    {
        $this->m_logtype = $value;
        return;
    }

    public function getLogmessage()
    {
        return $this->m_logmessage;
    }
    public function setLogmessage($value)
    {
        $this->m_logmessage = $value;
        return;
    }

    public function getLoguser()
    {
        return $this->m_loguser;
    }
    public function setLoguser($value)
    {
        $this->m_loguser = $value;
        return;
    }

    public function getLogip()
    {
        return $this->m_logip;
    }
    public function setLogip($value)
    {
        $this->m_logip = $value;
        return;
    }

    public function getLogclient()
    {
        return $this->m_logclient;
    }
    public function setLogclient($value)
    {
        $this->m_logclient = $value;
        return;
    }

    public function getLogtime()
    {
        return $this->m_logtime;
    }
    public function setLogtime($value)
    {
        $this->m_logtime = $value;
        return;
    }

    public function getOrigLogid()
    {
        return $this->m_logId_Orig;
    }
    public function setOrigLogid($value)
    {
        if (isset($this->m_logId_Orig)) { return; }
        $this->m_logId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setLogid($arrValues['logId']);
        $this->setLogtype($arrValues['logtype']);
        $this->setLogmessage($arrValues['logmessage']);
        $this->setLoguser($arrValues['loguser']);
        $this->setLogip($arrValues['logip']);
        $this->setLogclient($arrValues['logclient']);
        $this->setLogtime($arrValues['logtime']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'logId':
                    $this->setLogid($val);
                    break;
                case 'logtype':
                    $this->setLogtype($val);
                    break;
                case 'logmessage':
                    $this->setLogmessage($val);
                    break;
                case 'loguser':
                    $this->setLoguser($val);
                    break;
                case 'logip':
                    $this->setLogip($val);
                    break;
                case 'logclient':
                    $this->setLogclient($val);
                    break;
                case 'logtime':
                    $this->setLogtime($val);
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
        $arrValues['logId'] = $this->getLogid();
        $arrValues['logtype'] = $this->getLogtype();
        $arrValues['logmessage'] = $this->getLogmessage();
        $arrValues['loguser'] = $this->getLoguser();
        $arrValues['logip'] = $this->getLogip();
        $arrValues['logclient'] = $this->getLogclient();
        $arrValues['logtime'] = $this->getLogtime();
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
