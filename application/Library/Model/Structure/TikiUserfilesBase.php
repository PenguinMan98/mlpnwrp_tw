<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiUserfilesBase
{
    protected $m_user;
    protected $m_fileId;
    protected $m_name;
    protected $m_filename;
    protected $m_filetype;
    protected $m_filesize;
    protected $m_data;
    protected $m_hits;
    protected $m_isFile;
    protected $m_path;
    protected $m_created;
    protected $m_fileId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setUser('');
        }
        return;
    }
    public function TikiUserfilesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
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

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
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

    public function getFiletype()
    {
        return $this->m_filetype;
    }
    public function setFiletype($value)
    {
        $this->m_filetype = $value;
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

    public function getData()
    {
        return $this->m_data;
    }
    public function setData($value)
    {
        $this->m_data = $value;
        return;
    }

    public function getHits()
    {
        return $this->m_hits;
    }
    public function setHits($value)
    {
        $this->m_hits = $value;
        return;
    }

    public function getIsfile()
    {
        return $this->m_isFile;
    }
    public function setIsfile($value)
    {
        $this->m_isFile = $value;
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

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setUser($arrValues['user']);
        $this->setFileid($arrValues['fileId']);
        $this->setName($arrValues['name']);
        $this->setFilename($arrValues['filename']);
        $this->setFiletype($arrValues['filetype']);
        $this->setFilesize($arrValues['filesize']);
        $this->setData($arrValues['data']);
        $this->setHits($arrValues['hits']);
        $this->setIsfile($arrValues['isFile']);
        $this->setPath($arrValues['path']);
        $this->setCreated($arrValues['created']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'fileId':
                    $this->setFileid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'filename':
                    $this->setFilename($val);
                    break;
                case 'filetype':
                    $this->setFiletype($val);
                    break;
                case 'filesize':
                    $this->setFilesize($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'isFile':
                    $this->setIsfile($val);
                    break;
                case 'path':
                    $this->setPath($val);
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
        $arrValues['user'] = $this->getUser();
        $arrValues['fileId'] = $this->getFileid();
        $arrValues['name'] = $this->getName();
        $arrValues['filename'] = $this->getFilename();
        $arrValues['filetype'] = $this->getFiletype();
        $arrValues['filesize'] = $this->getFilesize();
        $arrValues['data'] = $this->getData();
        $arrValues['hits'] = $this->getHits();
        $arrValues['isFile'] = $this->getIsfile();
        $arrValues['path'] = $this->getPath();
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
