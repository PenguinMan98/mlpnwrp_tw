<?php
// Copyright (C) 2013 Pengy Programming. All rights reserved.

// must bootstrap the ajax calls
require_once '../../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

include "init.php";

$response = new stdClass();
$response->success = true;
$response->characters = array();
$response->users_get_id = $_REQUEST['users_get_id'];

// get registered characters who are logged in
$characterHelper = new Model_Data_CharacterProvider();
$characterHelper->logoutRegisteredUsers($chat_registered_logout);
$registeredCharsLoggedIn = $characterHelper->getAllLoggedIn();

// get guest characters who are logged in
$guestUserHelper = new Model_Data_GuestUsersProvider();
$guestUserHelper->logoutGuestUsers($chat_guest_logout);
$guestUsersLoggedIn = $guestUserHelper->getAll();

$handleArr = array();
$charactersArr = array();
$thisCharacter = array();
$index = 0;

foreach($registeredCharsLoggedIn as $char){
	
	$thisCharacter = array(
			'character_id'=>$char->getCharacterId(),
			'name'=>$char->getName(),
			'chat_name_formatted'=>$char->getChatNameFormatted(),
			'status'=>$char->getChatStatusId(),
			'chat_name_color'=>$char->getChatNameColor(),
			'chat_text_color'=>$char->getChatTextColor(),
			'last_activity'=>$char->getLastActivity(),
			'chat_room_id'=>$char->getChatRoomId(),
			'cutie_mark'=>($char->getCutieMark()? $char->getCutieMark() : false ),
			'chat_icon'=>($char->getIcon()? $char->getIcon() : false),
			'registered'=>true
		);
	$charactersArr[$index] = $thisCharacter;
	$handleArr[$index] = $char->getName();
	$index++;
}

foreach($guestUsersLoggedIn as $char){
	$thisCharacter = array(
			'character_id'=>false,
			'name'=>$char->getHandle(),
			'chat_name_formatted'=>false,
			'status'=>$char->getChatStatusId(),
			'chat_name_color'=>$char->getChatNameColor(),
			'chat_text_color'=>$char->getChatTextColor(),
			'last_activity'=>$char->getLastActivity(),
			'chat_room_id'=>$char->getChatRoomId(),
			'cutie_mark'=>false,
			'chat_icon'=>false,
			'registered'=>false
		);
	$charactersArr[$index] = $thisCharacter;
	$handleArr[$index] = $char->getHandle();
	$index++;
}

asort($handleArr);
foreach($handleArr as $key=>$charname){
	$response->characters[] = $charactersArr[$key];
}

echo json_encode($response);