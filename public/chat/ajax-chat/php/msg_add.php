<?php
// Copyright (C) 2013 Pengy Programming. All rights reserved.

// must bootstrap the ajax calls
require_once '../../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

$response = new stdClass();

// verify login
$handle = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['user']), ENT_QUOTES);
if($userId) { // logged in + registered char
	$characterHelper = new Model_Data_CharacterProvider();
	$character = $characterHelper->getOneByCharacterName($handle);
}
if(!$userId || !is_object($character)){ // guest
	$guestUserHelper = new Model_Data_GuestUsersProvider();
	$guestUser = $guestUserHelper->getOneByPk($handle);
}
if((!is_object($character) && !is_object($guestUser)) || // no character match or
		(is_object($character) && !$character->getLoggedIn()) ){ // registered character isn't logged in
	$response->success = false;
	$response->text = "Character Not Logged In";
	echo json_encode($response);
	die();
}
include("TokenOperation.php");

$response->success = true;
$response->text = "";
$errorDetected = false;

// declare the variables and grab the input that we need.  First pass validation
$time = time(); 
/*$gndr = $chat_data['gndr'][$_GET['user']];
$stat = $chat_data['stat'][$_GET['user']];*/
$room = intval($_GET['room']);
$rand = floatval($_GET['rand']); // its too big to use intval.
$response->rand = $rand;
$priv = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['priv']), ENT_QUOTES);
$chat_name_color = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['chat_name_color']), ENT_QUOTES);
$chat_text_color = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['chat_text_color']), ENT_QUOTES);
$data = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['data']), ENT_QUOTES, 'utf-8');
$addr = htmlentities(preg_replace("/\\s+/iX", " ", $_GET['addr']), ENT_QUOTES);
$guid = $handle.$rand.$handle; 
  
