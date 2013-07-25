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
}
