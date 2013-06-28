<?php 
require_once '../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

?><!DOCTYPE HTML>
<html>

<head>

	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Welcome to our Chat!  Please Log in!</title>
	
	<link rel='stylesheet' type='text/css' href='css/chat/style.css' />
	<link rel='stylesheet' type='text/css' href='css/le-frog/jquery-ui-1.10.2.custom.css' />
	
    <script src="js/jquery.js"> </script>
    <script src="js/jquery-ui-1.10.2.custom.js"> </script>
    
    <style>
body{
	width: 100%;
	height: 100%;
	background-color: black;
}
#site_frame{
	width: 400px;
	margin: 0 auto;
}
#login{
	top: 200px;
	width: 400px;
}
#character_selection{
	display: none;
}
label{
	display: inline-block;
	width: 115px;
}
.form_error{
	color: red;
	display: none;
}
input[type="button"]{
	margin-left: 115px;
}
</style>
</head>

<body>
	<div id="site_frame">
		<div id="login">
			<ul>
				<li><a href="#tabs-1">Login</a></li>
				<li><a href="#tabs-2">Login as Guest</a></li>
			</ul>
			<div id="tabs-1">
				<form id="login_form" action="chat/" method="POST">
					<div class="form_error" id="login_form_error"></div>
					<div id="login_fields">
						<label>Username: </label><input type="text" id="forum_username" placeholder="Wiki User" value="<?php if($userName != 'Anonymous') echo $userName;?>" /><br>
						<label>Password: </label><input type="password" id="forum_password" placeholder="Wiki Password" /><br>
					</div>
					<div id="character_selection">
						<label>Character: </label><select id="chat_character" name="character_id" onChange="$('#handle').val(this.options[this.selectedIndex].text);"></select><br>
						<input type="hidden" id="handle" name="handle" value="">
					</div>
					<br>
					<input type="button" id="forum_login" name="forum_login" value="&nbsp;&nbsp;Login&nbsp;&nbsp;" onClick="logMeIn();">
				</form>
			</div>
			<div id="tabs-2">
				<form id="guest_login_form" action="chat/" method="post">
					<div class="form_error" id="guest_login_form_error"></div>
					<label>Guest Handle: </label><input type="text" id="guest_username" name="handle" placeholder="Handle" /><br>
					<br>
					<input type="button" id="guest_login" name="guest_login" value="&nbsp;&nbsp;Login&nbsp;&nbsp;" onClick="logGuestIn();">
				</form>
			</div>
		
		</div>
	</div>
	<script>
$(function() {
	/*window.location = "http://www.mlpnwrp.org/chat";*/
	
	$('#login').tabs();

	<?php if($loggedIn): ?>
	$.ajax({
		url: "chat/ajax-chat/php/character_list.php",
		data: { },
		dataType: "JSON"
	})
	.done(function(response) {
		if(response.success){
			$('#login_fields').hide();
		}
		if(response.success && response.characterList.length > 0){ // I have characters
			$('#login_form_error').hide();
			$('#character_selection').show();
			var select = $('#chat_character');
			for(var i = 0; i < response.characterList.length; i++){ 
				select.append('<option value="'+response.characterList[i].character_id+'">'+response.characterList[i].name+'</option>');
				if(i==0){ // store the name of the first character in 'handle'
					$('#handle').val(response.characterList[i].name);
				}
			}
			$('#character_selection').append('<label></label><a href="<?=SITE_ROOT?>/chat/character/create.php">Create a new character!</a>');
		}else if(response.success){ // no characters!
			$('#login_form_error').hide();
			$('#character_selection').html('<label>Character: </label><a href="<?=SITE_ROOT?>/chat/character/create.php">Make a character!</a>');
			$('#character_selection').show();
		}
	});
	
	<?php endif;?>
});

function logMeIn(){
	var username = $('#forum_username').val();
	if(typeof username == 'undefined' || username == ''){
		$('#login_form_error').show();
		$('#login_form_error').html('**Enter a Username!<br>');
		return false;
	}
	var pattern = /^[\w_\-\s]*$/i; // accept all alpha characters, underscore, hyphen, and space
	if( !pattern.test( username ) ){
		$('#login_form_error').show();
		$('#login_form_error').html('**Usernames may only contain letters, numbers, _ , - and space!<br>');
		return false;
	}
	// use ajax call to log into the forum and set the forum cookies and return a list of characters
	if($('#chat_character').val() == null){
		$.ajax({
			url: "my-tiki-login.php",
			data: {user: username, pass: $('#forum_password').val() },
			dataType: "JSON"
		})
		.done(function(response) {
			if(response.success){
				$('#login_fields').hide();
			}
			if(response.success && response.characterList.length > 0){ // if this succeeds, we found a reserved character name
				$('#login_form_error').hide();
				$('#character_selection').show();
				var select = $('#chat_character');
				for(var i = 0; i < response.characterList.length; i++){ 
					select.append('<option value="'+response.characterList[i].character_id+'">'+response.characterList[i].name+'</option>');
				}
				$('#character_selection').append('<label></label><a href="<?=SITE_ROOT?>/chat/character/create.php">Create a new character!</a>');
			}else if(response.success){ // no characters!
				$('#login_form_error').hide();
				$('#character_selection').html('<label>Character: </label><a href="<?=SITE_ROOT?>/chat/character/create.php">Make a character!</a>');
				$('#character_selection').show();
			}else{
				$('#login_form_error').show();
				$('#login_form_error').html('**' + response.error + '<br>');
			}
		});
	}else{
		$('#login_form').submit();
	}
}

function logGuestIn(){
	var guestUsername = $('#guest_username').val();
	if(typeof guestUsername == 'undefined' || guestUsername == ''){
		$('#guest_login_form_error').show();
		$('#guest_login_form_error').html('**Enter a Username!<br>');
		return false;
	}
	var pattern = /^[\w_-]*$/i; // accept all alpha characters, underscore and hyphen
	if( !pattern.test( guestUsername ) ){
		$('#guest_login_form_error').show();
		$('#guest_login_form_error').html('**Usernames may only contain letters, numbers, _ and -!<br>');
		return false;
	}
	// use ajax call to see if username is reserved
	$.ajax({
		url: "chat/ajax-chat/php/login_guest.php",
		data: {characterName: guestUsername},
		dataType: "JSON"
	})
	.done(function(response) {
		if(response.success){ // if this succeeds, we found a reserved character name
			$('#guest_login_form').submit();
		}else{
			$('#guest_login_form_error').show();
			$('#guest_login_form_error').html('**' + response.message + '<br>');
		}
	});
}

	</script>
</body>
</html>