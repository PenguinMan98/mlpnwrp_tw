<?php 
/*
 * Notes to self:
 * 1) Using the session to store anything specific to one instance of the chat is a bad idea because it will 
 * cause complications later for having multiple windows open.
 * */

require_once '../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

if (empty($_POST['handle'])) // if no username, 
{
	//$_SESSION['SYSTEM_MESSAGE'] = "Error, Not Logged in"; // don't bother with an error message.  It's redundant
	header("Location: ../login.php");// send them to login.php.
	die();
} 
if(!preg_match("/^[\w_-]*$/", $_POST['handle'])){ 
	$_SESSION['SYSTEM_MESSAGE'] = "Error, invalid username";
	header("Location: ../login.php");// reject a bad username.
	die();
}
if( ( !$userId || empty($userId) ) && $_POST['loggedIn'] ){// if I'm not logged in, but the login form thought I was,
	$_SESSION['SYSTEM_MESSAGE'] = "Your session expired. Please log in again.";
	header("Location: ../login.php");// stale login page.  Send them back.
	die();
}

if(!empty($userId)){
	$ucProvider = new Model_Data_UserChastisementProvider();
	if($ucProvider->is_banned($userId)){
		session_destroy(); // log them ALL the way out
		session_start();
		$_SESSION['SYSTEM_MESSAGE'] = "Your player account has been banned.";
		header("Location: ../login.php");
		die();
	}
	$duration = $ucProvider->is_kicked($userId);
	if($duration){
		session_destroy(); // log them ALL the way out
		session_start();
		$_SESSION['SYSTEM_MESSAGE'] = "Your player account has been kicked for $duration minutes.";
		header("Location: ../login.php");
		die();
	}
}

$handle = $_POST['handle'];
$characterId = isset($_POST['character_id'])? $_POST['character_id'] : null;

include_once PUBLIC_ROOT . '/chat/ajax-chat/php/init.php'; /*the main php include file*/

// add the guest character to the database
// or log in the registered character
$arrErrors = array();
if(!$userId || empty($userId)) {
		$_SESSION['SYSTEM_MESSAGE'] = "Guest accounts are disabled. Sorry.";
		header("Location: ../login.php");
	//echo "Logged in as guest: " . $_POST['handle'] . "<br>";
	$guestUserHelper = new Model_Data_GuestUsersProvider();
	$guestUser = new Model_Structure_GuestUsers();
	$guestUser->setChatRoomId($current_room['chat_room_id']);
	$guestUser->setHandle($handle);
	$guestUser->setGuestIp($_SERVER['REMOTE_ADDR']);
	$guestUser->setLastActivity(time());
	$guestUserHelper->replaceOne($guestUser, $arrErrors);
	// add the character handle to the temporary player table
} elseif(empty($characterId)) {
		$_SESSION['SYSTEM_MESSAGE'] = "Guest accounts are disabled. Sorry.";
		header("Location: ../login.php");
	//echo "Logged in as user: " . $userName . " with guest character: ".$_POST['handle']."<br>";
	$guestUserHelper = new Model_Data_GuestUsersProvider();
	$guestUser = new Model_Structure_GuestUsers();
	$guestUser->setChatRoomId($current_room['chat_room_id']);
	$guestUser->setHandle($handle);
	$guestUser->setUserId($userName);
	$guestUser->setGuestIp($_SERVER['REMOTE_ADDR']);
	$guestUser->setLastActivity(time());
	$guestUserHelper->replaceOne($guestUser, $arrErrors);
	// add the character handle to the temporary player table
} else {
	//echo "Logged in as user: " . $userName . " with character: ".$_POST['handle']."<br>";
	$characterHelper = new Model_Data_CharacterProvider();
	$character = $characterHelper->getOneByCharacterName($handle);
	$character->setLoggedIn(true);
	$character->setLastActivity(time());
	$character->setChatRoomId($current_room['chat_room_id']);
	$characterHelper->updateOne($character, $arrErrors);
	// tell the database this character is logged in
}
if(!empty($arrErrors)){
	die(implode('|',$arrErrors));
}

$profilePic = false;
$cutieMark = false;
$chatIcon = false;
if($characterId){
	$profilePic = getImage('profile_pic', $characterId);
	$cutieMark = getImage('cutie_mark', $characterId);
	$chatIcon = getImage('chat_icon', $characterId);
}
if($profilePic){
	// unfinished?
}

