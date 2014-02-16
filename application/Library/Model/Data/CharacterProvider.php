<?php
class Model_Data_CharacterProvider extends Model_Data_CharacterProviderBase
{
	public function getAll(){
        $strSql = 'SELECT DISTINCT `handle`
FROM `chat_log`
ORDER BY `handle` ASC';
        $arrParams = array();
        $arrResults = array();
        $arrErrors = array();
        dao::getAssoc($strSql, $arrParams, $arrResults, $arrErrors);
        
        if(!empty($arrErrors)){
        	throw new Exception("Error getting character names!" . implode('|', $arrErrors));
        }
        return $arrResults;
	}
	
	public function getOneByCharacterName( $charName ) {
		$strSql = 'SELECT * FROM `character` WHERE name=?';
		$params = array($charName);
		return Model_Data_CharacterProvider::getOneFromQuery($strSql, $params);
	}
	
	public function getDetailsByCharacterName( $charName ) {
		$strSql = '
SELECT c.*, ca.name as \'age\' , cr.name as \'race\', uu.login as `username`, uu.`userId` as `user_id`
FROM `character` c 
JOIN `character_age` ca
	ON c.character_age_id = ca.character_age_id
JOIN `character_race` cr
	ON c.character_race_id = cr.character_race_id
JOIN `character_user` cu 
	ON c.character_id = cu.character_id
JOIN `users_users` uu 
	ON uu.`userId` = cu.`user_id`
WHERE c.name=?';
		$arrParams = array($charName);
		$arrErrors = array();
		$arrResults = array();
		dao::getAssoc($strSql, $arrParams, $arrResults, $arrErrors);
		if(!empty($arrResults)){
			if(count($arrResults) > 1){ // if there is more than one owner
				foreach($arrResults as $res){ // go through the results
					if($res['username'] != admin){ // if it's not admin
						return $res; // return that one.
					}
				}
				return $arrResults[0]; // all else fails, return the first one.
			}else{
				return $arrResults[0]; // if only one, return that.
			}
		}
		return array();
	}
	
	public function getAllByUserId( $userId ) {
		$strSql = '
SELECT * FROM `character` c
LEFT JOIN `character_user` cu
	ON c.`character_id` = cu.`character_id`
WHERE cu.`user_id`=?
ORDER BY c.`name` ASC';
		$params = array( $userId );
		return Model_Data_CharacterProvider::getArrayFromQuery($strSql, $params);
	}
	
	public function verifyCharacterName($charName){
		$character = $this->getOneByCharacterName($charName);
		if(is_object($character)){
			return true;
		}
		return false;
	}
	
	public function validCharacterUser($handle, $userId){
		$strSql = '
SELECT * FROM `character` c
LEFT JOIN `character_user` cu
	ON c.`character_id` = cu.`character_id`
WHERE cu.`user_id`=?
	AND c.`name` = ?';
		$params = array( $userId, $handle );
		$result = Model_Data_CharacterProvider::getOneFromQuery($strSql, $params);
		if(is_object($result)) return true;
		return false;
	}
	
	public function getNewChars($count){
		$strSql = '
SELECT c.*, cu.`user_id`, u.`username`
FROM `character` c 
JOIN `character_user` cu
	ON c.`character_id` = cu.`character_id`
JOIN `phpbb_users` u
	ON cu.`user_id` = u.`user_id`
ORDER BY c.`created_date` DESC, c.`character_id` DESC
LIMIT ' . intval($count);
		$arrParams = array();
		$arrResults = array();
		$arrErrors = array();
		dao::getAssoc($strSql, $arrParams, $arrResults, $arrErrors);
		
		if(!empty($arrErrors)){
			throw new Exception("Error getting new characters!" . implode('|', $arrErrors));
		}
		return $arrResults;
	}
	
	public function getAllLoggedIn(){
		$strSql = '
SELECT * FROM `character` c
WHERE `logged_in`=1';
		$params = array( );
		return Model_Data_CharacterProvider::getArrayFromQuery($strSql, $params);
	}
	
	public function logoutRegisteredUsers($interval){
		$strSql = "UPDATE `character` SET `logged_in` = 0 WHERE `logged_in`=1 AND UNIX_TIMESTAMP() - `last_activity` > ?";
		$arrParams = array($interval);
		$arrErrors = array();
		dao::execute($strSql, $arrParams, $arrErrors);
		if(!empty($arrErrors)) throw new Exception("Error logging out registered users: " . implode('|',$arrErrors));
		return true;
	}
	
	public function getCharactersByPlayerName( $playerName ){
		$strSql = "
SELECT c.character_id, c.name, c.status, c.last_status_request, c.logged_in, c.cutie_mark FROM `users_users` u
JOIN character_user cu
	ON u.userid = cu.user_id
JOIN `character` c
	ON c.character_id = cu.character_id
WHERE `login` = ?;";
		$params = array($playerName);
		return Model_Data_CharacterProvider::getArrayFromQuery($strSql, $params);
	}
	
	public function searchByName( $searchWord ){
		$strSql = "
SELECT c.character_id, c.name, c.status, c.last_status_request, c.logged_in, c.cutie_mark 
FROM `character` c
WHERE c.name LIKE ?;";
		$params = array('%'.$searchWord.'%');
		return Model_Data_CharacterProvider::getArrayFromQuery($strSql, $params);
	}
	
	public function saveNewVariable($characterId, $varName, $varValue){
		// get the character variables
		$character = $this->getOneByPk($characterId);
		if(!is_object($character)){ return false; };
		$variables = unserialize($character->getVariables());
		// add or replace the new one
		$variables[$varName] = $varValue;
		// put the new variable set into the database
		$strSql = "UPDATE `character` SET `variables` = ? WHERE `character_id` = ? ";
		$arrParams = array(serialize($variables), $characterId);
		$arrErrors = array();
		dao::execute($strSql, $arrParams, $arrErrors);
		if(!empty($arrErrors)) throw new Exception("Unable to set the variable: " . implode('|',$arrErrors));
		return true;
	}
}
