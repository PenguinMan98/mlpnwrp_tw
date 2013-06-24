<?php
class Model_Data_Phpbb_UsersProvider extends Model_Data_Phpbb_UsersProviderBase
{
	public function getOneByName($userName){
		$strSql = 'SELECT * FROM phpbb_users WHERE username_clean=?';
		$params = array(strtolower($userName));
		return Model_Data_Phpbb_UsersProvider::getOneFromQuery($strSql, $params);
	}
	
public function getUsersByCharacterId($characterId){
		$strSql = '
SELECT user.userId as `user_id`, user.login as `username`
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
