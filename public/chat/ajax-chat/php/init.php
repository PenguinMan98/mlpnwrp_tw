<?php
// bootstrapping is done before we get here.
/*require_once CORE_ROOT . '/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();*/

/*echo "<pre>";
print_r($_REQUEST);
echo "</pre>";*/

// ***** Config ****************************************************************

// The list of admin users.
// To add multiple admins, use a code like this: array('admin1', 'admin2', 'admin3');
// this should be handled by the permissions system within PHPBB
$chat_admins    = array('Admin');

// The number of messages to get on refresh
$chat_histlen   = 50;

// Interval in seconds to wait before setting status to away
$chat_t_away    = 1200;

// Interval in seconds to wait before disconnecting a guest user
$chat_guest_logout  = 1800; // thirty minutes
$chat_registered_logout  = 9800; // three hours

// Interval in seconds between refreshes
$chat_t_refresh = 1;

// is the user registered or not
$registered = (bool)$userId;

// Messages sent to the users
$chat_err_inval = 'Invalid username or password!';
$chat_err_mismatch = 'This is not your character!';
$chat_err_inuse = 'You cannot use this handle. Please choose another.';
$chat_err_kick  = 'You are not allowed to enter the chat. Contact admin for explanation.';
$chat_err_mute  = 'You are not allowed to post in the chat. Contact admin for explanation.';

$FLOODCUTOFFTIME = 5; // can't post more than 3 times in a 5 second period.
$FLOODCUTOFFPOSTS = 3; // can't post more than 3 times in a 5 second period.

// get the first room you find for the $current_room
$chatRoomProvider = new Model_Data_ChatRoomProvider();
$chat_list = $chatRoomProvider->getChatList();

$current_room = false;
if(isset($handle)){
	$current_room = $chatRoomProvider->getOneByCharacter($handle);
	if(is_object($current_room)){
		$current_room = $current_room->getAsArray();
	}
}
// default if no other room was selected.
if(empty($current_room)){
	foreach($chat_list as $chatRoom){
		if(!$current_room){
			$current_room = $chatRoom;
			break;
		}
	}
}

// ***** Init ******************************************************************

// get character names
/*$characterList = false;
if($user->data['username_clean'] != 'anonymous'){
	$characterProvider = new Model_Data_CharacterProvider();
	$characterList = $characterProvider->getAllByUserId($userId);
}*/



error_reporting(E_ALL ^ E_NOTICE);// sets error reporting on.  Should turn this off when the site officially launches
ini_set("log_errors",     0); // Not sure we're using this.
ini_set("display_errors", 1); // should disable this on the live site eventually

/*if (!headers_sent())
{
  //session_id  ('lock');// why?
  //session_name('lock');// why?  The only advantage I can see is that all session data go into the same file.  As concise as that is... File locking may be an issue on systems with heavier load.
  session_start();// start the session // we already do this in the bootstrap

  header('Pragma: no-cache'); // no caching
  header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
  header('Expires: Fri, 31 Dec 1999 23:59:59 GMT');
}*/


/*echo "<pre>";
print_r($current_room);
print_r($guestUser);
print_r($character);
echo "</pre>";*/
// get the last 50 posts or so from the chatlog for this room; // Actually gonna do this in the javascript
//$chatLogHelper = new Model_Data_ChatLogProvider();
//$chatLog = 

/*-------------------------------------------------------------------------------------------------*/

//$chat_data = file_get_contents(dirname(__FILE__) . '/data.txt'); // get all the data from the text file into $chat_data
//$chat_data = $chat_data ?  unserialize($chat_data) : array(); // if there is anything there, unserialize it.  Otherwise set an empty array.

// all these arrays are indexed by username except the data array which indexes on msg_id?
// previously all state information was stored in here and saved into the flat file.
// not really necessary now I don't think
if (!isset($chat_data['time'])) $chat_data['time'] = array();
if (!isset($chat_data['away'])) $chat_data['away'] = array();
if (!isset($chat_data['gndr'])) $chat_data['gndr'] = array();
if (!isset($chat_data['stat'])) $chat_data['stat'] = array();
if (!isset($chat_data['room'])) $chat_data['room'] = array();
if (!isset($chat_data['user'])) $chat_data['user'] = array();
if (!isset($chat_data['pass'])) $chat_data['pass'] = array();
if (!isset($chat_data['data'])) $chat_data['data'] = array();
if (!isset($chat_data['kick'])) $chat_data['kick'] = array();
if (!isset($chat_data['mute'])) $chat_data['mute'] = array();


