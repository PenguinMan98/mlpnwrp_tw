<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiFreetaggedObjectsBase
{
    protected $m_tagId;
    protected $m_objectId;
    protected $m_user;
    protected $m_created;
    protected $m_tagId_Orig;
    protected $m_objectId_Orig;
    protected $m_user_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setCreated(0);
        }
        return;
    }
    public function TikiFreetaggedObjectsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTagid()
    {
        return $this->m_tagId;
    }
    public function setTagid($value)
    {
        $this->m_tagId = $value;
        $this->setOrigTagid($value);
        return;
    }

    public function getObjectid()
    {
        return $this->m_objectId;
    }
    public function setObjectid($value)
    {
        $this->m_objectId = $value;
        $this->setOrigObjectid($value);
        return;
    }

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
        $this->setOrigUser($value);
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

    public function getOrigTagid()
    {
        return $this->m_tagId_Orig;
    }
    public function setOrigTagid($value)
    {
        if (isset($this->m_tagId_Orig)) { return; }
        $this->m_tagId_Orig = $value;
        return;
    }

    public function getOrigObjectid()
    {
        return $this->m_objectId_Orig;
    }
    public function setOrigObjectid($value)
    {
        if (isset($this->m_objectId_Orig)) { return; }
        $this->m_objectId_Orig = $value;
        return;
    }

    public function getOrigUser()
    {
        return $this->m_user_Orig;
    }
    public function setOrigUser($value)
    {
        if (isset($this->m_user_Orig)) { return; }
        $this->m_user_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTagid($arrValues['tagId']);
        $this->setObjectid($arrValues['objectId']);
        $this->setUser($arrValues['user']);
        $this->setCreated($arrValues['created']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'tagId':
                    $this->setTagid($val);
                    break;
                case 'objectId':
                    $this->setObjectid($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'created':
                    $this->setCreated($val);
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
        $arrValues['tagId'] = $this->getTagid();
        $arrValues['objectId'] = $this->getObjectid();
        $arrValues['user'] = $this->getUser();
        $arrValues['created'] = $this->getCreated();
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
