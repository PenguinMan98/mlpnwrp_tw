<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_TikiChatChannelsBase
{
    protected $m_channelId;
    protected $m_name;
    protected $m_description;
    protected $m_max_users;
    protected $m_mode;
    protected $m_moderator;
    protected $m_active;
    protected $m_refresh;
    protected $m_channelId_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
        }
        return;
    }
    public function TikiChatChannelsBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getChannelid()
    {
        return $this->m_channelId;
    }
    public function setChannelid($value)
    {
        $this->m_channelId = $value;
        $this->setOrigChannelid($value);
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

    public function getMaxUsers()
    {
        return $this->m_max_users;
    }
    public function setMaxUsers($value)
    {
        $this->m_max_users = $value;
        return;
    }

    public function getMode()
    {
        return $this->m_mode;
    }
    public function setMode($value)
    {
        $this->m_mode = $value;
        return;
    }

    public function getModerator()
    {
        return $this->m_moderator;
    }
    public function setModerator($value)
    {
        $this->m_moderator = $value;
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

    public function getRefresh()
    {
        return $this->m_refresh;
    }
    public function setRefresh($value)
    {
        $this->m_refresh = $value;
        return;
    }

    public function getOrigChannelid()
    {
        return $this->m_channelId_Orig;
    }
    public function setOrigChannelid($value)
    {
        if (isset($this->m_channelId_Orig)) { return; }
        $this->m_channelId_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setChannelid($arrValues['channelId']);
        $this->setName($arrValues['name']);
        $this->setDescription($arrValues['description']);
        $this->setMaxUsers($arrValues['max_users']);
        $this->setMode($arrValues['mode']);
        $this->setModerator($arrValues['moderator']);
        $this->setActive($arrValues['active']);
        $this->setRefresh($arrValues['refresh']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'channelId':
                    $this->setChannelid($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'description':
                    $this->setDescription($val);
                    break;
                case 'max_users':
                    $this->setMaxUsers($val);
                    break;
                case 'mode':
                    $this->setMode($val);
                    break;
                case 'moderator':
                    $this->setModerator($val);
                    break;
                case 'active':
                    $this->setActive($val);
                    break;
                case 'refresh':
                    $this->setRefresh($val);
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
        $arrValues['channelId'] = $this->getChannelid();
        $arrValues['name'] = $this->getName();
        $arrValues['description'] = $this->getDescription();
        $arrValues['max_users'] = $this->getMaxUsers();
        $arrValues['mode'] = $this->getMode();
        $arrValues['moderator'] = $this->getModerator();
        $arrValues['active'] = $this->getActive();
        $arrValues['refresh'] = $this->getRefresh();
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
