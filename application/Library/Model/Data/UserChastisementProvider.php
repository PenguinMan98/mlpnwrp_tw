<?php
class Model_Data_UserChastisementProvider extends Model_Data_UserChastisementProviderBase
{
	/*Is $userId currently kicked?
	 * */
	public function is_kicked($userId){
		$strSql = '
SELECT *,NOW() as `now` FROM user_chastisement
WHERE userId = ? 
	AND `type`=\'kick\'
ORDER BY creation_date DESC
LIMIT 1;
			';
		$params = array($userId);
		$arrResults = array();
		$arrErrors = array();
		DAO::getAssoc($strSql, $params, $arrResults, $arrErrors);
		if(!$arrResults) return false;
		$kick = $arrResults[0];

		$date = date_parse($arrResults[0]['creation_date']);
		$testTS = date_parse($arrResults[0]['now']);
		$now = mktime($testTS['hour'],$testTS['minute'],$testTS['second'],$testTS['month'],$testTS['day'],$testTS['year']);
		$modifiedDate = mktime($date['hour'],$date['minute']+$arrResults[0]['duration'],$date['second'],$date['month'],$date['day'],$date['year']);
		if($modifiedDate > $now){
			return $kick['duration'];
		}
		return false;
	}
	
	public function is_banned($userId){
		$strSql = '
SELECT * FROM user_chastisement
WHERE userId = ? 
	AND (`type`=\'unban\' OR `type`=\'ban\') 
ORDER BY creation_date DESC
LIMIT 1;
			';
		$params = array($userId);
		$ban = $this->getOneFromQuery($strSql, $params);
		if(!$ban) return false;

		return $ban->getType() == 'ban';
	}
	
	public function is_chastised($userId){
		return $this->is_banned($userId) || $this->is_kicked($userId);
	}
}
