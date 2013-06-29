<?php

require_once '../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

// this operation requires the user to be logged in
if(empty($_SESSION['u_info']) || empty($_POST)){
	header('Location: ' . SITE_ROOT . '/tiki-login_scr.php');
}

$allowedTags = '<br><p><img><h1><h2><h3><h4><div><span><u><i><strike><strong><b>';

// are we editing?
$editing = ($_REQUEST['edit']) ? true : false;

// get POSTed data
$character_name = str_replace(' ','_',str_replace('  ',' ',trim(filter_var($_REQUEST['character_name'], FILTER_SANITIZE_STRING))));
$birth_gender = filter_var($_REQUEST['birth_gender'], FILTER_SANITIZE_STRING);
$current_gender = filter_var($_REQUEST['current_gender'], FILTER_SANITIZE_STRING);
if(!$editing) $current_gender = $birth_gender;
$race = filter_var($_REQUEST['race'], FILTER_SANITIZE_NUMBER_INT);
$age = filter_var($_REQUEST['age'], FILTER_SANITIZE_NUMBER_INT);
$chat_name_color = filter_var($_REQUEST['chat_name_color'], FILTER_SANITIZE_STRING);
$chat_text_color = filter_var($_REQUEST['chat_text_color'], FILTER_SANITIZE_STRING);
$status = strip_tags($_REQUEST['status'], $allowedTags);
$bio = strip_tags($_REQUEST['bio'], $allowedTags);
$player_notes = strip_tags($_REQUEST['player_notes'], $allowedTags);
$player_private_notes = strip_tags($_REQUEST['player_private_notes'], $allowedTags);

// set some defaults
$chat_name_color = ( $chat_name_color != "" ) ? $chat_name_color : "#ffffff" ;
$chat_text_color = ( $chat_text_color != "" ) ? $chat_text_color : "#ffffff" ;

try{
	Dao::startTransaction();
	$characterProvider = new Model_Data_CharacterProvider();
	$character = $characterProvider->getOneByCharacterName($character_name);
	if(is_object($character) && !$editing){// fail if the character exists and we aren't editing
		throw new Exception("Character already exists!");
	}elseif(!is_object($character)){
		$character = new Model_Structure_Character();
	}
	
		
	$character->setName($character_name);
	$character->setChatNameFormatted($character_name);
	$character->setBornFemale(($birth_gender == 'female'));
	$character->setCurrentlyFemale(($current_gender == 'female'));
	$character->setCharacterRaceId($race);
	$character->setCharacterAgeId($age);
	$character->setChatNameColor($chat_name_color);
	$character->setChatTextColor($chat_text_color);
	$character->setStatus($status);
	$character->setBio($bio);
	$character->setPlayerNotes($player_notes);
	$character->setPlayerPrivateNotes($player_private_notes);
		
	// this is enough to create the character
	$arrErrors = array();
		
	if($editing){
		$userProvider = new Model_Data_Phpbb_UsersProvider();
		if(!$userProvider->verifyUserAndCharacterId($userId, $character->getCharacterId())){
			die("This is not your character.");
		}
		
		$characterProvider->updateOne($character, $arrErrors);
	}else{
		// only add this if I'm creating
		$character->setCreatorUserId($userId); 
		
		$characterProvider->insertOne($character, $arrErrors);
	}

	if(!empty($arrErrors) && !$editing){
		throw new Exception("Error inserting character ".$character->getName().": " . implode('|', $arrErrors));
	}elseif(!empty($arrErrors)){
		throw new Exception("Error updating character ".$character->getName().": " . implode('|', $arrErrors));
	}
		
	if(!$editing){
		// create the relationship between the character and the user.
		$characterUserProvider = new Model_Data_CharacterUserProvider();
		$characterUser = new Model_Structure_CharacterUser();
		$characterUser->setCharacterId($character->getCharacterId());
		$characterUser->setUserId($userId);
		$characterUserProvider->insertOne($characterUser, $arrErrors);
		if(!empty($arrErrors)){
			throw new Exception("Error creating a relationship between character ".$character->getName()." and user ".$userName." : " . implode('|', $arrErrors));
		}
	}
	Dao::commit();
}catch(Exception $e){
	Dao::rollback();
	$this->errors[] = $e->getMessage();
}
if($editing){
	header('Location: ' . SITE_ROOT . '/chat/character/edit.php?c=' . $character_name);
}else{
	if(!empty($_POST['saveandchat'])){
		header('Location: ' . SITE_ROOT . '/chat');
	}else{
		header('Location: ' . SITE_ROOT . '/chat/character/view.php?c=' . $character_name);
	}
}
?>