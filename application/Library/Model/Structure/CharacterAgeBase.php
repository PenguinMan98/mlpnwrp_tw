<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_CharacterAgeBase
{
    protected $m_character_age_id;
    protected $m_name;
    protected $m_adult;
    protected $m_description;
    protected $m_character_age_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function CharacterAgeBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCharacterAgeId()
    {
        return $this->m_character_age_id;
    }
    public function setCharacterAgeId($value)
    {
        $this->m_character_age_id = $value;
        $this->setOrigCharacterAgeId($value);
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

    public function getAdult()
    {
        return $this->m_adult;
    }
    public function setAdult($value)
    {
        $this->m_adult = $value;
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

    public function getOrigCharacterAgeId()
    {
        return $this->m_character_age_id_Orig;
    }
    public function setOrigCharacterAgeId($value)
    {
        if (isset($this->m_character_age_id_Orig)) { return; }
        $this->m_character_age_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCharacterAgeId($arrValues['character_age_id']);
        $this->setName($arrValues['name']);
        $this->setAdult($arrValues['adult']);
        $this->setDescription($arrValues['description']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'character_age_id':
                    $this->setCharacterAgeId($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'adult':
                    $this->setAdult($val);
                    break;
                case 'description':
                    $this->setDescription($val);
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
        $arrValues['character_age_id'] = $this->getCharacterAgeId();
        $arrValues['name'] = $this->getName();
        $arrValues['adult'] = $this->getAdult();
        $arrValues['description'] = $this->getDescription();
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
