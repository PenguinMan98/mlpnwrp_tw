<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiForumAttachmentsBase
{
    protected $m_attId;
    protected $m_threadId;
    protected $m_qId;
    protected $m_forumId;
    protected $m_filename;
    protected $m_filetype;
    protected $m_filesize;
    protected $m_data;
    protected $m_dir;
    protected $m_created;
    protected $m_path;
    protected $m_attId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setThreadid(0);
            $this->setQid(0);
        }
        return;
    }
    public function TikiForumAttachmentsBase($arrData = null)
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

    public function getThreadid()
    {
        return $this->m_threadId;
    }
    public function setThreadid($value)
    {
        $this->m_threadId = $value;
        return;
    }

    public function getQid()
    {
        return $this->m_qId;
    }
    public function setQid($value)
    {
        $this->m_qId = $value;
        return;
    }

    public function getForumid()
    {
        return $this->m_forumId;
    }
    public function setForumid($value)
    {
        $this->m_forumId = $value;
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

    public function getDir()
    {
        return $this->m_dir;
    }
    public function setDir($value)
    {
        $this->m_dir = $value;
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

    public function getPath()
    {
        return $this->m_path;
    }
    public function setPath($value)
    {
        $this->m_path = $value;
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
        $this->setThreadid($arrValues['threadId']);
        $this->setQid($arrValues['qId']);
        $this->setForumid($arrValues['forumId']);
        $this->setFilename($arrValues['filename']);
        $this->setFiletype($arrValues['filetype']);
        $this->setFilesize($arrValues['filesize']);
        $this->setData($arrValues['data']);
        $this->setDir($arrValues['dir']);
        $this->setCreated($arrValues['created']);
        $this->setPath($arrValues['path']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'attId':
                    $this->setAttid($val);
                    break;
                case 'threadId':
                    $this->setThreadid($val);
                    break;
                case 'qId':
                    $this->setQid($val);
                    break;
                case 'forumId':
                    $this->setForumid($val);
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
                case 'dir':
                    $this->setDir($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'path':
                    $this->setPath($val);
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
        $arrValues['threadId'] = $this->getThreadid();
        $arrValues['qId'] = $this->getQid();
        $arrValues['forumId'] = $this->getForumid();
        $arrValues['filename'] = $this->getFilename();
        $arrValues['filetype'] = $this->getFiletype();
        $arrValues['filesize'] = $this->getFilesize();
        $arrValues['data'] = $this->getData();
        $arrValues['dir'] = $this->getDir();
        $arrValues['created'] = $this->getCreated();
        $arrValues['path'] = $this->getPath();
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
