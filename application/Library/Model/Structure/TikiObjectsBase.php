<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiObjectsBase
{
    protected $m_objectId;
    protected $m_type;
    protected $m_itemId;
    protected $m_description;
    protected $m_created;
    protected $m_name;
    protected $m_href;
    protected $m_hits;
    protected $m_comments_locked;
    protected $m_objectId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setCommentsLocked('n');
        }
        return;
    }
    public function TikiObjectsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getObjectid()
    {
        return $this->m_objectId;
    }
    public function setObjectid($value)
    {
        $this->m_objectId = $value;
        $this->setOrigObjectid($value);
        return;
    }

    public function getType()
    {
        return $this->m_type;
    }
    public function setType($value)
    {
        $this->m_type = $value;
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

    public function getDescription()
    {
        return $this->m_description;
    }
    public function setDescription($value)
    {
        $this->m_description = $value;
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

    public function getName()
    {
        return $this->m_name;
    }
    public function setName($value)
    {
        $this->m_name = $value;
        return;
    }

    public function getHref()
    {
        return $this->m_href;
    }
    public function setHref($value)
    {
        $this->m_href = $value;
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

    public function getCommentsLocked()
    {
        return $this->m_comments_locked;
    }
    public function setCommentsLocked($value)
    {
        $this->m_comments_locked = $value;
        return;
    }

    public function getOrigObjectid()
    {
        return $this->m_objectId_Orig;
    }
    public function setOrigObjectid($value)
    {
        if (isset($this->m_objectId_Orig)) { return; }
        $this->m_objectId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setObjectid($arrValues['objectId']);
        $this->setType($arrValues['type']);
        $this->setItemid($arrValues['itemId']);
        $this->setDescription($arrValues['description']);
        $this->setCreated($arrValues['created']);
        $this->setName($arrValues['name']);
        $this->setHref($arrValues['href']);
        $this->setHits($arrValues['hits']);
        $this->setCommentsLocked($arrValues['comments_locked']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'objectId':
                    $this->setObjectid($val);
                    break;
                case 'type':
                    $this->setType($val);
                    break;
                case 'itemId':
                    $this->setItemid($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'href':
                    $this->setHref($val);
                    break;
                case 'hits':
                    $this->setHits($val);
                    break;
                case 'comments_locked':
                    $this->setCommentsLocked($val);
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
        $arrValues['objectId'] = $this->getObjectid();
        $arrValues['type'] = $this->getType();
        $arrValues['itemId'] = $this->getItemid();
        $arrValues['description'] = $this->getDescription();
        $arrValues['created'] = $this->getCreated();
        $arrValues['name'] = $this->getName();
        $arrValues['href'] = $this->getHref();
        $arrValues['hits'] = $this->getHits();
        $arrValues['comments_locked'] = $this->getCommentsLocked();
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
