<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiFileDraftsBase
{
    protected $m_fileId;
    protected $m_filename;
    protected $m_filesize;
    protected $m_filetype;
    protected $m_data;
    protected $m_user;
    protected $m_path;
    protected $m_hash;
    protected $m_metadata;
    protected $m_lastModif;
    protected $m_lockedby;
    protected $m_fileId_Orig;
    protected $m_user_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setLockedby('');
        }
        return;
    }
    public function TikiFileDraftsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getFileid()
    {
        return $this->m_fileId;
    }
    public function setFileid($value)
    {
        $this->m_fileId = $value;
        $this->setOrigFileid($value);
        return;
    }

    public function getFilename()
    {
        return $this->m_filename;
    }
    public function setFilename($value)
    {
        $this->m_filename = $value;
        return;
    }

    public function getFilesize()
    {
        return $this->m_filesize;
    }
    public function setFilesize($value)
    {
        $this->m_filesize = $value;
        return;
    }

    public function getFiletype()
    {
        return $this->m_filetype;
    }
    public function setFiletype($value)
    {
        $this->m_filetype = $value;
        return;
    }

    public function getData()
    {
        return $this->m_data;
    }
    public function setData($value)
    {
        $this->m_data = $value;
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

    public function getPath()
    {
        return $this->m_path;
    }
    public function setPath($value)
    {
        $this->m_path = $value;
        return;
    }

    public function getHash()
    {
        return $this->m_hash;
    }
    public function setHash($value)
    {
        $this->m_hash = $value;
        return;
    }

    public function getMetadata()
    {
        return $this->m_metadata;
    }
    public function setMetadata($value)
    {
        $this->m_metadata = $value;
        return;
    }

    public function getLastmodif()
    {
        return $this->m_lastModif;
    }
    public function setLastmodif($value)
    {
        $this->m_lastModif = $value;
        return;
    }

    public function getLockedby()
    {
        return $this->m_lockedby;
    }
    public function setLockedby($value)
    {
        $this->m_lockedby = $value;
        return;
    }

    public function getOrigFileid()
    {
        return $this->m_fileId_Orig;
    }
    public function setOrigFileid($value)
    {
        if (isset($this->m_fileId_Orig)) { return; }
        $this->m_fileId_Orig = $value;
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
        $this->setFileid($arrValues['fileId']);
        $this->setFilename($arrValues['filename']);
        $this->setFilesize($arrValues['filesize']);
        $this->setFiletype($arrValues['filetype']);
        $this->setData($arrValues['data']);
        $this->setUser($arrValues['user']);
        $this->setPath($arrValues['path']);
        $this->setHash($arrValues['hash']);
        $this->setMetadata($arrValues['metadata']);
        $this->setLastmodif($arrValues['lastModif']);
        $this->setLockedby($arrValues['lockedby']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'fileId':
                    $this->setFileid($val);
                    break;
                case 'filename':
                    $this->setFilename($val);
                    break;
                case 'filesize':
                    $this->setFilesize($val);
                    break;
                case 'filetype':
                    $this->setFiletype($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'path':
                    $this->setPath($val);
                    break;
                case 'hash':
                    $this->setHash($val);
                    break;
                case 'metadata':
                    $this->setMetadata($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
                    break;
                case 'lockedby':
                    $this->setLockedby($val);
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
        $arrValues['fileId'] = $this->getFileid();
        $arrValues['filename'] = $this->getFilename();
        $arrValues['filesize'] = $this->getFilesize();
        $arrValues['filetype'] = $this->getFiletype();
        $arrValues['data'] = $this->getData();
        $arrValues['user'] = $this->getUser();
        $arrValues['path'] = $this->getPath();
        $arrValues['hash'] = $this->getHash();
        $arrValues['metadata'] = $this->getMetadata();
        $arrValues['lastModif'] = $this->getLastmodif();
        $arrValues['lockedby'] = $this->getLockedby();
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
