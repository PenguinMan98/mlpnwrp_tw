<?php
require_once '../../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();
/*
 * An ajax script to fetch and return the character list.
 **/

$response = new stdClass();
$response->success = true;

if($loggedIn){ // if this is a valid login, get characters
	$characterHelper = new Model_Data_CharacterProvider();
	$characterList = $characterHelper->getAllByUserId($userId);
	$response->characterList = array();
	foreach($characterList as $char){
		$charArray = $char->getAsArray();
		unset($charArray['bio']);
		unset($charArray['player_notes']);
		unset($charArray['player_private_notes']);
		$response->characterList[] = $charArray;
	}
}else{
	$response->success = false;
}

echo json_encode($response);