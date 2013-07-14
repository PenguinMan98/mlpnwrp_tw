<?php
class Model_Data_UsersUsergroupsProvider extends Model_Data_UsersUsergroupsProviderBase
{
	
	public function isGuide($userId){
		$strSql = "
SELECT *
FROM users_users uu
JOIN  users_usergroups uug
	ON uu.userId = uug.userId
WHERE uu.userId = ? AND (groupName = 'Admins' OR groupName = 'Guide Staff');";
		
		$params = array($userId);
		$result = $this->getOneFromQuery($strSql, $params);
		return is_object($result);
	}
}