// ***** Lib *******************************************************************

// ***** chat_chk_guest     *****

function chat_chk_guest($handle, &$gender, &$status)
{
  $gender = 'none';
  $status = 'none';
  
  $characterProvider = new Model_Data_CharacterProvider();
  if($characterProvider->verifyCharacterName(str_replace('GT-','',$handle))){ // if it's a registered user
  	return false; // fail.  You can't use a registered character name.
  }
  
  return !isset($GLOBALS['chat_data']['user'][$handle]); // true if this user is in use, false otherwise
}

// ***** microtime_float    *****

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return (float)$usec+(float)$sec;
}

// ***** file_put_contents  *****

if (!function_exists('file_put_contents'))
{
  function file_put_contents($name, $data)
  {
    if (!($handle = @fopen($name, 'w'))) return false;
    $bytes = fwrite($handle, $data);
    fclose($handle);
    return $bytes;
  }
}

// ***** strip_slashes_deep *****

if (!function_exists('strip_slashes_deep') && get_magic_quotes_gpc())
{
  function strip_slashes_deep($value)
  {
    if (is_array($value)) return array_map('strip_slashes_deep', $value);
    return stripslashes($value);
  }

  $_GET    = strip_slashes_deep($_GET);
  $_POST   = strip_slashes_deep($_POST);
  $_COOKIE = strip_slashes_deep($_COOKIE);
}

// ***** unlog_users        *****
/**
 * unlog_users()
 * This function updates the last modified timestamp for the current user
 * and updates the away status of everyone
 * and logs out the ones who have been idle too long 
 * and updates the mute / kick status
 * 
 * Finally it answers yes/no if it changed anything or not.
 * 
 * @return boolean
 */

function unlog_users()
{
	// perhaps this code can be used as an idea machine for my unlogging project.
  /*$modified = false;

  if (isset($GLOBALS['chat_data']['user'][$_GET['user']])) // If this global is set, 
  {
    $GLOBALS['chat_data']['user'][$_GET['user']] = microtime_float(); // Change it to this timestamp 
    $modified = true; // And flag that we've changed it 
  }

  foreach  ($GLOBALS['chat_data']['time'] as $user => $tm) // Go through this array of users and timestamps 
  	if ($tm  <  time()-$GLOBALS['chat_t_away']) // if the timestamp is less than now -  the away interval 
	  if ( !$GLOBALS['chat_data']['away'][$user]) // and if the user is not set as away 
	  {
	    $GLOBALS['chat_data']['data'][] = "s\r\n$user\r\n-"; // Add the user to the data array with an s 
	    $GLOBALS['chat_data']['away'][$user] = true; // set the away status to true 
	  }

  foreach  ($GLOBALS['chat_data']['user'] as $user => $tm) // Go through the user array again 
  if ($tm  <  microtime_float()-$GLOBALS['chat_t_logout']) // if the timestamp is less than now - logout interval
  {
    $GLOBALS['chat_data']['data'][] = "-\r\n{$GLOBALS['chat_data']['room'][$user]}\r\n$user"; // add the user to the array with a - 
    unset($GLOBALS['chat_data']['time'][$user]);// unset all their data 
    unset($GLOBALS['chat_data']['away'][$user]);
    unset($GLOBALS['chat_data']['gndr'][$user]);
    unset($GLOBALS['chat_data']['stat'][$user]);
    unset($GLOBALS['chat_data']['room'][$user]);
    unset($GLOBALS['chat_data']['user'][$user]);
    unset($GLOBALS['chat_data']['pass'][$user]);
    $modified = true; // flag that we've made a change 
  }

  foreach  ($GLOBALS['chat_data']['kick'] as $user => $tm) // Go through the kicked array 
  	  if ($tm < time()) //if the time stamp stored there for that user is less than now, 
	  {
	    unset($GLOBALS['chat_data']['kick'][$user]); // remove them from the kick array 
	    $modified = true; // flag we've made a change 
	  }

  foreach  ($GLOBALS['chat_data']['mute'] as $user => $tm) // search the mute array 
	  if ($tm < time()) //if the time stamp stored there for that user is less than now, 
	  {
	    unset($GLOBALS['chat_data']['mute'][$user]); // remove them from the mute array 
	    $modified = true; // flag we've made a change 
	  }

  return  $modified;  */
}

?>