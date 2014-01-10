<?php
require_once '../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

$charName = $_GET['c'];
$characterProvider = new Model_Data_CharacterProvider();
$character = $characterProvider->getDetailsByCharacterName($charName);

if(empty($character)) {
	// redirect to the character search page
	die("I don't know anypony named $charName!  Sorry! Maybe one will fall from the sky tomorrow?");
}
$profilePic = getImage('profile_pic', $character['character_id']);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Profile: <?=$character['name']?></title>
    <link rel="stylesheet" href="<?=SITE_ROOT?>/css/characterStyle.css">
    <!-- <script src="js/script.js"></script> -->
  </head>
  <body>
    <div id="siteContainer">
      <div id="site">
        <div id="menuContainer">
        </div>
        <div id="contentContainer" style="width: 100%;">
        	<div id="char_name" style="font-size: 40px; font-weight: bold; width 100%; text-align: center; zindex: 1;"><?=$character['name']?></div>
        	<?php if($profilePic): ?>
        	<div id="char_img"><img src="../../img/<?=$character['character_id']?>/<?=$profilePic?>" /></div>
        	<?php endif; ?>
        	<p>Player: <a href="../../chat/player/characters.php?p=<?=$character['username']?>"><?=$character['username']?></a><br>
        	Race: <?=$character['race']?> <?php if($character['character_race_note']) echo "( ". $character['character_race_note'] ." )";?><br>
        	Gender: <?=$character['gender']?><br>
        	Age: <?=$character['age']?></p>
        	<p>Status: <?=$character['status']?></p>
        	<p>Biography: <?=$character['bio']?></p>
        	<p>Notes: <?=$character['player_notes']?></p>
        </div>
        <div id="footerContainer">
        </div>
      </div>
    </div>
  </body>
</html>
