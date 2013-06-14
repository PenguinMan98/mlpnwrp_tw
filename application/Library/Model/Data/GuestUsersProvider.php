<?php
class Model_Data_GuestUsersProvider extends Model_Data_GuestUsersProviderBase
{
	public function getAll(){
		$strSql = '
SELECT * FROM `guest_users`';
		$params = array( $userId );
		return Model_Data_GuestUsersProvider::getArrayFromQuery($strSql, $params);
	}
	
	public function logoutGuestUsers($interval){
		$strSql = "DELETE FROM `guest_users` WHERE UNIX_TIMESTAMP() - `last_activity` > ?";
		$arrParams = array($interval);
		$arrErrors = array();
		dao::execute($strSql, $arrParams, $arrErrors);
		if(!empty($arrErrors)) throw new Exception("Error logging out registered users: " . implode('|',$arrErrors));
		return true;
	}
}
