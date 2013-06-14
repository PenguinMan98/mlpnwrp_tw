<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_CharacterUserBase
{
    protected $m_character_id;
    protected $m_user_id;
    protected $m_character_id_Orig;
    protected $m_user_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function CharacterUserBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCharacterId()
    {
        return $this->m_character_id;
    }
    public function setCharacterId($value)
    {
        $this->m_character_id = $value;
        $this->setOrigCharacterId($value);
        return;
    }

    public function getUserId()
    {
        return $this->m_user_id;
    }
    public function setUserId($value)
    {
        $this->m_user_id = $value;
        $this->setOrigUserId($value);
        return;
    }

    public function getOrigCharacterId()
    {
        return $this->m_character_id_Orig;
    }
    public function setOrigCharacterId($value)
    {
        if (isset($this->m_character_id_Orig)) { return; }
        $this->m_character_id_Orig = $value;
        return;
    }

    public function getOrigUserId()
    {
        return $this->m_user_id_Orig;
    }
    public function setOrigUserId($value)
    {
        if (isset($this->m_user_id_Orig)) { return; }
        $this->m_user_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCharacterId($arrValues['character_id']);
        $this->setUserId($arrValues['user_id']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'character_id':
                    $this->setCharacterId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
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
        $arrValues['character_id'] = $this->getCharacterId();
        $arrValues['user_id'] = $this->getUserId();
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
