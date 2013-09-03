<?php
session_start();

if(!empty($_REQUEST['stare'])){ // if I have stare requests
	foreach($_REQUEST['stare'] as $stareAtMe){// go through them
		$_SESSION[$_REQUEST['handle']]['stare_array'][] = $stareAtMe;// set them in the session
	}
}else{
	$_SESSION[$_REQUEST['handle']]['stare_array'] = array();// otherwise, empty array.
}

if(!empty($_REQUEST['mute'])){ // if I have stare requests
	foreach($_REQUEST['mute'] as $muteMe){// go through them
		$_SESSION[$_REQUEST['handle']]['mute_array'][] = $muteMe;// set them in the session
	}
}else{
	$_SESSION[$_REQUEST['handle']]['mute_array'] = array();// otherwise, empty array.
}

