<?php

require_once '../../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

// this operation requires the user to be logged in
if(empty($_SESSION['u_info']) || empty($_POST)){
	header('Location: ' . SITE_ROOT . '/tiki-login_scr.php');
}

$allowedTags = '<br><p><img><h1><h2><h3><h4><div><span><u><i><strike><strong><b><a>';

// are we editing?
$editing = ($_REQUEST['edit']) ? true : false;

// get POSTed data
$character_name = str_replace(' ','_',str_replace('  ',' ',trim(filter_var($_REQUEST['character_name'], FILTER_SANITIZE_STRING))));
$birth_gender = filter_var($_REQUEST['birth_gender'], FILTER_SANITIZE_STRING);
$current_gender = filter_var($_REQUEST['current_gender'], FILTER_SANITIZE_STRING);
$gender = filter_var($_REQUEST['gender'], FILTER_SANITIZE_STRING);
if(!$editing) $current_gender = $birth_gender;
$race = filter_var($_REQUEST['race'], FILTER_SANITIZE_NUMBER_INT);
$age = filter_var($_REQUEST['age'], FILTER_SANITIZE_NUMBER_INT);
$chat_name_color = filter_var($_REQUEST['chat_name_color'], FILTER_SANITIZE_STRING);
$chat_text_color = filter_var($_REQUEST['chat_text_color'], FILTER_SANITIZE_STRING);
$status = strip_tags($_REQUEST['status'], $allowedTags);
$bio = strip_tags($_REQUEST['bio'], $allowedTags);
$player_notes = strip_tags($_REQUEST['player_notes'], $allowedTags);
$player_private_notes = strip_tags($_REQUEST['player_private_notes'], $allowedTags);
$profile_html = $_REQUEST['profile_html'];
$profile_css = $_REQUEST['profile_css'];
$html_override = (isset($_REQUEST['html_override']) && $_REQUEST['html_override']) ? 1 : 0;

// set some defaults
$chat_name_color = ( $chat_name_color != "" ) ? $chat_name_color : "#ffffff" ;
$chat_text_color = ( $chat_text_color != "" ) ? $chat_text_color : "#ffffff" ;

