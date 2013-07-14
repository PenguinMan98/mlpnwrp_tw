<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiGalleriesScalesBase
{
    protected $m_galleryId;
    protected $m_scale;
    protected $m_galleryId_Orig;
    protected $m_scale_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiGalleriesScalesBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getGalleryid()
    {
        return $this->m_galleryId;
    }
    public function setGalleryid($value)
    {
        $this->m_galleryId = $value;
        $this->setOrigGalleryid($value);
        return;
    }

    public function getScale()
    {
        return $this->m_scale;
    }
    public function setScale($value)
    {
        $this->m_scale = $value;
        $this->setOrigScale($value);
        return;
    }

    public function getOrigGalleryid()
    {
        return $this->m_galleryId_Orig;
    }
    public function setOrigGalleryid($value)
    {
        if (isset($this->m_galleryId_Orig)) { return; }
        $this->m_galleryId_Orig = $value;
        return;
    }

    public function getOrigScale()
    {
        return $this->m_scale_Orig;
    }
    public function setOrigScale($value)
    {
        if (isset($this->m_scale_Orig)) { return; }
        $this->m_scale_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setGalleryid($arrValues['galleryId']);
        $this->setScale($arrValues['scale']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'galleryId':
                    $this->setGalleryid($val);
                    break;
                case 'scale':
                    $this->setScale($val);
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
        $arrValues['galleryId'] = $this->getGalleryid();
        $arrValues['scale'] = $this->getScale();
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
