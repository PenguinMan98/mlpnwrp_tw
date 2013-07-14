<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiImagesDataBase
{
    protected $m_imageId;
    protected $m_xsize;
    protected $m_ysize;
    protected $m_type;
    protected $m_filesize;
    protected $m_filetype;
    protected $m_filename;
    protected $m_data;
    protected $m_etag;
    protected $m_imageId_Orig;
    protected $m_xsize_Orig;
    protected $m_ysize_Orig;
    protected $m_type_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiImagesDataBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getImageid()
    {
        return $this->m_imageId;
    }
    public function setImageid($value)
    {
        $this->m_imageId = $value;
        $this->setOrigImageid($value);
        return;
    }

    public function getXsize()
    {
        return $this->m_xsize;
    }
    public function setXsize($value)
    {
        $this->m_xsize = $value;
        $this->setOrigXsize($value);
        return;
    }

    public function getYsize()
    {
        return $this->m_ysize;
    }
    public function setYsize($value)
    {
        $this->m_ysize = $value;
        $this->setOrigYsize($value);
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
        $this->setOrigType($value);
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

    public function getFilename()
    {
        return $this->m_filename;
    }
    public function setFilename($value)
    {
        $this->m_filename = $value;
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

    public function getEtag()
    {
        return $this->m_etag;
    }
    public function setEtag($value)
    {
        $this->m_etag = $value;
        return;
    }

    public function getOrigImageid()
    {
        return $this->m_imageId_Orig;
    }
    public function setOrigImageid($value)
    {
        if (isset($this->m_imageId_Orig)) { return; }
        $this->m_imageId_Orig = $value;
        return;
    }

    public function getOrigXsize()
    {
        return $this->m_xsize_Orig;
    }
    public function setOrigXsize($value)
    {
        if (isset($this->m_xsize_Orig)) { return; }
        $this->m_xsize_Orig = $value;
        return;
    }

    public function getOrigYsize()
    {
        return $this->m_ysize_Orig;
    }
    public function setOrigYsize($value)
    {
        if (isset($this->m_ysize_Orig)) { return; }
        $this->m_ysize_Orig = $value;
        return;
    }

    public function getOrigType()
    {
        return $this->m_type_Orig;
    }
    public function setOrigType($value)
    {
        if (isset($this->m_type_Orig)) { return; }
        $this->m_type_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setImageid($arrValues['imageId']);
        $this->setXsize($arrValues['xsize']);
        $this->setYsize($arrValues['ysize']);
        $this->setType($arrValues['type']);
        $this->setFilesize($arrValues['filesize']);
        $this->setFiletype($arrValues['filetype']);
        $this->setFilename($arrValues['filename']);
        $this->setData($arrValues['data']);
        $this->setEtag($arrValues['etag']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'imageId':
                    $this->setImageid($val);
                    break;
                case 'xsize':
                    $this->setXsize($val);
                    break;
                case 'ysize':
                    $this->setYsize($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'filesize':
                    $this->setFilesize($val);
                    break;
                case 'filetype':
                    $this->setFiletype($val);
                    break;
                case 'filename':
                    $this->setFilename($val);
                    break;
                case 'data':
                    $this->setData($val);
                    break;
                case 'etag':
                    $this->setEtag($val);
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
        $arrValues['imageId'] = $this->getImageid();
        $arrValues['xsize'] = $this->getXsize();
        $arrValues['ysize'] = $this->getYsize();
        $arrValues['type'] = $this->getType();
        $arrValues['filesize'] = $this->getFilesize();
        $arrValues['filetype'] = $this->getFiletype();
        $arrValues['filename'] = $this->getFilename();
        $arrValues['data'] = $this->getData();
        $arrValues['etag'] = $this->getEtag();
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