try{
	Dao::startTransaction();
	$characterProvider = new Model_Data_CharacterProvider();
	$character = $characterProvider->getOneByCharacterName($character_name);
	if(is_object($character) && !$editing){// fail if the character exists and we aren't editing
		throw new Exception("Character already exists!");
	}elseif(!is_object($character)){
		$character = new Model_Structure_Character();
	}
	
	if(!empty($_FILES)){
		$MAX_PROFILE_FILESIZE = 81920;
		$MAX_CMARK_HEIGHT = 15;
		$MAX_CMARK_WIDTH = 15;
		$MAX_PICON_HEIGHT = 25;
		$MAX_PICON_WIDTH = 50;
		$imageDir = PUBLIC_ROOT . "/img/" . $character->getCharacterId() . "/";
		/*echo "<pre>";
		print_r($_POST);
		print_r($_FILES);
		print_r($character);
		echo "</pre>";
		
		echo "image root ". $imageDir . "<br>";*/
		
		if(!is_dir($imageDir)){
			mkdir($imageDir);
		}
		
		// only accept jpg gif or png
		function validateType($type){
			switch($type){
				case "image/png":
					return ".png";
				case "image/gif":
					return ".gif";
				case "image/jpeg":
					return ".jpg";
				default: return false;
			}
		}
		if(!empty($_FILES['profile_image']['name'])){
			if($_FILES['profile_image']['size'] > $MAX_PROFILE_FILESIZE){
				throw new Exception("Error with Profile Image: Too big! ({$_FILES['profile_image']['size']}) > ($MAX_PROFILE_FILESIZE)");
			}
			$extension = validateType($_FILES['profile_image']['type']);
			if(!$extension){
				throw new Exception("Error with Profile Image: unsupported image format. Please use .jpg .gif or .png");
			}
			$tmp_name = $_FILES["profile_image"]["tmp_name"];
			$old_image = getImage('profile_pic', $character->getCharacterId()); 
			if($old_image) unlink($imageDir.$old_image);
			move_uploaded_file($tmp_name, $imageDir."profile_pic".$extension);
			$character->setImage('profile_pic'.$extension);
		}
		if(!empty($_FILES['cutie_mark']['name'])){
			$extension = validateType($_FILES['cutie_mark']['type']);
			if(!$extension){
				throw new Exception("Error with Cutie Mark: unsupported image format. Please use .jpg .gif or .png");
			}
			$tmp_name = $_FILES["cutie_mark"]["tmp_name"];
			$imgSizeData = getimagesize($tmp_name);
			if($imgSizeData && ($imgSizeData[0] > $MAX_CMARK_WIDTH || $imgSizeData[1] > $MAX_CMARK_HEIGHT)){
				throw new Exception("Error with Cutie Mark: Image is too large.  Must be {$MAX_CMARK_WIDTH}px wide X {$MAX_CMARK_HEIGHT}px tall or less.");
			}
			$old_image = getImage('cutie_mark', $character->getCharacterId());
			if($old_image) unlink($imageDir.$old_image);
			move_uploaded_file($tmp_name, $imageDir."cutie_mark".$extension);
			$character->setCutieMark('cutie_mark'.$extension);
		}
		if(!empty($_FILES['chat_icon']['name'])){
			$extension = validateType($_FILES['chat_icon']['type']);
			if(!$extension){
				throw new Exception("Error with Chat Icon: unsupported image format. Please use .jpg .gif or .png");
			}
			$tmp_name = $_FILES["chat_icon"]["tmp_name"];
			$imgSizeData = getimagesize($tmp_name);
			if($imgSizeData && ($imgSizeData[0] > $MAX_PICON_WIDTH || $imgSizeData[1] > $MAX_PICON_HEIGHT)){
				throw new Exception("Error with Chat Icon: Image is too large.  Must be {$MAX_PICON_WIDTH}px wide X {$MAX_PICON_HEIGHT}px tall or less.");
			}
			$old_image = getImage('chat_icon', $character->getCharacterId());
			if($old_image) unlink($imageDir.$old_image);
			move_uploaded_file($tmp_name, $imageDir."chat_icon".$extension);
			$character->setIcon('chat_icon'.$extension);
		}
		//die();
	}
		
	$character->setName($character_name);
	$character->setChatNameFormatted($character_name);
	$character->setBornFemale(($birth_gender == 'female'));
	$character->setCurrentlyFemale(($current_gender == 'female'));
	$character->setGender($gender);
	$character->setCharacterRaceId($race);
	$character->setCharacterAgeId($age);
	$character->setChatNameColor($chat_name_color);
	$character->setChatTextColor($chat_text_color);
	$character->setStatus($status);
	$character->setBio($bio);
	$character->setPlayerNotes($player_notes);
	$character->setPlayerPrivateNotes($player_private_notes);
	$character->setProfileHtml($profile_html);
	$character->setProfileCss($profile_css);
	$character->setHtmlOverride($html_override);
		
	// this is enough to create the character
	$arrErrors = array();
		
	if($editing){
		$userProvider = new Model_Data_UsersUsersProvider();
		if(!$userProvider->verifyUserAndCharacterId($userId, $character->getCharacterId())){
			die("This is not your character.");
		}
		
		$characterProvider->updateOne($character, $arrErrors);
	}else{
		// only add this if I'm creating
		$character->setCreatorUserId($userId); 
		
		$characterProvider->insertOne($character, $arrErrors);
	}

	if(!empty($arrErrors) && !$editing){
		throw new Exception("Error inserting character ".$character->getName().": " . implode('|', $arrErrors));
	}elseif(!empty($arrErrors)){
		throw new Exception("Error updating character ".$character->getName().": " . implode('|', $arrErrors));
	}
		
	if(!$editing){
		// create the relationship between the character and the user.
		$characterUserProvider = new Model_Data_CharacterUserProvider();
		$characterUser = new Model_Structure_CharacterUser();
		$characterUser->setCharacterId($character->getCharacterId());
		$characterUser->setUserId($userId);
		$characterUserProvider->insertOne($characterUser, $arrErrors);
		if(!empty($arrErrors)){
			throw new Exception("Error creating a relationship between character ".$character->getName()." and user ".$userName." : " . implode('|', $arrErrors));
		}
	}
	Dao::commit();
}catch(Exception $e){
	Dao::rollback();
	$_SESSION['system_messages'][] = $e->getMessage();
	$message = $e->getMessage();
	$errors[] = $message;
}
if($editing){
	header('Location: ' . SITE_ROOT . '/chat/character/edit.php?c=' . $character_name);
}else{
	if(!empty($_POST['saveandchat'])){
		header('Location: ' . SITE_ROOT . '/chat');
	}else{
		header('Location: ' . SITE_ROOT . '/chat/character/view.php?c=' . $character_name);
	}
}
?>