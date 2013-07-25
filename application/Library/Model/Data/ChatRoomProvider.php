<?php
class Model_Data_ChatRoomProvider extends Model_Data_ChatRoomProviderBase
{
	private $chatRoomList = array();
	
	public function getChatList(){
		$retArray = array();
		if(empty($this->chatRoomList)){
			$strSql = 'SELECT * FROM `chat_room` cr WHERE cr.`is_active` = 1 ORDER BY `display_order` ASC';
			$params = array();
			$this->chatRoomList = parent::getArrayFromQuery($strSql, $params);
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
}
