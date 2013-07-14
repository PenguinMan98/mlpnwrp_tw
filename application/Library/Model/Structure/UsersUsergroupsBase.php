<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_UsersUsergroupsBase
{
    protected $m_userId;
    protected $m_groupName;
    protected $m_created;
    protected $m_expire;
    protected $m_userId_Orig;
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
    public function UsersUsergroupsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUserid()
    {
        return $this->m_userId;
    }
    public function setUserid($value)
    {
        $this->m_userId = $value;
        $this->setOrigUserid($value);
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

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
        return;
    }

    public function getExpire()
    {
        return $this->m_expire;
    }
    public function setExpire($value)
    {
        $this->m_expire = $value;
        return;
    }

    public function getOrigUserid()
    {
        return $this->m_userId_Orig;
    }
    public function setOrigUserid($value)
    {
        if (isset($this->m_userId_Orig)) { return; }
        $this->m_userId_Orig = $value;
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
        $this->setUserid($arrValues['userId']);
        $this->setGroupname($arrValues['groupName']);
        $this->setCreated($arrValues['created']);
        $this->setExpire($arrValues['expire']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'userId':
                    $this->setUserid($val);
                    break;
                case 'groupName':
                    $this->setGroupname($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'expire':
                    $this->setExpire($val);
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
        $arrValues['userId'] = $this->getUserid();
        $arrValues['groupName'] = $this->getGroupname();
        $arrValues['created'] = $this->getCreated();
        $arrValues['expire'] = $this->getExpire();
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
