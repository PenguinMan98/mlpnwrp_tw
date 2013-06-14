<?php
require_once '../../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();
/*
 * A character information retrieval ajax script.
 * */

$response = new stdClass();

$characterName = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['characterName']), ENT_QUOTES);
if(!empty($characterName)){
	$characterProvider = new Model_Data_CharacterProvider();
	$character = $characterProvider->getDetailsByCharacterName($characterName);
	$response->success = !empty($character);
	if($response->success){
		$response->characterInfo = $character;
		unset($response->characterInfo['player_private_notes']);
	}
}else{
	$response->success = false;
}

echo json_encode($response);