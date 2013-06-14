<?php
class Model_Data_ChatLogProvider extends Model_Data_ChatLogProviderBase
{
	// search by date ** USE YYYY-MM-DD (Start + null end = single day search)
	// Search by text
	// search by character
	// search by player
	public function search( $startDate, $endDate = null, $text = null, Model_Structure_ChatRoom $room = null, $character = null, Model_Structure_Phpbb_Users $player = null){
		if(is_null($text) && is_null($character) && is_null($player)){
			return array();
		}
		$params = array();
		if(is_null($endDate)){
			$whereArr[] = 'timestamp LIKE ?';
			$params[] = $startDate . '%';
		}else{
			$whereArr[] = 'timestamp > ? AND timestamp <= ?';
			$params[] = $startDate;
			$params[] = $endDate;
		}
		if(!is_null($text)){
			$whereArr[] = 'text LIKE ?';
			$params[] = '%' . $text . '%';
		}
		if(!is_null($room)){
			$whereArr[] = 'chat_room_id = ?';
			$params[] = $room->getChatRoomId();
		}
		/*if(!is_null($character)){
			$whereArr[] = 'user_id = ?';
			$params[] = $character->getCharacterId();
		}*/
		if(!is_null($character) && $character != ""){
			$whereArr[] = 'handle like ?';
			$params[] = '%' . $character . '%';
		}
		
		if(!is_null($player)){
			$whereArr[] = 'user_id = ?';
			$params[] = $player->getUserId();
		}
		$strSql = 'SELECT * FROM `chat_log` 
WHERE recipient_user_id IS NULL AND recipient_username IS NULL AND ' . implode(' AND ', $whereArr);
		
		return parent::getArrayFromQuery($strSql, $params);
	}
	
	function insertChatLog(Model_Structure_ChatLog $chatLog){
		// handle/rand should be unique enough for a key
		$strSql = 'SELECT * FROM `chat_log`
WHERE `handle`= ? AND `chat_rand` = ?';
		$params = array($chatLog->getHandle(), $chatLog->getChatRand());
		$result = parent::getOneFromQuery($strSql, $params);
		if(is_object($result)){
			return true; // it's already here.
		}else{
			$arrErrors = array();
			parent::insertOne($chatLog, $arrErrors);
			if(!empty($arrErrors)){
				throw new Exception("Error inserting new chat log! " . implode('|',$arrErrors));
			}else{
				return true; // it inserted correctly
			}
		}
		return false;
	}
	
	function getPosts($roomId, $handle, $mptr, $post_count, $registered){
		$params = array($roomId);
		$strSql = "
SELECT * FROM chat_log
WHERE	( 
			( 
				chat_room_id = ? 
				AND `recipient_username` IS NULL
				AND `recipient_user_id` IS NULL
			)";
		if($mptr >= 0 || $registered){ // if this is not an initialization, or a registered user, get PM's.
			$strSql .= "
			OR (
				`recipient_username` = ? 
			)
			OR (
				`handle` = ?
				AND NOT `recipient_username` IS NULL
			)";
			$params[] = $handle;
			$params[] = $handle;
		}
		$strSql .= "
		)";
		if($mptr >= 0){ // if the pointer is set, only get the newer things
			$strSql .= "AND chat_log_id > ?	";
			$params[] = $mptr;
		}
		$strSql .= "
ORDER BY TIMESTAMP DESC
LIMIT " . intval($post_count);
		
		$arrResults = array();
		$arrErrors = array();
		DAO::getAssoc($strSql, $params, $arrResults, $arrErrors);
		if(!empty($arrErrors)) throw new Exception("Error getting posts: " . implode('|',$arrErrors));
		return array_reverse($arrResults);
	}
	
	function getMyPosts($roomId, $handle, $mptr, $post_count, $registered){
		$params = array($roomId);
		$strSql = "
SELECT * FROM chat_log
WHERE	(
			(
				chat_room_id = ?
				AND `recipient_username` IS NULL
				AND `recipient_user_id` IS NULL
			)";
		if($mptr >= 0 || $registered){ // if this is not an initialization, or a registered user, get PM's.
			$strSql .= "
			OR (
				`recipient_username` = ?
			)
			OR (
				`handle` = ?
				AND NOT `recipient_username` IS NULL
			)";
			$params[] = $handle;
			$params[] = $handle;
		}
		$strSql .= "
		)
		AND `handle` = ? ";
		$params[] = $handle;
		if($mptr >= 0){ // if the pointer is set, only get the newer things
			$strSql .= "AND chat_log_id > ?	";
			$params[] = $mptr;
		}
		$strSql .= "
ORDER BY TIMESTAMP DESC
LIMIT " . intval($post_count);
	
		$arrResults = array();
		$arrErrors = array();
		DAO::getAssoc($strSql, $params, $arrResults, $arrErrors);
		if(!empty($arrErrors)) throw new Exception("Error getting posts: " . implode('|',$arrErrors));
		return array_reverse($arrResults);
	}
	
	public function getOneByHandleAndRand($handle, $rand){
		$strSql = "
SELECT * FROM `chat_log`
WHERE `handle` = ?
	AND `chat_rand` = ?
		";
		$params = array($handle, $rand);
		return $this->getOneFromQuery($strSql, $params);
	}
}
