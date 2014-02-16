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

$room = $_REQUEST['room'];
$gameNotes = $_REQUEST['gameNotes'];

$roomProvider = new Model_Data_ChatRoomProvider();

try{
	$roomProvider->saveGameNotes($room, $gameNotes);
	$response->success = true;
}catch(Exception $e){
	$response->message = $e->getMessage();
}

echo json_encode($response);