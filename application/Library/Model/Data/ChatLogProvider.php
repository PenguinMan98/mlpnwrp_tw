<?php
class Model_Data_ChatLogProvider extends Model_Data_ChatLogProviderBase
{
	// search by date ** USE YYYY-MM-DD (Start + null end = single day search)
	// Search by text
	// search by character
	// toggle private or not
	// search by player (unused)
	public function search( $userId, $startDate, $endDate = null, $text = null, Model_Structure_ChatRoom $room = null, $characters = null, $private = false){//Model_Structure_Phpbb_Users $player = null
		/*if(empty($startDate)){
			throw new Exception("You must specify a start date.");
		}*/
		if(empty($text) && empty($characters) && empty($player) && empty($startDate)){
			return array();
		}
		if(empty($characters) && $private){
			throw new Exception("You must include at least one of your own characters in a private search.");
		}
		
		$params = array();
		if(empty($endDate)){
			$whereArr[] = '`timestamp` > ? AND `timestamp` <= ?';
			$params[] = strtotime($startDate);
			$params[] = strtotime($startDate) + (60*60*24);// add a day
			//echo "blah1<br>";
		}else{
			if($endDate < $startDate){
				throw new Exception("End Date must come AFTER start date.  Silly!");
			}
			$whereArr[] = '`timestamp` > ? AND `timestamp` <= ?';
			$params[] = strtotime($startDate);
			$params[] = strtotime($endDate);
			//echo "blah2<br>";
		}
		if(!is_null($text)){
			$whereArr[] = '`text` LIKE ?';
			$params[] = '%' . $text . '%';
		}
		if(!is_null($room)){
			$whereArr[] = '`chat_room_id` = ?';
			$params[] = $room->getChatRoomId();
		}
		if(!is_null($characters) && $characters != "" && !$private){
			$whereStr = "( ";
			$initCharArr = explode(',', $characters);
			$charArr = array();
			foreach($initCharArr as $charName){
				$charName = trim($charName);
				if($charName !== ""){
					$charArr[] = $charName;
					$params[] = '' . $charName . '';
				}
			}
			for($i = 0; $i < count($charArr); $i++ ){
				if($i != 0) $whereStr .= "OR ";
				$whereStr .= "`handle` LIKE ? ";
			}

			$whereStr .= ")";
			$whereArr[] = $whereStr;
		}elseif(!is_null($characters) && $characters){
			// private
			$initCharArr = array_filter(explode(',', $characters));
			$characterProvider = new Model_Data_CharacterProvider();
			$myChars = array();
			$otherChars = array();
			
			foreach($initCharArr as $charName){
				$thisCharacter = $characterProvider->getDetailsByCharacterName(trim($charName));
				if(!empty($thisCharacter) && $thisCharacter['user_id'] == $userId){
					$myChars[] = $thisCharacter;
				}elseif(!empty($thisCharacter)){
					$otherChars[] = $thisCharacter;
				}
			}
			if(empty($myChars)){
				throw new Exception("You must include at least one of your own characters in a private search.");
			}
			
			$charWhere = array();
			
			if(empty($otherChars)){
				foreach($myChars as $myChar){
					$whereStr = " ( ";
					
					// 'handle' or 'recipient_username'
					$whereStr .= " `handle` = '{$myChar['name']}' OR `recipient_username` = '{$myChar['name']}' ";
					
					$whereStr .= " ) ";
					$charWhere[] = $whereStr;
				}
			}else{
				foreach($myChars as $myChar){
					foreach($otherChars as $theirChar){
						// Two possibilities.
						$whereStr = " ( ";
						
						// 'handle' and 'recipient_username'
						$whereStr .= " ( `handle` = '{$myChar['name']}' AND `recipient_username` = '{$theirChar['name']}' ) ";
						$whereStr .= " OR ( `handle` = '{$theirChar['name']}' AND `recipient_username` = '{$myChar['name']}' ) ";
						
						$whereStr .= " ) ";
						$charWhere[] = $whereStr;
					}
				}
			}
			
			$whereArr[] = implode(' OR ', $charWhere);
		}
		if($private){
			$whereArr[] = " chat_log_type_id=2 ";
		}else{
			$whereArr[] = " chat_log_type_id=1 ";
		}
		$where = 'WHERE ' . implode(' AND ', $whereArr);
		$countSql = 'SELECT count(*) FROM `chat_log` ' . $where;
		$countResults = array();
		$arrErrors = array();
		$count = DAO::getAssoc($countSql, $params, $countResults, $arrErrors);
		if(!empty($arrErrors)){
			throw new Exception("Error getting result count: " . implode('|', $arrErrors));
		}
		$count = $countResults[0]['count(*)'];
		//echo "The search had $count results: $countSql";
		//define('MAX_RESULTS', 10000);
		$MAX_RESULTS = 10000;
		if($count > $MAX_RESULTS){
			throw new Exception("That search had too many results ($count). Please narrow it down.");
		}

		$strSql = 'SELECT * FROM `chat_log` ' . $where;

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
ORDER BY `timestamp` DESC, chat_log_id DESC
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

public function getAll(){
		$strSql = "
SELECT * FROM `chat_log` ORDER BY `chat_log_id` ASC
		";
		$arrParams = array();
		$arrResults = array();
		$arrErrors = array();
		DAO::getAssoc($strSql, $arrParams, $arrResults, $arrErrors);
		if(!empty($arrErrors)) return false;
		return $arrResults;
	}

	public function SetColByPK($col, $val, $pk){
		$strSql = "
UPDATE `chat_log` set `$col`= ? WHERE `chat_log_id` = ?
		";
		$arrParams = array($val, $pk);
		$arrErrors = array();
		DAO::execute($strSql, $arrParams, $arrErrors);
		if(!empty($arrErrors)) return false;
		return true;
	}
	
	public function parseLine(Model_Structure_ChatLog $line){
		$adjustedHour = mktime(
				date('H',$line->getTimestamp())-1,
				date("i",$line->getTimestamp()),
				date("s",$line->getTimestamp()),
				date("n",$line->getTimestamp()),
				date("j",$line->getTimestamp()),
				date("Y",$line->getTimestamp()));
		$tokens = explode(' ',$line->getText());
		
		$retLine = "[".date('Y-m-d h:i:s A',$adjustedHour)."]";
		if($line->getChatLogTypeId() == 1){
			if(count($tokens) > 0 && $tokens[0] == '/me'){
				array_shift($tokens); // pop off the /me
				$retLine .= ": " . $line->getHandle() . " ";
			}else{
				$retLine .= " " . $line->getHandle() . ": ";
			}
		}elseif($line->getChatLogTypeId() == 2){
			if(count($tokens) > 0 && $tokens[0] == '/me'){
				array_shift($tokens); // pop off the /me
				$retLine .= " " . $line->getHandle() . "->" . $line->getRecipientUsername() . ": " . $line->getHandle() . " ";
			}else{
				$retLine .= " " . $line->getHandle() . "->" . $line->getRecipientUsername() . ": ";
			}
		}
		
		
		$retLine .= implode(' ', $tokens);
		
		return $retLine;
	}
}
