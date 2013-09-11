<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_GuestUsersBase
{
    protected $m_handle;
    protected $m_chat_room_id;
    protected $m_user_id;
    protected $m_created_date;
    protected $m_guest_ip;
    protected $m_chat_name_color;
    protected $m_chat_text_color;
    protected $m_chat_status_id;
    protected $m_last_activity;
    protected $m_last_status_request;
    protected $m_handle_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setCreatedDate('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function GuestUsersBase($arrData = null)
    {
        $this->__construct($arrData);
        return;
    }

    public function getHandle()
    {
        return $this->m_handle;
    }
    public function setHandle($value)
    {
        $this->m_handle = $value;
        $this->setOrigHandle($value);
        return;
    }

    public function getChatRoomId()
    {
        return $this->m_chat_room_id;
    }
    public function setChatRoomId($value)
    {
        $this->m_chat_room_id = $value;
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

    public function getCreatedDate()
    {
        return $this->m_created_date;
    }
    public function setCreatedDate($value)
    {
        $this->m_created_date = $value;
        return;
    }

    public function getGuestIp()
    {
        return $this->m_guest_ip;
    }
    public function setGuestIp($value)
    {
        $this->m_guest_ip = $value;
        return;
    }

    public function getChatNameColor()
    {
        return $this->m_chat_name_color;
    }
    public function setChatNameColor($value)
    {
        $this->m_chat_name_color = $value;
        return;
    }

    public function getChatTextColor()
    {
        return $this->m_chat_text_color;
    }
    public function setChatTextColor($value)
    {
        $this->m_chat_text_color = $value;
        return;
    }

    public function getChatStatusId()
    {
        return $this->m_chat_status_id;
    }
    public function setChatStatusId($value)
    {
        $this->m_chat_status_id = $value;
        return;
    }

    public function getLastActivity()
    {
        return $this->m_last_activity;
    }
    public function setLastActivity($value)
    {
        $this->m_last_activity = $value;
        return;
    }

    public function getLastStatusRequest()
    {
        return $this->m_last_status_request;
    }
    public function setLastStatusRequest($value)
    {
        $this->m_last_status_request = $value;
        return;
    }

    public function getOrigHandle()
    {
        return $this->m_handle_Orig;
    }
    public function setOrigHandle($value)
    {
        if (isset($this->m_handle_Orig)) { return; }
        $this->m_handle_Orig = $value;
        return;
    }

    public function loadFromArray($arrValues)
    {
        $this->setHandle($arrValues['handle']);
        $this->setChatRoomId($arrValues['chat_room_id']);
        $this->setUserId($arrValues['user_id']);
        $this->setCreatedDate($arrValues['created_date']);
        $this->setGuestIp($arrValues['guest_ip']);
        $this->setChatNameColor($arrValues['chat_name_color']);
        $this->setChatTextColor($arrValues['chat_text_color']);
        $this->setChatStatusId($arrValues['chat_status_id']);
        $this->setLastActivity($arrValues['last_activity']);
        $this->setLastStatusRequest($arrValues['last_status_request']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'handle':
                    $this->setHandle($val);
                    break;
                case 'chat_room_id':
                    $this->setChatRoomId($val);
                    break;
                case 'user_id':
                    $this->setUserId($val);
                    break;
                case 'created_date':
                    $this->setCreatedDate($val);
                    break;
                case 'guest_ip':
                    $this->setGuestIp($val);
                    break;
                case 'chat_name_color':
                    $this->setChatNameColor($val);
                    break;
                case 'chat_text_color':
                    $this->setChatTextColor($val);
                    break;
                case 'chat_status_id':
                    $this->setChatStatusId($val);
                    break;
                case 'last_activity':
                    $this->setLastActivity($val);
                    break;
                case 'last_status_request':
                    $this->setLastStatusRequest($val);
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
        $arrValues['handle'] = $this->getHandle();
        $arrValues['chat_room_id'] = $this->getChatRoomId();
        $arrValues['user_id'] = $this->getUserId();
        $arrValues['created_date'] = $this->getCreatedDate();
        $arrValues['guest_ip'] = $this->getGuestIp();
        $arrValues['chat_name_color'] = $this->getChatNameColor();
        $arrValues['chat_text_color'] = $this->getChatTextColor();
        $arrValues['chat_status_id'] = $this->getChatStatusId();
        $arrValues['last_activity'] = $this->getLastActivity();
        $arrValues['last_status_request'] = $this->getLastStatusRequest();
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
