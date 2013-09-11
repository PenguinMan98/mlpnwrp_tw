<?php
// Copyright (C) 2013 Pengy Programming. All rights reserved.
// must bootstrap the ajax calls
require_once '../../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

$time = time();
	// half an hour: 60 s * 30 m
$halfHour = 60 * 30;
	// ten min: 60 s * 10 m
$tenMin = 60 * 10;

$arrErrors = array();

// kill all stale character logins.
// get logged in characters
$characterHelper = new Model_Data_CharacterProvider();
$loggedInChars = $characterHelper->getAllLoggedIn();
foreach($loggedInChars as $char){
	if($time - $char->getLastStatusRequest() > $halfHour){
		$char->setLoggedIn(false);
		$characterHelper->updateOne($char, $arrErrors);
	}
}

// kill all stale guest logins.
$guestUserHelper = new Model_Data_GuestUsersProvider();
$guestUsers = $guestUserHelper->getAll();
foreach($guestUsers as $gu){
	$gu = new Model_Structure_GuestUsers();
	if($time - $gu->getLastStatusRequest() > $tenMin){
		$characterHelper->deleteOne($gu, $arrErrors);	
	}
}

