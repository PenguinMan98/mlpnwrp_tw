<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserBookmarksFoldersBase
{
    protected $m_folderId;
    protected $m_parentId;
    protected $m_user;
    protected $m_name;
    protected $m_folderId_Orig;
    protected $m_user_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiUserBookmarksFoldersBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getFolderid()
    {
        return $this->m_folderId;
    }
    public function setFolderid($value)
    {
        $this->m_folderId = $value;
        $this->setOrigFolderid($value);
        return;
    }

    public function getParentid()
    {
        return $this->m_parentId;
    }
    public function setParentid($value)
    {
        $this->m_parentId = $value;
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

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
        return;
    }

    public function getOrigFolderid()
    {
        return $this->m_folderId_Orig;
    }
    public function setOrigFolderid($value)
    {
        if (isset($this->m_folderId_Orig)) { return; }
        $this->m_folderId_Orig = $value;
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
        $this->setFolderid($arrValues['folderId']);
        $this->setParentid($arrValues['parentId']);
        $this->setUser($arrValues['user']);
        $this->setName($arrValues['name']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'folderId':
                    $this->setFolderid($val);
                    break;
                case 'parentId':
                    $this->setParentid($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'name':
                    $this->setName($val);
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
        $arrValues['folderId'] = $this->getFolderid();
        $arrValues['parentId'] = $this->getParentid();
        $arrValues['user'] = $this->getUser();
        $arrValues['name'] = $this->getName();
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
