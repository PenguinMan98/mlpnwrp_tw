<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_CharacterLoginLogBase
{
    protected $m_character_login_log_id;
    protected $m_character_id;
    protected $m_handle;
    protected $m_user_id;
    protected $m_user_ip;
    protected $m_login_time;
    protected $m_character_login_log_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function CharacterLoginLogBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getCharacterLoginLogId()
    {
        return $this->m_character_login_log_id;
    }
    public function setCharacterLoginLogId($value)
    {
        $this->m_character_login_log_id = $value;
        $this->setOrigCharacterLoginLogId($value);
        return;
    }

    public function getCharacterId()
    {
        return $this->m_character_id;
    }
    public function setCharacterId($value)
    {
        $this->m_character_id = $value;
        return;
    }

    public function getHandle()
    {
        return $this->m_handle;
    }
    public function setHandle($value)
    {
        $this->m_handle = $value;
        return;
    }

    public function getUserId()
    {
        return $this->m_user_id;
    }
    public function setUserId($value)
    {
        $this->m_user_id = $value;
        return;
    }

    public function getUserIp()
    {
        return $this->m_user_ip;
    }
    public function setUserIp($value)
    {
        $this->m_user_ip = $value;
        return;
    }

    public function getLoginTime()
    {
        return $this->m_login_time;
    }
    public function setLoginTime($value)
    {
        $this->m_login_time = $value;
        return;
    }

    public function getOrigCharacterLoginLogId()
    {
        return $this->m_character_login_log_id_Orig;
    }
    public function setOrigCharacterLoginLogId($value)
    {
        if (isset($this->m_character_login_log_id_Orig)) { return; }
        $this->m_character_login_log_id_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setCharacterLoginLogId($arrValues['character_login_log_id']);
        $this->setCharacterId($arrValues['character_id']);
        $this->setHandle($arrValues['handle']);
        $this->setUserId($arrValues['user_id']);
        $this->setUserIp($arrValues['user_ip']);
        $this->setLoginTime($arrValues['login_time']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'character_login_log_id':
                    $this->setCharacterLoginLogId($val);
                    break;
                case 'character_id':
                    $this->setCharacterId($val);
                    break;
                case 'handle':
                    $this->setHandle($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'user_ip':
                    $this->setUserIp($val);
                    break;
                case 'login_time':
                    $this->setLoginTime($val);
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
        $arrValues['character_login_log_id'] = $this->getCharacterLoginLogId();
        $arrValues['character_id'] = $this->getCharacterId();
        $arrValues['handle'] = $this->getHandle();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['user_ip'] = $this->getUserIp();
        $arrValues['login_time'] = $this->getLoginTime();
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
