<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiWebmailContactsGroupsBase
{
    protected $m_contactId;
    protected $m_groupName;
    protected $m_contactId_Orig;
    protected $m_groupName_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiWebmailContactsGroupsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getContactid()
    {
        return $this->m_contactId;
    }
    public function setContactid($value)
    {
        $this->m_contactId = $value;
        $this->setOrigContactid($value);
        return;
    }

    public function getGroupname()
    {
        return $this->m_groupName;
    }
    public function setGroupname($value)
    {
        $this->m_groupName = $value;
        $this->setOrigGroupname($value);
        return;
    }

    public function getOrigContactid()
    {
        return $this->m_contactId_Orig;
    }
    public function setOrigContactid($value)
    {
        if (isset($this->m_contactId_Orig)) { return; }
        $this->m_contactId_Orig = $value;
        return;
    }

    public function getOrigGroupname()
    {
        return $this->m_groupName_Orig;
    }
    public function setOrigGroupname($value)
    {
        if (isset($this->m_groupName_Orig)) { return; }
        $this->m_groupName_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setContactid($arrValues['contactId']);
        $this->setGroupname($arrValues['groupName']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'contactId':
                    $this->setContactid($val);
                    break;
                case 'groupName':
                    $this->setGroupname($val);
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
        $arrValues['contactId'] = $this->getContactid();
        $arrValues['groupName'] = $this->getGroupname();
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
