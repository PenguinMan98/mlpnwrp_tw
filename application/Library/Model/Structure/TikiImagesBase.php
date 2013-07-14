<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiImagesBase
{
    protected $m_imageId;
    protected $m_galleryId;
    protected $m_name;
    protected $m_description;
    protected $m_lon;
    protected $m_lat;
    protected $m_created;
    protected $m_user;
    protected $m_hits;
    protected $m_path;
    protected $m_imageId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setGalleryid(0);
            $this->setName('');
            $this->setUser('');
        }
        return;
    }
    public function TikiImagesBase($arrData = null)
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

    public function getGalleryid()
    {
        return $this->m_galleryId;
    }
    public function setGalleryid($value)
    {
        $this->m_galleryId = $value;
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

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
        return;
    }

    public function getLon()
    {
        return $this->m_lon;
    }
    public function setLon($value)
    {
        $this->m_lon = $value;
        return;
    }

    public function getLat()
    {
        return $this->m_lat;
    }
    public function setLat($value)
    {
        $this->m_lat = $value;
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

    public function getUser()
    {
        return $this->m_user;
    }
    public function setUser($value)
    {
        $this->m_user = $value;
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

    public function getPath()
    {
        return $this->m_path;
    }
    public function setPath($value)
    {
        $this->m_path = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setImageid($arrValues['imageId']);
        $this->setGalleryid($arrValues['galleryId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setLon($arrValues['lon']);
        $this->setLat($arrValues['lat']);
        $this->setCreated($arrValues['created']);
        $this->setUser($arrValues['user']);
        $this->setHits($arrValues['hits']);
        $this->setPath($arrValues['path']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'imageId':
                    $this->setImageid($val);
                    break;
                case 'galleryId':
                    $this->setGalleryid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'lon':
                    $this->setLon($val);
                    break;
                case 'lat':
                    $this->setLat($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'user':
                    $this->setUser($val);
                    break;
                case 'hits':
                    $this->setHits($val);
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
        $arrValues['imageId'] = $this->getImageid();
        $arrValues['galleryId'] = $this->getGalleryid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['lon'] = $this->getLon();
        $arrValues['lat'] = $this->getLat();
        $arrValues['created'] = $this->getCreated();
        $arrValues['user'] = $this->getUser();
        $arrValues['hits'] = $this->getHits();
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
