<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
class Model_Structure_CharacterBase
{
    protected $m_character_id;
    protected $m_creator_user_id;
    protected $m_name;
    protected $m_bio;
    protected $m_status;
    protected $m_logged_in;
    protected $m_born_female;
    protected $m_currently_female;
    protected $m_image;
    protected $m_icon;
    protected $m_chat_name_color;
    protected $m_chat_name_formatted;
    protected $m_chat_text_color;
    protected $m_player_notes;
    protected $m_player_private_notes;
    protected $m_chat_status_id;
    protected $m_character_race_id;
    protected $m_character_race_note;
    protected $m_character_age_id;
    protected $m_created_date;
    protected $m_chat_room_id;
    protected $m_last_activity;
    protected $m_cutie_mark;
    protected $m_gender;
    protected $m_last_status_request;
    protected $m_profile_html;
    protected $m_profile_css;
    protected $m_html_override;
    protected $m_variables;
    protected $m_character_id_Orig;

    public function __construct($arrData = null)
    {
        if (isset($arrData)) {
            $this->loadFromArray($arrData);
        }
        else {
            $this->setLoggedIn(0);
            $this->setChatNameColor('#ffffff');
            $this->setChatTextColor('#ffffff');
            $this->setCreatedDate('CURRENT_TIMESTAMP');
        }
        return;
    }
    public function CharacterBase($arrData = null)
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

