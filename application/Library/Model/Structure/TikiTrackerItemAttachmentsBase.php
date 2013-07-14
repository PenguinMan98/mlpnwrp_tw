<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiTrackerItemAttachmentsBase
{
    protected $m_attId;
    protected $m_itemId;
    protected $m_filename;
    protected $m_filetype;
    protected $m_filesize;
    protected $m_user;
    protected $m_data;
    protected $m_path;
    protected $m_hits;
    protected $m_created;
    protected $m_comment;
    protected $m_longdesc;
    protected $m_version;
    protected $m_attId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setItemid(0);
        }
        return;
    }
    public function TikiTrackerItemAttachmentsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getAttid()
    {
        return $this->m_attId;
    }
    public function setAttid($value)
    {
        $this->m_attId = $value;
        $this->setOrigAttid($value);
        return;
    }

    public function getItemid()
    {
        return $this->m_itemId;
    }
    public function setItemid($value)
    {
        $this->m_itemId = $value;
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

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
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

    public function getPath()
    {
        return $this->m_path;
    }
    public function setPath($value)
    {
        $this->m_path = $value;
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

    public function getCreated()
    {
        return $this->m_created;
    }
    public function setCreated($value)
    {
        $this->m_created = $value;
        return;
    }

    public function getComment()
    {
        return $this->m_comment;
    }
    public function setComment($value)
    {
        $this->m_comment = $value;
        return;
    }

    public function getLongdesc()
    {
        return $this->m_longdesc;
    }
    public function setLongdesc($value)
    {
        $this->m_longdesc = $value;
        return;
    }

    public function getVersion()
    {
        return $this->m_version;
    }
    public function setVersion($value)
    {
        $this->m_version = $value;
        return;
    }

    public function getOrigAttid()
    {
        return $this->m_attId_Orig;
    }
    public function setOrigAttid($value)
    {
        if (isset($this->m_attId_Orig)) { return; }
        $this->m_attId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setAttid($arrValues['attId']);
        $this->setItemid($arrValues['itemId']);
        $this->setFilename($arrValues['filename']);
        $this->setFiletype($arrValues['filetype']);
        $this->setFilesize($arrValues['filesize']);
        $this->setUser($arrValues['user']);
        $this->setData($arrValues['data']);
        $this->setPath($arrValues['path']);
        $this->setHits($arrValues['hits']);
        $this->setCreated($arrValues['created']);
        $this->setComment($arrValues['comment']);
        $this->setLongdesc($arrValues['longdesc']);
        $this->setVersion($arrValues['version']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'attId':
                    $this->setAttid($val);
                    break;
                case 'itemId':
                    $this->setItemid($val);
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
                case 'user':
                    $this->setUser($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'path':
                    $this->setPath($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'comment':
                    $this->setComment($val);
                    break;
                case 'longdesc':
                    $this->setLongdesc($val);
                    break;
                case 'version':
                    $this->setVersion($val);
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
        $arrValues['attId'] = $this->getAttid();
        $arrValues['itemId'] = $this->getItemid();
        $arrValues['filename'] = $this->getFilename();
        $arrValues['filetype'] = $this->getFiletype();
        $arrValues['filesize'] = $this->getFilesize();
        $arrValues['user'] = $this->getUser();
        $arrValues['data'] = $this->getData();
        $arrValues['path'] = $this->getPath();
        $arrValues['hits'] = $this->getHits();
        $arrValues['created'] = $this->getCreated();
        $arrValues['comment'] = $this->getComment();
        $arrValues['longdesc'] = $this->getLongdesc();
        $arrValues['version'] = $this->getVersion();
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
