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

$varName = $_REQUEST['var_name'];
$varValue = $_REQUEST['var_value'];
$characterId = $_REQUEST['character_id'];

$characterProvider = new Model_Data_CharacterProvider();

try{
	$characterProvider->saveNewVariable($characterId, $varName, $varValue);
	$response->success = true;
}catch(Exception $e){
	$response->message = $e->getMessage();
}

echo json_encode($response);