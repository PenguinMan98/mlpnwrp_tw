<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_CharacterRaceBase
{
    protected $m_character_race_id;
    protected $m_name;
    protected $m_description;
    protected $m_restricted;
    protected $m_character_race_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setRestricted(1);
        }
        return;
    }
    public function CharacterRaceBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCharacterRaceId()
    {
        return $this->m_character_race_id;
    }
    public function setCharacterRaceId($value)
    {
        $this->m_character_race_id = $value;
        $this->setOrigCharacterRaceId($value);
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

    public function getRestricted()
    {
        return $this->m_restricted;
    }
    public function setRestricted($value)
    {
        $this->m_restricted = $value;
        return;
    }

    public function getOrigCharacterRaceId()
    {
        return $this->m_character_race_id_Orig;
    }
    public function setOrigCharacterRaceId($value)
    {
        if (isset($this->m_character_race_id_Orig)) { return; }
        $this->m_character_race_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCharacterRaceId($arrValues['character_race_id']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setRestricted($arrValues['restricted']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'character_race_id':
                    $this->setCharacterRaceId($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'restricted':
                    $this->setRestricted($val);
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
        $arrValues['character_race_id'] = $this->getCharacterRaceId();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['restricted'] = $this->getRestricted();
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
