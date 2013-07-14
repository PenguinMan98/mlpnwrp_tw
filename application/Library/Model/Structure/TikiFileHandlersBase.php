<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiFileHandlersBase
{
    protected $m_mime_type;
    protected $m_cmd;
    protected $m_mime_type_Orig;
    protected $m_cmd_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiFileHandlersBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getMimeType()
    {
        return $this->m_mime_type;
    }
    public function setMimeType($value)
    {
        $this->m_mime_type = $value;
        $this->setOrigMimeType($value);
        return;
    }

    public function getCmd()
    {
        return $this->m_cmd;
    }
    public function setCmd($value)
    {
        $this->m_cmd = $value;
        $this->setOrigCmd($value);
        return;
    }

    public function getOrigMimeType()
    {
        return $this->m_mime_type_Orig;
    }
    public function setOrigMimeType($value)
    {
        if (isset($this->m_mime_type_Orig)) { return; }
        $this->m_mime_type_Orig = $value;
        return;
    }

    public function getOrigCmd()
    {
        return $this->m_cmd_Orig;
    }
    public function setOrigCmd($value)
    {
        if (isset($this->m_cmd_Orig)) { return; }
        $this->m_cmd_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setMimeType($arrValues['mime_type']);
        $this->setCmd($arrValues['cmd']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'mime_type':
                    $this->setMimeType($val);
                    break;
                case 'cmd':
                    $this->setCmd($val);
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
        $arrValues['mime_type'] = $this->getMimeType();
        $arrValues['cmd'] = $this->getCmd();
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