$chat_text_color = (is_object($character)) ? $character->getChatTextColor() : "#ffffff";
$chat_name_color = (is_object($character)) ? $character->getChatNameColor() : "#ffffff";

//$chat_logs = array('add' => false, 'get' => false, 'log' => false);// probably won't need this
//$chat_show = array('login' => true, 'guest' => true); // or this
//$chat_path = 'ajax-chat/'; // make everything relative to site_root
?><html>
<head>

<title><?=$handle?> - My Little Pony: New Worlds Roleplay Chat!</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords"    content="" />

<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="<?=SITE_ROOT?>/chat/ajax-chat/style/style.css" />

<style>
	<?php if($profilePic): ?>
	#character_info_image{
		position: absolute;
		height: 100%;
		width: 100%;
		background:transparent url(../img/<?=$characterId?>/<?=$profilePic?>) no-repeat scroll top left;
		background-size: 200px;
		opacity: 0.1; 
		filter: alpha(opacity=10);
	}
	<?php endif; ?>
</style>

<script type="text/javascript" src="<?=SITE_ROOT?>/js/jquery.js" > </script>
<script type="text/javascript" src="<?=SITE_ROOT?>/chat/ajax-chat/js/cookies.js"></script>

<script type="text/javascript">
var room 		 = <?=$current_room['chat_room_id']?>; /* for now default this */
var handle 		 = '<?=$handle?>';
<?php if(is_object($character)): ?>
var chat_name_color = '<?=$chat_name_color?>';
var chat_text_color = '<?=$chat_text_color?>';
var character_id = <?=$characterId?>;
<?php else: ?>
var chat_name_color = 'white';
var chat_text_color = 'white';
var character_id = 'G';
<?php endif; ?>
var guest_char   = <?=is_object($guestUser) ? 'true' : 'false'?>;
var forum_login  = <?=($user->data['user_id'] == 'ANONYMOUS') ? 'false' : 'true'; ?>;
var chat_timeout = <?=$chat_t_refresh;?>;
var autofocus    = true;
var back_posts   = 50;
var dingOnNew    = false;
var chat_addr    = "<?= $_SERVER['REMOTE_ADDR'] ?>";
var SITE_ROOT	 = "<?=SITE_ROOT?>";
var chat_path	 = "<?=SITE_ROOT?>/chat/ajax-chat/";
var chatColorOverride = true;
var chatColorOverrideColor = '#ddd';
var profilePic = '<?=$profilePic?>';
var cutieMark = '<?=$cutieMark?>';
var chatIcon = '<?=$chatIcon?>';
<?php if(!empty($_SESSION[$handle]['stare_array'])): ?>
var stare_array = <?=json_encode($_SESSION[$handle]['stare_array'])?>;
<?php else: ?>
var stare_array = [];
<?php endif; ?>
<?php if(!empty($_SESSION[$handle]['mute_array'])): ?>
var mute_array = <?=json_encode($_SESSION[$handle]['mute_array'])?>;
<?php else: ?>
var mute_array = [];
<?php endif; ?>
</script>

</head>
<body>
	<audio id="audio_ding" style="display: none;" controls>
	  <source src="<?=SITE_ROOT?>/media/ding.wav" type="audio/wav"></source>
	  <source src="<?=SITE_ROOT?>/media/ding.mp3" type="audio/mpeg"></source>
	</audio>
	<div id="page-wrap">

		<div id="top_menu">&nbsp;&nbsp;<a target="_blank" href="/">Home</a>&nbsp;&nbsp;
			|&nbsp;&nbsp;<a target="_blank" href="<?=SITE_ROOT?>/Site+Rules">Site Rules</a>&nbsp;&nbsp;
			|&nbsp;&nbsp;<a target="_blank" href="<?=SITE_ROOT?>/Chat+Commands">Chat Commands</a>&nbsp;&nbsp;
			|&nbsp;&nbsp;<a href="#" onClick="togglePreferences(this);">Preferences</a>&nbsp;&nbsp;
			<?php if(is_object($character)):?>|&nbsp;&nbsp;<a target="_blank" href="<?=SITE_ROOT?>/chat/character/edit.php?c=<?=$handle?>">Profile</a>&nbsp;&nbsp;<?php endif;?>
			|&nbsp;&nbsp;<a href="<?=SITE_ROOT?>/chat/ajax-chat/php/logout.php?handle=<?=$handle?><?php if($characterId) echo "&character_id=$characterId"?>">Logout</a>&nbsp;&nbsp;
		</div>
		
		<div id="chat">
		
		</div>
		
		<div id="exit_pm">
			<span id="exit_pm_text"></span>
			<input type="button" onClick="chat_priv_switch('.',true);" value="X">
		</div>
	    <div id="rooms">
			<div class="room" id="room_child">
