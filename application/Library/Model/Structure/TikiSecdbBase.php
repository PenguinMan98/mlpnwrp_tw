<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiSecdbBase
{
    protected $m_md5_value;
    protected $m_filename;
    protected $m_tiki_version;
    protected $m_severity;
    protected $m_md5_value_Orig;
    protected $m_filename_Orig;
    protected $m_tiki_version_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setSeverity(0);
        }
        return;
    }
    public function TikiSecdbBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getMd5Value()
    {
        return $this->m_md5_value;
    }
    public function setMd5Value($value)
    {
        $this->m_md5_value = $value;
        $this->setOrigMd5Value($value);
        return;
    }

    public function getFilename()
    {
        return $this->m_filename;
    }
    public function setFilename($value)
    {
        $this->m_filename = $value;
        $this->setOrigFilename($value);
        return;
    }

    public function getTikiVersion()
    {
        return $this->m_tiki_version;
    }
    public function setTikiVersion($value)
    {
        $this->m_tiki_version = $value;
        $this->setOrigTikiVersion($value);
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

    public function getOrigMd5Value()
    {
        return $this->m_md5_value_Orig;
    }
    public function setOrigMd5Value($value)
    {
        if (isset($this->m_md5_value_Orig)) { return; }
        $this->m_md5_value_Orig = $value;
        return;
    }

    public function getOrigFilename()
    {
        return $this->m_filename_Orig;
    }
    public function setOrigFilename($value)
    {
        if (isset($this->m_filename_Orig)) { return; }
        $this->m_filename_Orig = $value;
        return;
    }

    public function getOrigTikiVersion()
    {
        return $this->m_tiki_version_Orig;
    }
    public function setOrigTikiVersion($value)
    {
        if (isset($this->m_tiki_version_Orig)) { return; }
        $this->m_tiki_version_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setMd5Value($arrValues['md5_value']);
        $this->setFilename($arrValues['filename']);
        $this->setTikiVersion($arrValues['tiki_version']);
        $this->setSeverity($arrValues['severity']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'md5_value':
                    $this->setMd5Value($val);
                    break;
                case 'filename':
                    $this->setFilename($val);
                    break;
                case 'tiki_version':
                    $this->setTikiVersion($val);
                    break;
                case 'severity':
                    $this->setSeverity($val);
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
        $arrValues['md5_value'] = $this->getMd5Value();
        $arrValues['filename'] = $this->getFilename();
        $arrValues['tiki_version'] = $this->getTikiVersion();
        $arrValues['severity'] = $this->getSeverity();
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
