<?php 
/*
 * Notes to self:
 * 1) Using the session to store anything specific to one instance of the chat is a bad idea because it will 
 * cause complications later for having multiple windows open.
 * */

require_once '../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

/*echo "<pre>";
print_r($_REQUEST);
print_r($user->data);
echo "</pre>";
die();*/
if (empty($_POST['handle'])) // if no username, 
{
	header("Location: ../login.php");// send them to login.php.
} 
if(!preg_match("/^[\w_-]*$/", $_POST['handle'])){ 
	header("Location: ../login.php");// reject a bad username.
}
$handle = $_POST['handle'];
$characterId = isset($_POST['character_id'])? $_POST['character_id'] : null;

include_once PUBLIC_ROOT . '/chat/ajax-chat/php/init.php'; /*the main php include file*/

// add the guest character to the database
// or log in the registered character
$arrErrors = array();
if(!$userId) {
	//echo "Logged in as guest: " . $_POST['handle'] . "<br>";
	$guestUserHelper = new Model_Data_GuestUsersProvider();
	$guestUser = new Model_Structure_GuestUsers();
	$guestUser->setChatRoomId($current_room->getChatRoomId());
	$guestUser->setHandle($handle);
	$guestUser->setGuestIp($_SERVER['REMOTE_ADDR']);
	$guestUser->setLastActivity(time());
	$guestUserHelper->replaceOne($guestUser, $arrErrors);
	// add the character handle to the temporary player table
} elseif(empty($characterId)) {
	//echo "Logged in as user: " . $userName . " with guest character: ".$_POST['handle']."<br>";
	$guestUserHelper = new Model_Data_GuestUsersProvider();
	$guestUser = new Model_Structure_GuestUsers();
	$guestUser->setChatRoomId($current_room->getChatRoomId());
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
	$character->setChatRoomId($current_room->getChatRoomId());
	$characterHelper->updateOne($character, $arrErrors);
	// tell the database this character is logged in
}
if(!empty($arrErrors)){
	die(implode('|',$arrErrors));
}

//$chat_logs = array('add' => false, 'get' => false, 'log' => false);// probably won't need this
//$chat_show = array('login' => true, 'guest' => true); // or this
//$chat_path = 'ajax-chat/'; // make everything relative to site_root
?><html>
<head>

<title>My Little Pony: New Worlds Roleplay Chat!</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords"    content="" />

<link href='http://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="<?=SITE_ROOT?>/chat/ajax-chat/style/style.css" />

<script type="text/javascript" src="<?=SITE_ROOT?>/js/jquery.js" > </script>
<script type="text/javascript" src="<?=SITE_ROOT?>/chat/ajax-chat/js/cookies.js"></script>

<script type="text/javascript">
var room 		 = <?=$current_room->getChatRoomId()?>; /* for now default this */
var handle 		 = '<?=$handle?>';
<?php if(is_object($character)): ?>
var chat_name_color = '<?=$character->getChatNameColor()?>';
var chat_text_color = '<?=$character->getChatTextColor()?>';
<?php else: ?>
var chat_name_color = 'white';
var chat_text_color = 'white';
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

</script>

</head>
<body>
	<audio id="audio_ding" style="display: none;" controls>
	  <source src="<?=SITE_ROOT?>/media/12844__schluppipuppie__kling-01.wav" type="audio/wav"></source>
	  <source src="<?=SITE_ROOT?>/media/12844__schluppipuppie__kling-01.mp3" type="audio/mpeg"></source>
	</audio>
	<div id="page-wrap">

		<div id="top_menu">&nbsp;&nbsp;<a target="_blank" href="<?=SITE_ROOT?>">Home</a>&nbsp;&nbsp;
			|&nbsp;&nbsp;<a href="<?=SITE_ROOT?>/rules">Site Rules</a>&nbsp;&nbsp;
			|&nbsp;&nbsp;<a href="#">Chat Commands</a>&nbsp;&nbsp;
			|&nbsp;&nbsp;<a href="#" onClick="togglePreferences(this);">Preferences</a>&nbsp;&nbsp;
			<?php if(is_object($character)):?>|&nbsp;&nbsp;<a target="_blank" href="<?=SITE_ROOT?>/chat/character/edit.php?c=<?=$handle?>">Profile</a>&nbsp;&nbsp;<?php endif;?>
			|&nbsp;&nbsp;<a href="<?=SITE_ROOT?>/chat/ajax-chat/php/logout.php?handle=<?=$handle?><?php if($characterId) echo "&character_id=$characterId"?>">Logout</a>&nbsp;&nbsp;
		</div>
		
		<div id="chat">
		
		</div>
		
        <div id="room_list">
			<div id="exit_pm">
				<span id="exit_pm_text"></span>
				<input type="button" onClick="chat_priv_switch('.',true);" value="X">
			</div>
		    <div id="rooms">
<?php 
$chatRoomHelper = new Model_Data_ChatRoomProvider();
$chatRoomList = $chatRoomHelper->getChatList();
?>
				<div class="room" id="room_child">
<?php foreach ($chatRoomList as $chatRoom) { ?>
					<a class="main" href="javascript:room_change(<?=$chatRoom->getChatRoomId();?>, <?=is_object($character)? 'true':'false'?>, '<?=$handle?>');"><?=$chatRoom->getRoomName();?></a><br>
<?php } ?>
				</div>
		    
		    </div>
			<div id="header_messages"><img src="../img/room1.png"></div>
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
	        	<span id="character_name"><?=$handle?></span>:
	        	<input id="send" type="text" size="100" autocomplete="off" />
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

	/*character HUD*/
	function showHUD(element, charName){
		var linkRect = element.getBoundingClientRect();
		if(!linkRect || charName == "") return false;
		var linkVCenterOffset = (linkRect.bottom - linkRect.top) / 2;
		$.ajax({
			url: chat_path+"php/character_info.php",
			data: {characterName: charName},
			dataType: "JSON"
		})
		.done(function(response) {
			console.log(response);
			if(response.success && $('#character_info_base').css('display') == 'none'){
				$('#character_info_base').css('display','block');
				$('#character_info_base').css('left', linkRect.left-250 );

				$('#hud_character_name').html('<a href="<?=SITE_ROOT?>/chat/character/view.php?c='+response.characterInfo.name+'" target="_blank">' + response.characterInfo.name + '</a>');
				
				$('#hud_player_name').html(response.characterInfo.username);

				if(		typeof chat_usrs == 'undefined' || 
						typeof chat_usrs[response.characterInfo.name] == 'undefined' || 
						typeof chat_usrs[response.characterInfo.name][3] == 'undefined' || 
						!chat_usrs[response.characterInfo.name][3]){ 
					$('#hud_activity_status').html('Away'); 
				}else{
					$('#hud_activity_status').html('Active'); 
				};
				
				$('#hud_room').html(roomList[response.characterInfo.chat_room_id]);
				$('#hud_room').off('click');
				$('#hud_room').on('click',function(){room_change(response.characterInfo.chat_room_id, !guest_char, chat_user);});
				$('#hud_room').css('cursor','pointer');

				$('#hud_chat_status').html('A status');
				
				var modalRect = $('#character_info_base').get(0).getBoundingClientRect();
				var modalVCenterOffset = (modalRect.bottom - modalRect.top) / 2;
				$('#character_info_base').css('top', linkRect.top + linkVCenterOffset - modalVCenterOffset );
			}else{
				$('#character_info_base').css('display','none');
			}
		});
	}

	</script>