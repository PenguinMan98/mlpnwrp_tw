<?php
class Model_Data_WeatherScheduleProvider extends Model_Data_WeatherScheduleProviderBase
{
	/*
	Do yourself a favor and don't call this if it's not an IC room.
	*/
	public function getByRoomId( $roomId ){
		$strSql = "
SELECT *
FROM weather_schedule
WHERE chat_room_id = ?
	AND start_ts < ?
	AND end_ts > ?
ORDER BY weather_schedule_id DESC
LIMIT 1
		";
		$params = array($roomId, time(), time());
		//echo $strSql . "<br>";
		//print_r($params);
		return Model_Data_WeatherScheduleProvider::getOneFromQuery($strSql, $params);
	}
}
