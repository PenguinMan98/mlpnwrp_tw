<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiTrackersBase
{
    protected $m_trackerId;
    protected $m_name;
    protected $m_description;
    protected $m_descriptionIsParsed;
    protected $m_created;
    protected $m_lastModif;
    protected $m_items;
    protected $m_trackerId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setDescriptionisparsed(0);
        }
        return;
    }
    public function TikiTrackersBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getTrackerid()
    {
        return $this->m_trackerId;
    }
    public function setTrackerid($value)
    {
        $this->m_trackerId = $value;
        $this->setOrigTrackerid($value);
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

    public function getDescriptionisparsed()
    {
        return $this->m_descriptionIsParsed;
    }
    public function setDescriptionisparsed($value)
    {
        $this->m_descriptionIsParsed = $value;
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

    public function getLastmodif()
    {
        return $this->m_lastModif;
    }
    public function setLastmodif($value)
    {
        $this->m_lastModif = $value;
        return;
    }

    public function getItems()
    {
        return $this->m_items;
    }
    public function setItems($value)
    {
        $this->m_items = $value;
        return;
    }

    public function getOrigTrackerid()
    {
        return $this->m_trackerId_Orig;
    }
    public function setOrigTrackerid($value)
    {
        if (isset($this->m_trackerId_Orig)) { return; }
        $this->m_trackerId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setTrackerid($arrValues['trackerId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setDescriptionisparsed($arrValues['descriptionIsParsed']);
        $this->setCreated($arrValues['created']);
        $this->setLastmodif($arrValues['lastModif']);
        $this->setItems($arrValues['items']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'trackerId':
                    $this->setTrackerid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'descriptionIsParsed':
                    $this->setDescriptionisparsed($val);
                    break;
                case 'created':
                    $this->setCreated($val);
                    break;
                case 'lastModif':
                    $this->setLastmodif($val);
                    break;
                case 'items':
                    $this->setItems($val);
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
        $arrValues['trackerId'] = $this->getTrackerid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['descriptionIsParsed'] = $this->getDescriptionisparsed();
        $arrValues['created'] = $this->getCreated();
        $arrValues['lastModif'] = $this->getLastmodif();
        $arrValues['items'] = $this->getItems();
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
