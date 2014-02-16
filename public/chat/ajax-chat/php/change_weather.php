<?php
session_start();

// must bootstrap the ajax calls
require_once '../../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

$response = new stdClass();
$response->playerId = $userId;
$response->success = false;
$response->message = "";

if(!$userId){
	$response->message = "Error: Not logged in.";
	die(json_encode($response));
}

$newWeatherState = intval($_REQUEST['new_weather_state']);
$roomId = intval($_REQUEST['room_id']);
$duration = $_REQUEST['duration'];

$weatherStateProvider = new Model_Data_WeatherStateProvider();
$chatRoomProvider = new Model_Data_ChatRoomProvider();

$room = $chatRoomProvider->getOneByPk($roomId);
$weatherState = $weatherStateProvider->getOneByName($newWeatherState);

if(!is_object($room) || !is_object($weatherState)){
	$response->message = "Invalid parameters: ws($newWeatherState), r($roomId)";
	die(json_encode($response));
}

try{
	$room->setWeatherState($weatherState->getWeatherStateId());
	$chatRoomProvider->updateOne($room);

	if(is_numeric($duration) && $duration > 0){ // duration is in hours and may be fractional
		$seconds = intval($duration * 60 * 60);
		$weatherScheduleProvider = new Model_Data_WeatherScheduleProvider();
		$weatherSchedule = new Model_Structure_WeatherSchedule(array(
				'start_ts' => time() + $seconds, // now plus duration
				'weather_state_id' => $room->getWeatherState(), // go back to what was there before
				'chat_room_id' => $room->getChatRoomId() // in this room
			));
		$weatherScheduleProvider->insertOne($weatherSchedule);
	}

	$response->success = true;
}catch(Exception $e){
	$response->message = $e->getMessage();
}

echo json_encode($response);