// I don't check for a room because there may not be on in a PM
if ($rand > 0 &&
	$handle && 
    !empty($chat_name_color) &&
    !empty($chat_text_color) && 
    !empty($priv) && 
    !empty($data) )
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
  
  // Joe added a word filter
  $badWords = array("/fuck\S*/i",
  					"/bitch\S*/i",
			  		"/shit\S*/i",
			  		"/\bcunt\S*/i",
			  		"/penis\S*/i",
			  		"/pussy\S*/i",
			  		"/\bdick\S*/i",
			  		"/vagina\S*/i");
  foreach($badWords as $regex){
  	$data = preg_replace($regex, '****', $data);
  }

  	// this strips all {} characters out of the chat.  It's to prevent cheating on the dice rolls.
  $data = str_replace("{", "[", $data);
  $data = str_replace("}", "]", $data);
  
  // Joe added Operations
  $input = $data; // save the original input
  try{
  	$messages = array();
  	new TokenOperation($data, $messages);// data goes in and gets changed by reference, messages come out.
  	$response->messages = $messages;
  }catch(Exception $e){
  	$response->text = $e->getMessage(); // if the parser fails, 
  	$data = $input; // just store the original input
  	$errorDetected = true;
  }
  
	// The following commented code is the remains of the old kick/ban system. I left it here because I may borrow
	// ideas from it for my own kick/mute system later.
  /*if ($chat_data['mute'][$handle] || $chat_data['mute'][$_SERVER['REMOTE_ADDR']] || // if this character is muted or their ip is muted
      $chat_data['kick'][$handle] || $chat_data['kick'][$_SERVER['REMOTE_ADDR']])// if this character is kicked or their ip is kicked
  {
    $response->text = $chat_err_mute; // throw an error
    $response->success = false;
    die;
  }*/

  /*if (isset($chat_data['room'][$handle]) &&// verifies that a username and password are stored and the char is in a room
      isset($chat_data['user'][$handle]) &&
      isset($chat_data['pass'][$handle]) &&
           ($chat_data['pass'][$handle]) == $_GET['pass'])
  {*/
    //$modified = true; // set modified to true because we're adding a post. unused
    //$chat_data['time'][$handle] = $time;  // set the time into the chat data

    /*if ($chat_data['away'][$handle]) // if I'm away,
    	$chat_data['data'][] = "s\r\n$handle\r\n+";// put an s notice into the data stream to make me active again
    $chat_data['away'][$handle] = false; // set my away status to false in the chat data*/

    /*if(in_array($_GET['user'], $chat_admins) && // if the user is an admin, 
            preg_match("/^\\s*\\/(kick|mute)\\s*([0-9a-zA-Z_]+)\\s*([0-9]+)\\s*$/", $_GET['data'], $matches)) // and it's a mute or kick command
    {
      $cmd_type = $matches[1]; // kick or mute
      $cmd_user = $matches[2]; // username
      $cmd_time = $matches[3]; // time interval
      if ($cmd_type == 'kick') $chat_data['kick'][$cmd_user] = time()+$cmd_time*24*3600; // set the interval when the kick will expire
      if ($cmd_type == 'mute') $chat_data['mute'][$cmd_user] = time()+$cmd_time*24*3600; // set the interval when the ban will expire
      if ($cmd_type == 'kick') $response->text = "User <b>" . htmlentities($cmd_user) . "</b> is kicked for " . $cmd_time . " day(s)";
      if ($cmd_type == 'mute') $response->text = "User <b>" . htmlentities($cmd_user) . "</b> is  muted for " . $cmd_time . " day(s)";
      $response->success = false; // why not true?
    }
    elseif (in_array($_GET['user'], $chat_admins) && // if the user is an admin
            preg_match("/^\\s*\\/(list)\\s*(kick|mute)\\s*$/", $_GET['data'], $matches)) // and they are asking for a list of kicked or banned users,
    {
      if ($matches[2] == 'kick') $response->text = count($chat_data['kick']) . " user(s) kicked: " . implode(', ', array_keys($chat_data['kick']));
      if ($matches[2] == 'mute') $response->text = count($chat_data['mute']) . " user(s)  muted: " . implode(', ', array_keys($chat_data['mute']));
      $response->success = false; // why not true?
    }
    else*/
    {
    	$duplicate = false; 
    	$flood = false;
    	$ipPosts = array();
    	$FLOODCUTOFFTIME = 5; // can't post more than 3 times in a 5 second period.
    	$FLOODCUTOFFPOSTS = 5; // can't post more than 3 times in a 5 second period.
    	
    	// duplicate check
    	$chatLogHelper = new Model_Data_ChatLogProvider();
    	$duplicatePost = $chatLogHelper->getOneByHandleAndRand($handle, $rand);
    	$duplicate = is_object($duplicatePost);
    	
    	// flood check
    	$recentPosts = $chatLogHelper->getMyPosts($room, $handle, -1, $FLOODCUTOFFPOSTS, is_object($character));
    	$floodCheckPost = isset($recentPosts[0]) ? $recentPosts[0] : null; // they come out in reverse order so post 0 is the oldest of the three
    	if($floodCheckPost){
    		$timeDiff = time() - floor($floodCheckPost['chat_rand']/10); // must convert chat_rand into seconds
    		$flood = $timeDiff < $FLOODCUTOFFTIME;
    	}
    	 
    	if(!$duplicate && !$flood && !$errorDetected){ // if it's no duplicate, and it's not flood, nor did it fail previously,
    		
   		  $response->text = $data;
   		  
	      //--------------- Store the post in the DB
	      
	      $arrErrors = array();
	       
	      // create a chatlog record!
	      $chatLogProvider = new Model_Data_ChatLogProvider();
	      $userProvider = new Model_Data_Phpbb_UsersProvider();
	      $chatLog = new Model_Structure_ChatLog();
	       
	      //get the chat room id
	      $chatRoomProvider = new Model_Data_ChatRoomProvider();
	      $chatRoom = $chatRoomProvider->getOneByPk($room);
	      $chatLog->setChatRoomId($chatRoom->getChatRoomId());
	       
	      // get the user from the PHPBB
	      $chatLog->setUserId($userId);
	      
	      // handle comes from the input
	      $chatLog->setHandle($handle);
	      
	      if(is_object($character)){
	      	$chatLog->setCharacterId($character->getCharacterId());
	      }
	       
	      $chatLog->setChatTextColor($chat_text_color);
	      $chatLog->setChatNameColor($chat_name_color);
	      $chatLog->setText($data);
	      $chatLog->setChatRand($rand);
	       
	      if(!empty($priv) && $priv != '.'){
	      	$recipient = $userProvider->getOneByName($priv);
	      	if(is_object($recipient)){ // this is a registered user
	      		$chatLog->setRecipientUserId($recipient->getUserId());
	      	}
	      	$chatLog->setRecipientUsername($priv);
	      }
	      $chatLog->setTimestamp(null);
	      try{
	      	$chatLogProvider->insertChatLog($chatLog);
	      	$arrErrors = array();
	      	if(is_object($character)){ // registered user
	      		$character->setLastActivity(time());
	      		$characterHelper->updateOne($character, $arrErrors);
	      	}else{
      			$guestUser->setLastActivity(time());
      			$guestUserHelper->updateOne($guestUser, $arrErrors);
	      	}
	      	if(!empty($arrErrors))
	      		throw new Exception("Error setting last Activity: ". implode('|',$arrErrors));
	      }catch(Exception $e){
	      	$response->text = "I just don't know what went wrong!  But the system says this: " . implode('|',$arrErrors);
	      	$response->success = false;
	      }
        }elseif($flood){
        	$response->text = "Your post \"$data\" was not registered due to flood protection.";
        	$response->success = false;
        }else{ // duplicate
        	$response->success = false;
        }
    }
  /*}*/

  if ($modified){
  	file_put_contents('data.txt', serialize($chat_data));
  	
  }
}
echo json_encode($response);
?>