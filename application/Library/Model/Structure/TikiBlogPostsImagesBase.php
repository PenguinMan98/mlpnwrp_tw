<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiBlogPostsImagesBase
{
    protected $m_imgId;
    protected $m_postId;
    protected $m_filename;
    protected $m_filetype;
    protected $m_filesize;
    protected $m_data;
    protected $m_imgId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setPostid(0);
        }
        return;
    }
    public function TikiBlogPostsImagesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getImgid()
    {
        return $this->m_imgId;
    }
    public function setImgid($value)
    {
        $this->m_imgId = $value;
        $this->setOrigImgid($value);
        return;
    }

    public function getPostid()
    {
        return $this->m_postId;
    }
    public function setPostid($value)
    {
        $this->m_postId = $value;
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

    public function getOrigImgid()
    {
        return $this->m_imgId_Orig;
    }
    public function setOrigImgid($value)
    {
        if (isset($this->m_imgId_Orig)) { return; }
        $this->m_imgId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setImgid($arrValues['imgId']);
        $this->setPostid($arrValues['postId']);
        $this->setFilename($arrValues['filename']);
        $this->setFiletype($arrValues['filetype']);
        $this->setFilesize($arrValues['filesize']);
        $this->setData($arrValues['data']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'imgId':
                    $this->setImgid($val);
                    break;
                case 'postId':
                    $this->setPostid($val);
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
                default:
                    break;
            }
        }
        return;
    }

    public function getAsArray()
    {
        $arrValues = array();
        $arrValues['imgId'] = $this->getImgid();
        $arrValues['postId'] = $this->getPostid();
        $arrValues['filename'] = $this->getFilename();
        $arrValues['filetype'] = $this->getFiletype();
        $arrValues['filesize'] = $this->getFilesize();
        $arrValues['data'] = $this->getData();
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