    public function getCreatorUserId()
    {
        return $this->m_creator_user_id;
    }
    public function setCreatorUserId($value)
    {
        $this->m_creator_user_id = $value;
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

    public function getBio()
    {
        return $this->m_bio;
    }
    public function setBio($value)
    {
        $this->m_bio = $value;
        return;
    }

    public function getStatus()
    {
        return $this->m_status;
    }
    public function setStatus($value)
    {
        $this->m_status = $value;
        return;
    }

    public function getLoggedIn()
    {
        return $this->m_logged_in;
    }
    public function setLoggedIn($value)
    {
        $this->m_logged_in = $value;
        return;
    }

    public function getBornFemale()
    {
        return $this->m_born_female;
    }
    public function setBornFemale($value)
    {
        $this->m_born_female = $value;
        return;
    }

    public function getCurrentlyFemale()
    {
        return $this->m_currently_female;
    }
    public function setCurrentlyFemale($value)
    {
        $this->m_currently_female = $value;
        return;
    }

    public function getImage()
    {
        return $this->m_image;
    }
    public function setImage($value)
    {
        $this->m_image = $value;
        return;
    }

    public function getIcon()
    {
        return $this->m_icon;
    }
    public function setIcon($value)
    {
        $this->m_icon = $value;
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

    public function getChatNameFormatted()
    {
        return $this->m_chat_name_formatted;
    }
    public function setChatNameFormatted($value)
    {
        $this->m_chat_name_formatted = $value;
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

    public function getPlayerNotes()
    {
        return $this->m_player_notes;
    }
    public function setPlayerNotes($value)
    {
        $this->m_player_notes = $value;
        return;
    }

    public function getPlayerPrivateNotes()
    {
        return $this->m_player_private_notes;
    }
    public function setPlayerPrivateNotes($value)
    {
        $this->m_player_private_notes = $value;
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

    public function getCharacterRaceId()
    {
        return $this->m_character_race_id;
    }
    public function setCharacterRaceId($value)
    {
        $this->m_character_race_id = $value;
        return;
    }

    public function getCharacterRaceNote()
    {
        return $this->m_character_race_note;
    }
    public function setCharacterRaceNote($value)
    {
        $this->m_character_race_note = $value;
        return;
    }

    public function getCharacterAgeId()
    {
        return $this->m_character_age_id;
    }
    public function setCharacterAgeId($value)
    {
        $this->m_character_age_id = $value;
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

    public function getChatRoomId()
    {
        return $this->m_chat_room_id;
    }
    public function setChatRoomId($value)
    {
        $this->m_chat_room_id = $value;
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

    public function getCutieMark()
    {
        return $this->m_cutie_mark;
    }
    public function setCutieMark($value)
    {
        $this->m_cutie_mark = $value;
        return;
    }

    public function getGender()
    {
        return $this->m_gender;
    }
    public function setGender($value)
    {
        $this->m_gender = $value;
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

    public function getProfileHtml()
    {
        return $this->m_profile_html;
    }
    public function setProfileHtml($value)
    {
        $this->m_profile_html = $value;
        return;
    }

    public function getProfileCss()
    {
        return $this->m_profile_css;
    }
    public function setProfileCss($value)
    {
        $this->m_profile_css = $value;
        return;
    }

    public function getHtmlOverride()
    {
        return $this->m_html_override;
    }
    public function setHtmlOverride($value)
    {
        $this->m_html_override = $value;
        return;
    }

    public function getVariables()
    {
        return $this->m_variables;
    }
    public function setVariables($value)
    {
        $this->m_variables = $value;
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

    public function loadFromArray($arrValues)
    {
        $this->setCharacterId($arrValues['character_id']);
        $this->setCreatorUserId($arrValues['creator_user_id']);
        $this->setName($arrValues['name']);
        $this->setBio($arrValues['bio']);
        $this->setStatus($arrValues['status']);
        $this->setLoggedIn($arrValues['logged_in']);
        $this->setBornFemale($arrValues['born_female']);
        $this->setCurrentlyFemale($arrValues['currently_female']);
        $this->setImage($arrValues['image']);
        $this->setIcon($arrValues['icon']);
        $this->setChatNameColor($arrValues['chat_name_color']);
        $this->setChatNameFormatted($arrValues['chat_name_formatted']);
        $this->setChatTextColor($arrValues['chat_text_color']);
        $this->setPlayerNotes($arrValues['player_notes']);
        $this->setPlayerPrivateNotes($arrValues['player_private_notes']);
        $this->setChatStatusId($arrValues['chat_status_id']);
        $this->setCharacterRaceId($arrValues['character_race_id']);
        $this->setCharacterRaceNote($arrValues['character_race_note']);
        $this->setCharacterAgeId($arrValues['character_age_id']);
        $this->setCreatedDate($arrValues['created_date']);
        $this->setChatRoomId($arrValues['chat_room_id']);
        $this->setLastActivity($arrValues['last_activity']);
        $this->setCutieMark($arrValues['cutie_mark']);
        $this->setGender($arrValues['gender']);
        $this->setLastStatusRequest($arrValues['last_status_request']);
        $this->setProfileHtml($arrValues['profile_html']);
        $this->setProfileCss($arrValues['profile_css']);
        $this->setHtmlOverride($arrValues['html_override']);
        $this->setVariables($arrValues['variables']);
        return;
    }

    public function updateFromArray($arrValues)
    {
        foreach ($arrValues as $key=>$val) {
            switch ($key) {
                case 'character_id':
                    $this->setCharacterId($val);
                    break;
                case 'creator_user_id':
                    $this->setCreatorUserId($val);
                    break;
                case 'name':
                    $this->setName($val);
                    break;
                case 'bio':
                    $this->setBio($val);
                    break;
                case 'status':
                    $this->setStatus($val);
                    break;
                case 'logged_in':
                    $this->setLoggedIn($val);
                    break;
                case 'born_female':
                    $this->setBornFemale($val);
                    break;
                case 'currently_female':
                    $this->setCurrentlyFemale($val);
                    break;
                case 'image':
                    $this->setImage($val);
                    break;
                case 'icon':
                    $this->setIcon($val);
                    break;
                case 'chat_name_color':
                    $this->setChatNameColor($val);
                    break;
                case 'chat_name_formatted':
                    $this->setChatNameFormatted($val);
                    break;
                case 'chat_text_color':
                    $this->setChatTextColor($val);
                    break;
                case 'player_notes':
                    $this->setPlayerNotes($val);
                    break;
                case 'player_private_notes':
                    $this->setPlayerPrivateNotes($val);
                    break;
                case 'chat_status_id':
                    $this->setChatStatusId($val);
                    break;
                case 'character_race_id':
                    $this->setCharacterRaceId($val);
                    break;
                case 'character_race_note':
                    $this->setCharacterRaceNote($val);
                    break;
                case 'character_age_id':
                    $this->setCharacterAgeId($val);
                    break;
                case 'created_date':
                    $this->setCreatedDate($val);
                    break;
                case 'chat_room_id':
                    $this->setChatRoomId($val);
                    break;
                case 'last_activity':
                    $this->setLastActivity($val);
                    break;
                case 'cutie_mark':
                    $this->setCutieMark($val);
                    break;
                case 'gender':
                    $this->setGender($val);
                    break;
                case 'last_status_request':
                    $this->setLastStatusRequest($val);
                    break;
                case 'profile_html':
                    $this->setProfileHtml($val);
                    break;
                case 'profile_css':
                    $this->setProfileCss($val);
                    break;
                case 'html_override':
                    $this->setHtmlOverride($val);
                    break;
                case 'variables':
                    $this->setVariables($val);
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
        $arrValues['creator_user_id'] = $this->getCreatorUserId();
        $arrValues['name'] = $this->getName();
        $arrValues['bio'] = $this->getBio();
        $arrValues['status'] = $this->getStatus();
        $arrValues['logged_in'] = $this->getLoggedIn();
        $arrValues['born_female'] = $this->getBornFemale();
        $arrValues['currently_female'] = $this->getCurrentlyFemale();
        $arrValues['image'] = $this->getImage();
        $arrValues['icon'] = $this->getIcon();
        $arrValues['chat_name_color'] = $this->getChatNameColor();
        $arrValues['chat_name_formatted'] = $this->getChatNameFormatted();
        $arrValues['chat_text_color'] = $this->getChatTextColor();
        $arrValues['player_notes'] = $this->getPlayerNotes();
        $arrValues['player_private_notes'] = $this->getPlayerPrivateNotes();
        $arrValues['chat_status_id'] = $this->getChatStatusId();
        $arrValues['character_race_id'] = $this->getCharacterRaceId();
        $arrValues['character_race_note'] = $this->getCharacterRaceNote();
        $arrValues['character_age_id'] = $this->getCharacterAgeId();
        $arrValues['created_date'] = $this->getCreatedDate();
        $arrValues['chat_room_id'] = $this->getChatRoomId();
        $arrValues['last_activity'] = $this->getLastActivity();
        $arrValues['cutie_mark'] = $this->getCutieMark();
        $arrValues['gender'] = $this->getGender();
        $arrValues['last_status_request'] = $this->getLastStatusRequest();
        $arrValues['profile_html'] = $this->getProfileHtml();
        $arrValues['profile_css'] = $this->getProfileCss();
        $arrValues['html_override'] = $this->getHtmlOverride();
        $arrValues['variables'] = $this->getVariables();
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
