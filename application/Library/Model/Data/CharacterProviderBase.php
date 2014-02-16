<?php
/**
* AUTO-GENERATED
* DO NOT EDIT
*/
require_once CORE_ROOT . 'DAO.php';
class Model_Data_CharacterProviderBase
{
    protected function getOneFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            if (count($arrResults) > 0) {
                return new Model_Structure_Character($arrResults[0]);
            }
        }
        return null;
    }

    protected function getArrayFromQuery($strSql, $params)
    {
        $arrResults = array();
        $arrErrors = array();
        if (DAO::getAssoc($strSql, $params, $arrResults, $arrErrors)) {
            $arrRecordList = array();
            foreach ($arrResults as $arrRecord) {
                $arrRecordList[] = new Model_Structure_Character($arrRecord);
            }
            return $arrRecordList;
        }
        return null;
    }

    public function getOneByPk($character_id)
    {
        $strSql = 'SELECT * FROM `character` WHERE character_id=?';
        $params = array($character_id);
        return Model_Data_CharacterProvider::getOneFromQuery($strSql, $params);
    }

    public function insertOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' INSERT INTO `character` (
            character_id,
            creator_user_id,
            name,
            bio,
            status,
            logged_in,
            born_female,
            currently_female,
            image,
            icon,
            chat_name_color,
            chat_name_formatted,
            chat_text_color,
            player_notes,
            player_private_notes,
            chat_status_id,
            character_race_id,
            character_race_note,
            character_age_id,
            created_date,
            chat_room_id,
            last_activity,
            cutie_mark,
            gender,
            last_status_request,
        	profile_html,
        	profile_css,
        	html_override,
        	variables
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCreatorUserId(),
            $objRecord->getName(),
            $objRecord->getBio(),
            $objRecord->getStatus(),
            $objRecord->getLoggedIn(),
            $objRecord->getBornFemale(),
            $objRecord->getCurrentlyFemale(),
            $objRecord->getImage(),
            $objRecord->getIcon(),
            $objRecord->getChatNameColor(),
            $objRecord->getChatNameFormatted(),
            $objRecord->getChatTextColor(),
            $objRecord->getPlayerNotes(),
            $objRecord->getPlayerPrivateNotes(),
            $objRecord->getChatStatusId(),
            $objRecord->getCharacterRaceId(),
            $objRecord->getCharacterRaceNote(),
            $objRecord->getCharacterAgeId(),
            $objRecord->getCreatedDate(),
            $objRecord->getChatRoomId(),
            $objRecord->getLastActivity(),
            $objRecord->getCutieMark(),
            $objRecord->getGender(),
            $objRecord->getLastStatusRequest(),
        	$objRecord->getProfileHtml(),
        	$objRecord->getProfileCss(),
        	$objRecord->getHtmlOverride(),
        	$objRecord->getVariables()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCharacterId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function replaceOne(&$objRecord, &$arrErrors)
    {
        $strSql = ' REPLACE INTO `character` (
            character_id,
            creator_user_id,
            name,
            bio,
            status,
            logged_in,
            born_female,
            currently_female,
            image,
            icon,
            chat_name_color,
            chat_name_formatted,
            chat_text_color,
            player_notes,
            player_private_notes,
            chat_status_id,
            character_race_id,
            character_race_note,
            character_age_id,
            created_date,
            chat_room_id,
            last_activity,
            cutie_mark,
            gender,
            last_status_request,
        	profile_html,
        	profile_css,
        	html_override,
        	variables
        ) VALUES  (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $params = array(
            0,
            $objRecord->getCreatorUserId(),
            $objRecord->getName(),
            $objRecord->getBio(),
            $objRecord->getStatus(),
            $objRecord->getLoggedIn(),
            $objRecord->getBornFemale(),
            $objRecord->getCurrentlyFemale(),
            $objRecord->getImage(),
            $objRecord->getIcon(),
            $objRecord->getChatNameColor(),
            $objRecord->getChatNameFormatted(),
            $objRecord->getChatTextColor(),
            $objRecord->getPlayerNotes(),
            $objRecord->getPlayerPrivateNotes(),
            $objRecord->getChatStatusId(),
            $objRecord->getCharacterRaceId(),
            $objRecord->getCharacterRaceNote(),
            $objRecord->getCharacterAgeId(),
            $objRecord->getCreatedDate(),
            $objRecord->getChatRoomId(),
            $objRecord->getLastActivity(),
            $objRecord->getCutieMark(),
            $objRecord->getGender(),
            $objRecord->getLastStatusRequest(),
        	$objRecord->getProfileHtml(),
        	$objRecord->getProfileCss(),
        	$objRecord->getHtmlOverride(),
        	$objRecord->getVariables()
        );
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        if ($blnResult) {
            $objRecord->setCharacterId(DAO::getInsertId());
        }
        return $blnResult;
    }

    public function updateOne($objRecord, &$arrErrors)
    {
        $strSql = 'UPDATE `character` SET 
            character_id=?,
            creator_user_id=?,
            name=?,
            bio=?,
            status=?,
            logged_in=?,
            born_female=?,
            currently_female=?,
            image=?,
            icon=?,
            chat_name_color=?,
            chat_name_formatted=?,
            chat_text_color=?,
            player_notes=?,
            player_private_notes=?,
            chat_status_id=?,
            character_race_id=?,
            character_race_note=?,
            character_age_id=?,
            created_date=?,
            chat_room_id=?,
            last_activity=?,
            cutie_mark=?,
            gender=?,
            last_status_request=?,
        	profile_html=?,
        	profile_css=?,
        	html_override=?,
        	variables=?
        WHERE character_id=?';
        $arrSetParams = array(
            $objRecord->getCharacterId(),
            $objRecord->getCreatorUserId(),
            $objRecord->getName(),
            $objRecord->getBio(),
            $objRecord->getStatus(),
            $objRecord->getLoggedIn(),
            $objRecord->getBornFemale(),
            $objRecord->getCurrentlyFemale(),
            $objRecord->getImage(),
            $objRecord->getIcon(),
            $objRecord->getChatNameColor(),
            $objRecord->getChatNameFormatted(),
            $objRecord->getChatTextColor(),
            $objRecord->getPlayerNotes(),
            $objRecord->getPlayerPrivateNotes(),
            $objRecord->getChatStatusId(),
            $objRecord->getCharacterRaceId(),
            $objRecord->getCharacterRaceNote(),
            $objRecord->getCharacterAgeId(),
            $objRecord->getCreatedDate(),
            $objRecord->getChatRoomId(),
            $objRecord->getLastActivity(),
            $objRecord->getCutieMark(),
            $objRecord->getGender(),
            $objRecord->getLastStatusRequest(),
        	$objRecord->getProfileHtml(),
        	$objRecord->getProfileCss(),
        	$objRecord->getHtmlOverride(),
        	$objRecord->getVariables()
        );
        $arrKeyParams = array($objRecord->getOrigCharacterId());
        $params = array_merge($arrSetParams, $arrKeyParams);
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }

    public function deleteOne($objRecord, &$arrErrors)
    {
        $strSql = 'DELETE FROM `character` WHERE character_id=?';
        $params = array($objRecord->getCharacterId());
        $arrErrors = array();
        $blnResult = DAO::execute($strSql, $params, $arrErrors);
        return $blnResult;
    }
}
