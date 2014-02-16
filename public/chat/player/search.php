<?php
require_once '../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

$searchWord = $_GET['search'] or '';
if($searchWord != ""){
	$characterProvider = new Model_Data_CharacterProvider();
	$characters = $characterProvider->searchByName($searchWord);
}else{
	$characters = array();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Profile: <?=$character['name']?></title>
    <link rel="stylesheet" href="<?=SITE_ROOT?>/css/characterStyle.css">
    <style>
.character{
	margin-top: 5px;
}
.cutie_mark{
	display: inline-block;
	width: 20px;
}
.charname{
	display: inline-block;
	width: 150px;
}
.last_login{
	display: inline-block;
	width: 250px;
}

    </style>
    <!-- <script src="js/script.js"></script> -->
  </head>
  <body>
    <div id="siteContainer">
      <div id="site">
        <div id="menuContainer">
        </div>
        <div id="contentContainer" style="width: 100%;">
        	<h1>Search Characters</h1>
        	<form method="GET">
        		<input type="text" name="search" value="<?=$searchWord?>" />
        		<input type="submit" value="Search" />
        	</form>
        	<hr>
        	<?php foreach($characters as $char):?>
        	<div class="character">
        		<?=($char->getCutieMark()) ? "<img class=\"cutie_mark\" src=\"../../img/".$char->getCharacterId()."/".$char->getCutieMark()."\">" : '<img class="cutie_mark" src="../../img/VinnyHavoc-CMCHeraldMicroicon.png">' ?>
        		<a class="charname" href="../character/view.php?c=<?=$char->getName();?>"><?=$char->getName()?></a>
        		<span class="last_login"><?=($char->getLoggedIn()) ? 'Logged In' : 'Last logged in: '.gmdate("Y-m-d H:i", $char->getLastStatusRequest()); ?></span>
        	</div>
        	<?php endforeach; ?>
        </div>
        <div id="footerContainer">
        </div>
      </div>
    </div>
  </body>
</html>
