<?php
class Model_Data_UsersUsersProvider extends Model_Data_UsersUsersProviderBase
{
	
	public function getOneByPlayerName($playerName){
		$strSql = "
SELECT * FROM `users_users`
WHERE `login` = ?  
				";
		$params = array($playerName);
		return $this->getOneFromQuery($strSql, $params);
	}
	public function getOneByName($userName){
		$strSql = 'SELECT * FROM users_users WHERE login=?';
		$params = array(strtolower($userName));
		return Model_Data_UsersUsersProvider::getOneFromQuery($strSql, $params);
	}
	
	public function getUsersByCharacterId($characterId){
		$strSql = '
SELECT user.userId as user_id, user.login as username
FROM `character_user` cu
JOIN `users_users` user
        ON user.userId = cu.user_id
WHERE cu.character_id = ?';
		$arrParams = array($characterId);
		$arrResults = array();
		$arrErrors = array();
		Dao::getAssoc($strSql, $arrParams, $arrResults, $arrErrors);
		if(!empty($arrErrors)){
			throw new Exception("Error getting Users for character id ($characterId): " . implode('|',$arrErrors));
		}
		return $arrResults;
	}
	
	public function verifyUserAndCharacterId($userId, $characterId){
		$users = $this->getUsersByCharacterId($characterId);
		foreach($users as $user){
			if($user['user_id'] == $userId){
				return true;
			}
		}
		return false;
	}
}
