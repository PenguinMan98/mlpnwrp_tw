<?php
require_once '../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

// this operation requires the user to be logged in
if(empty($_SESSION['u_info'])){
	header('Location: ' . SITE_ROOT . '/tiki-login_scr.php');
}

$charName = $_GET['c'];
$characterProvider = new Model_Data_CharacterProvider();
$character = $characterProvider->getDetailsByCharacterName($charName);
if(empty($character)) {
	// redirect to the character search page
	die("I don't know anypony named $charName!  Sorry! Maybe one will fall from the sky tomorrow?");
}

$userProvider = new Model_Data_Phpbb_UsersProvider();
//$userId = $character['user_id'];
if(!$userProvider->verifyUserAndCharacterId($userId, $character['character_id'])){
	die("This is not your character.");
}

$characterRaceProvider = new Model_Data_CharacterRaceProvider();
$characterAgeProvider = new Model_Data_CharacterAgeProvider();
$raceList = $characterRaceProvider->getRaceList();
$ageList = $characterAgeProvider->getAgeList();

$basic_race = false;
foreach($raceList as $rl){
	if($rl->getName() == $character['race']){
		$basic_race = true;
	}
}
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
	.post_sample_1 {color: <?=$character['chat_name_color']?>}
	.post_sample_2 {color: <?=$character['chat_text_color']?>}
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
        	<h1>Edit <?=$character['name']?></h1>
			<div id="tabs">
				<ul>
					<li><a href="#basics">The Basics</a></li>
					<li><a href="#texts">Texts</a></li>
					<li><a href="#images">Images</a></li>
									</ul>
				<form id="characterForm" enctype='multipart/form-data' method="POST" action="<?=SITE_ROOT?>/chat/character/save.php">
					<div id="basics">
						<label>Character Name:</label>
						<input type="hidden" name="character_name" value="<?=$character['name']?>" />
						<?=$character['name']?><br>
						
						<!-- <label>Formatted Name:</label>
						<input type="text" name="character_formatted_name" id="character_formatted_name" required><br> -->
						
						<label>Birth Gender:</label>
						<select name="birth_gender">
							<option value="female" <?=($character['born_female']) ? 'selected' : ''?>>Female</option>
							<option value="male" <?=($character['born_female']) ? '' : 'selected'?>>Male</option>
						</select><br>
						
						<label>Current Gender:</label>
						<select name="current_gender">
							<option value="female" <?=($character['currently_female']) ? 'selected' : ''?>>Female</option>
							<option value="male" <?=($character['currently_female']) ? '' : 'selected'?>>Male</option>
						</select><br>
												
						<label>Race</label>
						<select name="race">
							<?php if(!$basic_race): ?>
								<option value="<?=$character['character_race_id']?>"><?=$character['race']?></option>
							<?php endif; ?>
							<?php foreach ($raceList as $race): ?>
							<option 
								title="<?=$race->getDescription()?>" 
								value="<?=$race->getCharacterRaceId()?>"
								<?=($character['character_race_id'] == $race->getCharacterRaceId()) ? 'selected' : ''?>
								><?=$race->getName()?></option>
							<?php endforeach; ?>
						</select><br>
						
						<label>Age</label>
						<select name="age" id="age">
							<?php foreach ($ageList as $age): ?>
							<option 
								title="<?=$age->getDescription()?>" 
								value="<?=$age->getCharacterAgeId()?>"
								<?=($character['character_age_id'] == $age->getCharacterAgeId()) ? 'selected' : ''?>
								><?=$age->getName()?>
								</option>
							<?php endforeach; ?>
						</select><br>
						<br>
						<input type="submit" name="edit" value="Update">
						<hr>
						<label>Default Chat Colors:</label>
						<input type="text" id="chat_name_color" name="chat_name_color" size="7" value="<?=$character['chat_name_color']?>">
						<input type="text" id="chat_text_color" name="chat_text_color" size="7" value="<?=$character['chat_text_color']?>"><br>
						<p style="background-color: #000; color: #fff;"><span class="post_sample_1">Character</span>: <span class="post_sample_2">"I say something fun!"</span><br>
						: <span class="post_sample_1">Character does something fun!</span></p>
						<br>
						<input type="submit" name="edit" value="Update">
					</div>
					<div id="texts">
						<label>Status</label>
						<textarea id="status" name="status" rows="1" cols="80" title="Status was designed for temporary changes to your character or announcements of recent changes.  It is shown when you mouseover a character in the chat menu."><?=$character['status']?></textarea><br>
					
						<label>Bio</label>
						<textarea id="bio" name="bio" rows="5" cols="80" title="Bio is for backstory and more permanent changes to your character" placeholder="This is where you enter the biography"><?=$character['bio']?></textarea><br>
					
						<label>Player Notes</label>
						<textarea id="player_notes" name="player_notes" rows="5" cols="80" title="Player notes was designed for players to enter OOC details about their character." placeholder="Public Character Notes"><?=$character['player_notes']?></textarea><br>
					
						<label>Player Private Notes</label>
						<textarea id="player_private_notes" name="player_private_notes" rows="5" cols="80" title="Private player notes was designed for players to enter any details about their character that they don't want made public." placeholder="Private Character Notes"><?=$character['player_private_notes']?></textarea><br>
						<br>
						<input type="submit" name="edit" value="Update">
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
		color: "<?=$character['chat_name_color']?>",
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
		color: "<?=$character['chat_text_color']?>",
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
