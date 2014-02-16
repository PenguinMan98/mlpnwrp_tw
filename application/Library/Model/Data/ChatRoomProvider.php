<?php
class Model_Data_ChatRoomProvider extends Model_Data_ChatRoomProviderBase
{
	private $chatRoomList = array();

	public function getChatList(){
		$retArray = array();
		if(empty($this->chatRoomList)){
			$strSql = '
SELECT
	crt.name as `type`,
	cr.*
FROM `chat_room` cr
JOIN `chat_room_type` crt
	ON cr.chat_room_type_id = crt.chat_room_type_id
WHERE cr.`is_active` = 1
ORDER BY `chat_room_type_id` ASC, `display_order` ASC';
			$params = array();
			$arrResults = array();
			$arrErrors = array();
			DAO::getAssoc($strSql, $params, $arrResults, $arrErrors);
			$this->chatRoomList = $arrResults;
		}
		return $this->chatRoomList;
	}

	public function getOneByName($roomName){
			// if the rooms aren't in the session already, put them there.
		if(empty($this->chatRoomList)){
			$this->chatRoomList = $this->getChatList();
		}
			// search the rooms for the one I want and return it.
		foreach($this->chatRoomList as $room){
			if($room->getRoomName() == $roomName) return $room;
		}
		return false; // I didn't find it
	}

	// get the room the character was last in
	public function getOneByCharacter($charName){
		$strSql = "
SELECT *
FROM `chat_room` cr
JOIN `character` c
	ON c.chat_room_id = cr.chat_room_id
WHERE c.name = ? ";
		$params = array($charName);

		return Model_Data_ChatRoomProvider::getOneFromQuery($strSql, $params);
	}

	public function saveGameNotes($room, $gameNotes){
		$strSql = "
UPDATE `chat_room` cr
SET `game_notes` = ?
WHERE `chat_room_id` = ?";
		$arrErrors = array();
		DAO::execute($strSql, array($gameNotes, $room), $arrErrors);
		return (empty($arrErrors));
	}


}
