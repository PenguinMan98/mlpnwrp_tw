<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiMinicalTopicsBase
{
    protected $m_user;
    protected $m_topicId;
    protected $m_name;
    protected $m_filename;
    protected $m_filetype;
    protected $m_filesize;
    protected $m_data;
    protected $m_path;
    protected $m_isIcon;
    protected $m_topicId_Orig;

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
    public function TikiMinicalTopicsBase($arrData = null)
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

    public function getTopicid()
    {
        return $this->m_topicId;
    }
    public function setTopicid($value)
    {
        $this->m_topicId = $value;
        $this->setOrigTopicid($value);
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

    public function getPath()
    {
        return $this->m_path;
    }
    public function setPath($value)
    {
        $this->m_path = $value;
        return;
    }

    public function getIsicon()
    {
        return $this->m_isIcon;
    }
    public function setIsicon($value)
    {
        $this->m_isIcon = $value;
        return;
    }

    public function getOrigTopicid()
    {
        return $this->m_topicId_Orig;
    }
    public function setOrigTopicid($value)
    {
        if (isset($this->m_topicId_Orig)) { return; }
        $this->m_topicId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setUser($arrValues['user']);
        $this->setTopicid($arrValues['topicId']);
        $this->setName($arrValues['name']);
        $this->setFilename($arrValues['filename']);
        $this->setFiletype($arrValues['filetype']);
        $this->setFilesize($arrValues['filesize']);
        $this->setData($arrValues['data']);
        $this->setPath($arrValues['path']);
        $this->setIsicon($arrValues['isIcon']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'user':
                    $this->setUser($val);
                    break;
                case 'topicId':
                    $this->setTopicid($val);
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
                case 'path':
                    $this->setPath($val);
                    break;
                case 'isIcon':
                    $this->setIsicon($val);
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
        $arrValues['topicId'] = $this->getTopicid();
        $arrValues['name'] = $this->getName();
        $arrValues['filename'] = $this->getFilename();
        $arrValues['filetype'] = $this->getFiletype();
        $arrValues['filesize'] = $this->getFilesize();
        $arrValues['data'] = $this->getData();
        $arrValues['path'] = $this->getPath();
        $arrValues['isIcon'] = $this->getIsicon();
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
