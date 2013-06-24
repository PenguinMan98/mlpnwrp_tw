<?php

// Copyright (C) 2008 Ilya S. Lyubinskiy. All rights reserved.
// Technical support: http://www.php-development.ru/
//
// YOU MAY NOT
// (1) Remove or modify this copyright notice.
// (2) Re-distribute this code or any part of it.
//     Instead, you may link to the homepage of this code:
//     http://www.php-development.ru/javascripts/ajax-chat.php
// (3) Use this code or any part of it as part of another product.
//
// YOU MAY
// (1) Use this code on your website.
//
// NO WARRANTY
// This code is provided "as is" without warranty of any kind.
// You expressly acknowledge and agree that use of this code is at your own risk.

if (isset($_GET['room']) &&
    isset($_GET['user']) &&
    isset($_GET['pass']) &&
    isset($_GET['gues']))
{
  include_once 'init.php';

  // log all calls to this file
  /*$logProvider = new Model_Data_LogProvider();
  $log = new Model_Structure_Log(array(
  		'file'=>__FILE__,
  		'log_entry'=>serialize($_REQUEST),
  		'severity'=>'notice'
  ));
  $arrErrors = array();
  $logProvider->insertOne($log, $arrErrors);*/
  
  $modified = unlog_users();// refresh the current character list

  if ($chat_data['kick'][$_GET['user']] ||
      $chat_data['kick'][$_SERVER['REMOTE_ADDR']]) // if the user's been kicked
  {
    echo "FAILED\r\n$chat_err_kick"; // fail and die
    die;
  }

  $modified = true;  // set modified to true regardless of the character list. We want the chat to refresh

  $gndr = 'none';
  $stat = 'none';
  $room = $_GET['room'];
  $handle = $_GET['user'];
  $pass = $_GET['pass'];
  $gues = $_GET['gues'];
  //$username = ($user->data['username_clean'] == 'anonymous')? $user->data['username'] : $handle;

  // this is kinda weird.  what's with the if(true)'s?  Just for display?
  // verify the room name
  if (!preg_match('/^\w+( +\w+)*$/', $room)){ 
  	echo "FAILED\r\n$chat_err_inval"; 
  	exit();
  }
  
  //verify the username is a word
  if (!preg_match('/^\w+$/',$handle)){ 
  	echo "FAILED\r\n$chat_err_inval"; 
  	exit();
  }
  
  // verify login credentials
  if (!$gues){ // registered user
  	if (!chat_chk_login($handle, $pass, $gndr, $stat)) { 
  		echo "FAILED\r\n$chat_err_inval"; 
  		exit();
  	}
  	if($handle != $userName && !$characterProvider->validCharacterUser($handle, $userId)){
  		echo "FAILED\r\n$chat_err_mismatch";
  		exit();
  	}
  }else{ // guest user
  	$handle = "GT-$handle";
  	if (!chat_chk_guest($handle, $gndr, $stat)) { 
  		echo "FAILED\r\n$chat_err_inuse"; 
  		exit(); 
  	}
  }

  // adds something to the chat data
  if (isset($chat_data['user'][$handle])){ 
  	$GLOBALS['chat_data']['data'][] = "-\r\n{$chat_data['room'][$handle]}\r\n{$handle}"; 
  }

  $chat_data['time'][$handle] = time();
  $chat_data['away'][$handle] = false;
  $chat_data['gndr'][$handle] = $gndr;
  $chat_data['stat'][$handle] = $stat;
  $chat_data['room'][$handle] = $room;
  $chat_data['user'][$handle] = time();
  $chat_data['pass'][$handle] = md5(rand());
  $chat_data['data'][] = "+\r\n{$room}\r\n{$handle}\r\n{$gndr}\r\n{$stat}";
  echo "OK\r\n{$handle}\r\n{$chat_data['pass'][$handle]}\r\n";

  if ($modified) file_put_contents('data.txt', serialize($chat_data));
}

?>