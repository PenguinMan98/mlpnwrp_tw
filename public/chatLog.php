<?php
require_once ('tiki-setup.php');
$smarty->assign('show', 'n');

require_once '../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

$startDate = $characterId = $character = $roomId = $room = $text = null;

if(isset($_POST['searchForm'])){
	$startDate = isset($_POST['startDate']) ? $_POST['startDate'] : null;
	$character = isset($_POST['character']) ? $_POST['character'] : null;
	$roomId = isset($_POST['room']) ? $_POST['room'] : null;
	$text = isset($_POST['text']) ? $_POST['text'] : null;
	
	$smarty->assign('startDate',$startDate);
	$smarty->assign('character',$character);
	$smarty->assign('roomId',$roomId);
	$smarty->assign('text',$text);
}

// get chatrooms
$chatRoomProvider = new Model_Data_ChatRoomProvider();
$rooms = $chatRoomProvider->getChatList();
$roomList = array();
foreach($rooms as $room){
	$roomList[$room['chat_room_id']] = $room['room_name'];
}
$smarty->assign_by_ref('roomList',$roomList);

if(isset($roomId)){
	$room = $chatRoomProvider->getOneByPk($roomId);
}

// get characters
$characterProvider = new Model_Data_CharacterProvider();
$characterList = $characterProvider->getAll();
$characters = array();
foreach($characterList as $char){
	$characters[] = $char['handle'];
}
$smarty->assign_by_ref('characters',$characters);

// get results
$chatLogProvider = new Model_Data_ChatLogProvider();
$results = $chatLogProvider->search($startDate,null,$text,$room,$character);
$smarty->assign_by_ref('results',$results);

$smarty->assign('title','Search Chat Log'); // assign the page title to smarty

$smarty->assign('mid', 'chatLog.tpl'); // assign the own template file
$smarty->display("tiki.tpl"); // display the page