<?php 
$chatRoomHelper = new Model_Data_ChatRoomProvider();
$chatRoomList = $chatRoomHelper->getChatList();

$roomTypeId = 0;
$roomType = "";
foreach ($chatRoomList as $chatRoom) { 
	if($roomTypeId != $chatRoom['chat_room_type_id']){
		if($roomTypeId != 0){
			echo "</select><br>";
		}
		$roomTypeId = $chatRoom['chat_room_type_id'];
		$roomType = $chatRoom['type'];
		echo "<label>$roomType</label><br><select onChange=\"room_change( this.value,".(is_object($character)? 'true':'false').", '$handle'); $(this).prop('selectedIndex',0);\">
				<option value=\"\">$roomType</option>";
	}
	//if($chatRoom['chat_room_id'] != $current_room['chat_room_id'])
		echo "<option value=\"".$chatRoom['chat_room_id']."\">".$chatRoom['room_name']."</option>";
	
} ?>
				</select>
			</div>
	    
	    </div>
        <div id="room_list">
			<div id="header_messages">
				<?php if(file_exists("../img/room1.png")): ?>
				<img src="../img/room1.png">
				<?php else : 
					echo $currentRoom['room_name'];
				endif;?>
			</div>
        	<div id="messages"></div>
            <!-- <div id="header_users">Users</div> -->
		    <div id="users">
		      <div class="first"></div>
		      <div id="users_private"></div>
		      <div class="other"></div>
		      <div id="users_this_room"></div>
		      <div id="other_rooms"></div>
		      <div id="users_other"></div>
		    </div>
        </div>

        <div id="form">
        	<form class="send" action="POST" onsubmit="chat_msgs_add(); return false;">
	        	<span id="character_name" style="color: <?=$chat_name_color?>"><?=$handle?></span>:
	        	<input style="color: <?=$chat_text_color?>" id="send" type="text" autocomplete="off" />
	    		<input id="submit_send" class="submit" type="submit" value="Send" />
	    	</form>
    	</div>
	</div>
	<div id="preferences_container">
		<div id="preferences_box">
			<h3><u>Preferences</u></h3>
			<label>Chat Text Color Override:</label><br>
			&nbsp;&nbsp;&nbsp;<input type="checkbox" onclick="chatColorOverride = this.checked;"/><br>
			<label>Autofocus</label><input id="autofocus" checked=true class="input" type="checkbox" onclick="autofocus = this.checked;" /><br>
			<label>Ping On New</label><input id="pingOnNew" class="input" type="checkbox" onclick="pingOnNew = this.checked;" />
		</div>
	</div>
			
	
	
<?php include_once PUBLIC_ROOT . '/chat/ajax-chat/ajax-chat.php'; /*the main HTML include file*/?>

</body>
</html>
<script type="text/javascript" src="<?=SITE_ROOT?>/chat/ajax-chat/js/ajax-chat.js" > </script>
<script>
	$(function(){
		// this is the call that starts it all. Params are: (roomId, isRegistered, $handle)
		chat_api_onload(room, !guest_char, handle);

			/* TAB COMPLETION */
		$('#send').keydown(function( e ){
			if(e.which == 9){
				var tc_post = $('#send').val();
				var tc_lastWord = tc_post.match(/\w*$/i);
				for (var i in chat_usrs){
					var tc_charName = chat_usrs[i]['name'];
					var tc_regex = '^' + tc_lastWord;
					if( tc_charName.match(new RegExp(tc_regex, 'i')) ){
						var tc_replaceRegex = tc_lastWord + '$';
						$('#send').val( tc_post.replace( new RegExp( tc_replaceRegex, 'i'), tc_charName) );
					}
				}
				return false;
			}
		});

		$('#header_messages').on('click',function(){
			if($('#rooms').css('display')=='block'){
				hideRooms();
			}else{
				showRooms();
			}
		});

		/*$(window).unload( logmeout() );*/
		
		/*$('#exit_pm').on('click',function(){chat_priv_switch('.',true);});*/
	});
	
	function logmeout(){
		$.ajax({
			url: chat_path+"php/logout.php",
			data: {handle: handle
				<?php if($characterId): ?>, character_id: <?=$characterId?> <?php endif;?>},
			dataType: "JSON" 
		});
	}

	</script>