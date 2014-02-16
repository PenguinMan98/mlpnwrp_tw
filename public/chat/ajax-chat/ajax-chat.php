<?php

/*
 * This chat was written by Pengy Programming for www.mlpnwrp.org
 * Use it if you like, but please give me credit.  This was a labor of love.
 *
 * This is the main setup file. It sets up all the HTML for the widgets on the site,
 * and a lot of the javascript
 * */

?>

<!-- ***** Rooms *********************************************************** -->
<script>
	var roomList = {};
	var roomImgList = {};
	var roomDescList = {};
	<?php foreach ($chatRoomList as $chatRoom): ?>
roomList[<?=$chatRoom['chat_room_id']?>] = '<?=$chatRoom['room_name']?>';
	<?php endforeach; ?>
	<?php foreach ($chatRoomList as $chatRoom): ?>
roomImgList[<?=$chatRoom['chat_room_id']?>] = <?=file_exists( "../img/room".$chatRoom['chat_room_id'].".png") ? 1 : 0 ?>;
	<?php endforeach; ?>
	<?php foreach ($chatRoomList as $chatRoom): ?>
	roomDescList[<?=$chatRoom['chat_room_id']?>] = "<?=str_replace('"','\"',$chatRoom['description'])?>";
	<?php endforeach; ?>
	var roomArr = [];
	<?php foreach ($chatRoomList as $chatRoom): ?>
		roomArr[<?=$chatRoom['chat_room_id']?>] = <?=json_encode($chatRoom)?>;
	<?php endforeach; ?>
</script>

<!-- ***** Character_Info (Player HUD) ********************************************************** -->

<div id="character_info_base">
	<!-- <div id="character_info_image"></div> -->
	<div id="character_info_inner">
		<p class="character_info" id="hud_character_name">Character Name</p>
		<p class="character_info" id="hud_player_name">Player Name</p>
		<p class="character_info" id="hud_activity_status">Last Post: </p>
		<!-- <div>
			<img id="mute" src="">Mute--<img id="highlight" src="">Highlight<!-- <img id="group_color" src=""> --><!--
		</div> -->
		<div id="hud_toggle_row">
			<div class="hud_setting_icon">
				<img id="mute" alt="Mute" title="Mute this pony" src="../img/mute_off.png" onClick="toggleMute(); return false;">
			</div>
			<div class="hud_setting_icon">
				<img id="stare" alt="Stare" title="Stare at this pony" src="../img/stare_off3.png" onClick="toggleStare(); return false;">
			</div>
		</div>
		<p class="character_info" id="hud_room">Location</p>
		<!-- <p class="character_info" id="hud_chat_status">Chat Status</p> -->
	</div>
</div>
