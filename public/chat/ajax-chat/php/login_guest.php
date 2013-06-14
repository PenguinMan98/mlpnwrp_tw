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
	if(empty($character)){
		$response->success = true; // I succeeded if there is no character
		// lastly, lets check for invalid strings
		
		if(		preg_match('/god/i',$characterName) ||
				preg_match('/fuck/i',$characterName) ||
				preg_match('/shit/i',$characterName) ||
				preg_match('/bitch/i',$characterName) ||
				preg_match('/damn/i',$characterName) ||
				preg_match('/pussy/i',$characterName) ||
				preg_match('/penis/i',$characterName) ||
				preg_match('/dick/i',$characterName) ||
				preg_match('/vagina/i',$characterName) ){
			$response->success = false;
			$response->message = "Please do not use that word.";
		}
	}else{
		$response->success = false;
		$response->message = "This character is reserved!";
	}
}else{
	$response->success = false;
	$response->message = "Empty character name!";
}


echo json_encode($response);