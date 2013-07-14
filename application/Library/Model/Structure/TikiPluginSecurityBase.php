<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiPluginSecurityBase
{
    protected $m_fingerprint;
    protected $m_status;
    protected $m_added_by;
    protected $m_approval_by;
    protected $m_last_update;
    protected $m_last_objectType;
    protected $m_last_objectId;
    protected $m_fingerprint_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setLastUpdate('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function TikiPluginSecurityBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getFingerprint()
    {
        return $this->m_fingerprint;
    }
    public function setFingerprint($value)
    {
        $this->m_fingerprint = $value;
        $this->setOrigFingerprint($value);
        return;
    }

    public function getStatus()
    {
        return $this->m_status;
    }
    public function setStatus($value)
    {
        $this->m_status = $value;
        return;
    }

    public function getAddedBy()
    {
        return $this->m_added_by;
    }
    public function setAddedBy($value)
    {
        $this->m_added_by = $value;
        return;
    }

    public function getApprovalBy()
    {
        return $this->m_approval_by;
    }
    public function setApprovalBy($value)
    {
        $this->m_approval_by = $value;
        return;
    }

    public function getLastUpdate()
    {
        return $this->m_last_update;
    }
    public function setLastUpdate($value)
    {
        $this->m_last_update = $value;
        return;
    }

    public function getLastObjecttype()
    {
        return $this->m_last_objectType;
    }
    public function setLastObjecttype($value)
    {
        $this->m_last_objectType = $value;
        return;
    }

    public function getLastObjectid()
    {
        return $this->m_last_objectId;
    }
    public function setLastObjectid($value)
    {
        $this->m_last_objectId = $value;
        return;
    }

    public function getOrigFingerprint()
    {
        return $this->m_fingerprint_Orig;
    }
    public function setOrigFingerprint($value)
    {
        if (isset($this->m_fingerprint_Orig)) { return; }
        $this->m_fingerprint_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setFingerprint($arrValues['fingerprint']);
        $this->setStatus($arrValues['status']);
        $this->setAddedBy($arrValues['added_by']);
        $this->setApprovalBy($arrValues['approval_by']);
        $this->setLastUpdate($arrValues['last_update']);
        $this->setLastObjecttype($arrValues['last_objectType']);
        $this->setLastObjectid($arrValues['last_objectId']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'fingerprint':
                    $this->setFingerprint($val);
                    break;
                case 'status':
                    $this->setStatus($val);
                    break;
                case 'added_by':
                    $this->setAddedBy($val);
                    break;
                case 'approval_by':
                    $this->setApprovalBy($val);
                    break;
                case 'last_update':
                    $this->setLastUpdate($val);
                    break;
                case 'last_objectType':
                    $this->setLastObjecttype($val);
                    break;
                case 'last_objectId':
                    $this->setLastObjectid($val);
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
        $arrValues['fingerprint'] = $this->getFingerprint();
        $arrValues['status'] = $this->getStatus();
        $arrValues['added_by'] = $this->getAddedBy();
        $arrValues['approval_by'] = $this->getApprovalBy();
        $arrValues['last_update'] = $this->getLastUpdate();
        $arrValues['last_objectType'] = $this->getLastObjecttype();
        $arrValues['last_objectId'] = $this->getLastObjectid();
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
