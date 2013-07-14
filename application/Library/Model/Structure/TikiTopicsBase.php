<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiTopicsBase
{
    protected $m_topicId;
    protected $m_name;
    protected $m_image_name;
    protected $m_image_type;
    protected $m_image_size;
    protected $m_image_data;
    protected $m_active;
    protected $m_created;
    protected $m_topicId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiTopicsBase($arrData = null)
    {
        $this->__construct($arrData);
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

    public function getImageName()
    {
        return $this->m_image_name;
    }
    public function setImageName($value)
    {
        $this->m_image_name = $value;
        return;
    }

    public function getImageType()
    {
        return $this->m_image_type;
    }
    public function setImageType($value)
    {
        $this->m_image_type = $value;
        return;
    }

    public function getImageSize()
    {
        return $this->m_image_size;
    }
    public function setImageSize($value)
    {
        $this->m_image_size = $value;
        return;
    }

    public function getImageData()
    {
        return $this->m_image_data;
    }
    public function setImageData($value)
    {
        $this->m_image_data = $value;
        return;
    }

    public function getActive()
    {
        return $this->m_active;
    }
    public function setActive($value)
    {
        $this->m_active = $value;
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
        $this->setTopicid($arrValues['topicId']);
        $this->setName($arrValues['name']);
        $this->setImageName($arrValues['image_name']);
        $this->setImageType($arrValues['image_type']);
        $this->setImageSize($arrValues['image_size']);
        $this->setImageData($arrValues['image_data']);
        $this->setActive($arrValues['active']);
        $this->setCreated($arrValues['created']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'topicId':
                    $this->setTopicid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'image_name':
                    $this->setImageName($val);
                    break;
                case 'image_type':
                    $this->setImageType($val);
                    break;
                case 'image_size':
                    $this->setImageSize($val);
                    break;
                case 'image_data':
                    $this->setImageData($val);
                    break;
                case 'active':
                    $this->setActive($val);
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
        $arrValues['topicId'] = $this->getTopicid();
        $arrValues['name'] = $this->getName();
        $arrValues['image_name'] = $this->getImageName();
        $arrValues['image_type'] = $this->getImageType();
        $arrValues['image_size'] = $this->getImageSize();
        $arrValues['image_data'] = $this->getImageData();
        $arrValues['active'] = $this->getActive();
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
