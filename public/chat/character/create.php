<?php
require_once '../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

// this operation requires the user to be logged in
if(empty($_SESSION['u_info'])){
	header('Location: ' . SITE_ROOT . '/tiki-login_scr.php');
}

$characterRaceProvider = new Model_Data_CharacterRaceProvider();
$characterAgeProvider = new Model_Data_CharacterAgeProvider();

$raceList = $characterRaceProvider->getRaceList();
$ageList = $characterAgeProvider->getAgeList();
/*echo "<pre>";
 print_r($this->vars->raceList);
print_r($this->vars->ageList);
echo "</pre>";*/

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Character</title>
    <link rel="stylesheet" href="<?=SITE_ROOT?>/css/characterStyle.css">
	<link href="<?=SITE_ROOT?>/css/le-frog/jquery-ui-1.10.2.custom.css" rel="stylesheet">
	<script src="<?=SITE_ROOT?>/js/jquery-1.9.1.js"></script>
	<script src="<?=SITE_ROOT?>/js/jquery-ui-1.10.2.custom.js"></script>
	<link href="<?=SITE_ROOT?>/js/spectrum/spectrum.css" rel="stylesheet" type="text/css"/>
	<script src="<?=SITE_ROOT?>/js/spectrum/spectrum.js"></script>
	<style>
	label{
		display: inline-block;
		width: 200px;
	}
	</style>
</head>
<body>
    <div id="siteContainer">
      <div id="site">
        <div id="headingContainer">
        </div>
        <div id="menuContainer">
        </div>
        <div id="contentContainer">
        	<h1>Create Your Character!</h1>
			<div id="tabs">
				<ul>
					<li><a href="#basics">The Basics</a></li>
					<li><a href="#texts">Texts</a></li>
				</ul>
				<form id="characterForm" enctype='multipart/form-data' method="POST" action="<?=SITE_ROOT?>/chat/character/save.php">
					<div id="basics">
						<label>Character Name:</label>
						<input type="text" name="character_name" id="character_name" required><br>
						
						<!-- <label>Formatted Name:</label>
						<input type="text" name="character_formatted_name" id="character_formatted_name" required><br> -->
						
						<label>Gender:</label>
						<input type="text" name="gender" id="gender"><br>
						
						<label>Race</label>
						<select name="race">
							<?php foreach ($raceList as $race): ?>
							<option title="<?=$race->getDescription()?>" value="<?=$race->getCharacterRaceId()?>"><?=$race->getName()?></option>
							<?php endforeach; ?>
						</select><br>
						
						<label>Age</label>
						<select name="age" id="age">
							<?php foreach ($ageList as $age): ?>
							<option title="<?=$age->getDescription()?>" value="<?=$age->getCharacterAgeId()?>"><?=$age->getName()?></option>
							<?php endforeach; ?>
						</select><br><br>
						<input type=submit value="Save New Character!">
						<hr>
						<label>Default Chat Colors:</label>
						<input type="text" id="chat_name_color" name="chat_name_color" size="7" value="">
						<input type="text" id="chat_text_color" name="chat_text_color" size="7" value=""><br>
						<p style="background-color: #000; color: #fff;"><span class="post_sample_1">Character</span>: <span class="post_sample_2">"I say something fun!"</span><br>
						: <span class="post_sample_1">Character does something fun!</span></p><br>
						<input type="submit" name="saveandview" value="Save New Character!">&nbsp;&nbsp;&nbsp;<input type="submit" name="saveandchat" value="Save & Go Chat!">
					</div>
					<div id="texts">
						<label>Status</label>
						<textarea id="status" name="status" rows="1" cols="80" title="Status was designed for temporary changes to your character or announcements of recent changes.  It is shown when you mouseover a character in the chat menu.">Hello Everypony!  I'm new!</textarea><br>
					
						<label>Bio</label>
						<textarea id="bio" name="bio" rows="5" cols="80" title="Bio is for backstory and more permanent changes to your character" placeholder="This is where you enter the biography"></textarea><br>
					
						<label>Player Notes</label>
						<textarea id="player_notes" name="player_notes" rows="5" cols="80" title="Player notes was designed for players to enter OOC details about their character." placeholder="Public Character Notes"></textarea><br>
					
						<label>Player Private Notes</label>
						<textarea id="player_private_notes" name="player_private_notes" rows="5" cols="80" title="Private player notes was designed for players to enter any details about their character that they don't want made public." placeholder="Private Character Notes"></textarea><br>
						<br>
						<input type="submit" name="saveandview" value="Save New Character!">&nbsp;&nbsp;&nbsp;<input type="submit" name="saveandchat" value="Save & Go Chat!">
					</div>
				</form>
			</div>
        </div>
        <div id="footerContainer">
        </div>
      </div>
    </div>
  </body>
<script type="text/javascript">
	$(function() {
		$( "#tabs" ).tabs();
	});
	$('#chat_name_color').spectrum({
		color: "white",
		preferredFormat: "hex6",
		showInput: true,
		clickoutFiresChange: true,
		showInitial: true,
		chooseText: "Pick Me!",
		cancelText: "I liked the old one better.",
		move: function(hex) {
			var samples = $('.post_sample_1');
			for(var i=0; i < samples.length; i++){
				samples[i].style.color = hex;
			};
		}
	});
	$('#chat_text_color').spectrum({
		color: "white",
		preferredFormat: "hex6",
		showInput: true,
		clickoutFiresChange: true,
		showInitial: true,
		chooseText: "Pick Me!",
		cancelText: "I liked the old one better.",
		move: function(hex) {
			var samples = $('.post_sample_2');
			for(var i=0; i < samples.length; i++){
				samples[i].style.color = hex;
			};
		}
	});
</script>
</html>
