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
SELECT c.*, ca.name as \'age\' , cr.name as \'race\', pu.username
FROM `character` c 
JOIN `character_age` ca
	ON c.character_age_id = ca.character_age_id
JOIN `character_race` cr
	ON c.character_race_id = cr.character_race_id
JOIN `character_user` cu 
	ON c.character_id = cu.character_id
JOIN `phpbb_users` pu 
	ON pu.`user_id` = cu.`user_id`
WHERE c.name=?';
		$arrParams = array($charName);
		$arrErrors = array();
		$arrResults = array();
		dao::getAssoc($strSql, $arrParams, $arrResults, $arrErrors);
		return $arrResults[0];
	}
	
	public function getAllByUserId( $userId ) {
		$strSql = '
SELECT * FROM `character` c
LEFT JOIN `character_user` cu
	ON c.`character_id` = cu.`character_id`
WHERE cu.`user_id`=?';
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
}
