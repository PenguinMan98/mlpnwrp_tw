<?php
// Copyright (C) 2013 Pengy Programming. All rights reserved.
// must bootstrap the ajax calls
require_once '../../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

if (empty($_GET['handle'])) // if no username, 
{
	header("Location: ../../../login.php");// send them to login.php.
} 
$handle = $_GET['handle'];
$characterId = $_GET['character_id'];

// add the guest character to the database
// or log in the registered character
$arrErrors = array();
if(!$userId) {
	//echo "Logged in as guest: " . $_POST['handle'] . "<br>";
	$guestUserHelper = new Model_Data_GuestUsersProvider();
	$guestUser = $guestUserHelper->getOneByPk($handle);
	if(!is_object($guestUser)){
		header("Location: ../../../login.php");// send them to login.php.
	}
	$guestUserHelper->deleteOne($guestUser, $arrErrors);
} elseif(empty($characterId)) {
	//echo "Logged in as user: " . $user->data['username'] . " with guest character: ".$_POST['handle']."<br>";
	$guestUserHelper = new Model_Data_GuestUsersProvider();
	$guestUser = $guestUserHelper->getOneByPk($handle);
	if(!is_object($guestUser)){
		header("Location: ../../../login.php");// send them to login.php.
	}
	$guestUserHelper->deleteOne($guestUser, $arrErrors);
} else {
	//echo "Logged in as user: " . $user->data['username'] . " with character: ".$_POST['handle']."<br>";
	$characterHelper = new Model_Data_CharacterProvider();
	$character = $characterHelper->getOneByCharacterName($handle);
	$character->setLoggedIn(false);
	$characterHelper->updateOne($character, $arrErrors);
	// tell the database this character is logged in
}
if(!empty($arrErrors)){
	die(implode('|',$arrErrors));
}
header("Location: ../../../login.php");