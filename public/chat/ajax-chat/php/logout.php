<?php
// Copyright (C) 2013 Pengy Programming. All rights reserved.
// must bootstrap the ajax calls
require_once '../../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

// kill the session?

if (empty($_GET['handle'])) // if no username, 
{
	header("Location: ../../../login.php");// send them to login.php.
} 
$handle = $_GET['handle'];
$characterId = isset($_GET['character_id'])? $_GET['character_id'] : null;

// remove the guest character to the database
// or log out the registered character
$arrErrors = array();
if(!$userId) {
	echo "Logged in as guest: " . $handle . "<br>";
	$guestUserHelper = new Model_Data_GuestUsersProvider();
	$guestUser = $guestUserHelper->getOneByPk($handle);
	if(!is_object($guestUser)){
		header("Location: ../../../login.php");// send them to login.php.
		//echo "1-Send me to: login.php<br>";
	}
	$guestUserHelper->deleteOne($guestUser, $arrErrors);
} elseif(empty($characterId)) {
	echo "Logged in as user: " . $userName . " with guest character: ".$handle."<br>";
	$guestUserHelper = new Model_Data_GuestUsersProvider();
	$guestUser = $guestUserHelper->getOneByPk($handle);
	if(!is_object($guestUser)){
		header("Location: ../../../login.php");// send them to login.php.
		//echo "2-Send me to: login.php<br>";
	}
	$guestUserHelper->deleteOne($guestUser, $arrErrors);
} else {
	echo "Logged in as user: " . $userName . " with character: ".$handle."<br>";
	$characterHelper = new Model_Data_CharacterProvider();
	$character = $characterHelper->getOneByCharacterName($handle);
	$character->setLoggedIn(false);
	$characterHelper->updateOne($character, $arrErrors);
}
if(!empty($arrErrors)){
	die(implode('|',$arrErrors));
}
header("Location: ../../../login.php");
//echo "3-Send me to: login.php<br>";