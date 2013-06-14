<?php

/*
 * This chat was written by Pengy Programming for www.mlpnwrp.org
 * Use it if you like, but please give me credit.  This was a labor of love.
 * 
 * This is the main setup file. It sets up all the HTML for the widgets on the site,
 * and a lot of the javascript
 * */

?>

<!-- <script type="text/javascript" src="<?=$chat_path;?>js/popup-window.js"></script>
<script type="text/javascript" src="<?=$chat_path;?>js/image-button.js"></script>
<script type="text/javascript" src="<?=$chat_path;?>js/dropdown.js"    ></script>

<script type="text/javascript" src="<?=$chat_path;?>js/ajax-chat.js"   ></script> -->

<!--[if IE]><style type="text/css"> div.chat div.input input { margin-top: -1px; margin-bottom: -1px; } </style><![endif]-->

<!-- <div class="chat"> -->

<!-- ***** About *********************************************************** 

<div>
<div class="about"          id="about">
<div class="menu_form_head" id="about_drag">
<div class="menu_form_exit" id="about_exit">&nbsp;</div>Help
</div>
<div class="menu_form_body">

<div class="padding">
<div class="about_aux">
<h1>Tips </h1>
<ul>
	<li><p>If you are not a registered user, you can still login as a guest.</p></li>
	<li><p>To start private chat with a user, click his/her username.</p></li>
	<li><p>To return to the main chat from private chat, click the "Back to Main Chat" link.</p></li>
	<li><p>Auxiliary boxes can be dragged over the browser window.</p></li>
	<li><p>Use // for OOC stuff.</p></li>
	<li><p>Use /me for emotes.</p></li>
	<li><p>Rolling Dice is /roll XdX+X or XdX-X where X can be any integer number.</p></li>
	<li><p>The response from the dice roller will be written in brackets &lt;&lt; &gt;&gt; </p></li>
	<li><p>You are not allowed to use &lt; or &gt; to prevent cheating.  They will be changed to ( or )</p></li>
	<li><p>You may use [i]italic[/i] [b]bold[/b] and [u]underline[/u]</p></li>
</ul>
</p>
<h1>About</h1>
<p>
Copyright &copy; 2013 Pengy Programming.<br />
Script based on:
</p>
<p>
Copyright &copy; 2008 I.S. Lyubinskiy.<br />
Ajax chat <a href="http://www.php-development.ru/javascripts/ajax-chat.php">homepage</a>.
</p>
</div>
</div>

</div>
</div>
</div>-->


<!-- ***** Color *********************************************************** 

<div>
<div class="color"          id="color">
<div class="menu_form_head" id="color_drag">
<div class="menu_form_exit" id="color_exit">&nbsp;</div>Colors
</div>
<div class="menu_form_body">

<table class="color_aux">
<tr>
<td>
<script type="text/javascript">
img = new Image();
img.src = <?="'{$chat_path}colors.png'";?>;
</script>
<img src="<?=$chat_path;?>colors.png" alt="" usemap="#colors" />
<map id="colors" name="colors">
<?php
$x = 0;
$y = 0;
for ($r = 0; $r < 6; $r++) for ($g = 0; $g < 6; $g++) for ($b = 0; $b < 6; $b++)
{
  $col = str_pad(dechex($r*32+48), 2, STR_PAD_LEFT) .
         str_pad(dechex($g*32+48), 2, STR_PAD_LEFT) .
         str_pad(dechex($b*32+48), 2, STR_PAD_LEFT);
  ?><area href="javascript:chat_api_color('#<?=$col;?>');" coords="<?=$x*8+2;?>,<?=$y*8+2;?>,<?=$x*8+8;?>,<?=$y*8+8;?>" alt="" /><?php
  if ($x == 17) $y++;
  if ($x != 17) $x++; else $x = 0;
}
?>
</map>
</td>
</tr>
</table>

</div>
</div>
</div>-->

<!-- ***** Rooms *********************************************************** -->
<script>
	var roomList = {};
	<?php foreach ($chatRoomList as $chatRoom): ?>
	roomList[<?=$chatRoom->getChatRoomId()?>] = '<?=$chatRoom->getRoomName()?>';
	<?php endforeach; ?>
</script>

<!-- <script type="text/javascript">chat_api_onload(room, registered, handle)
if (document.getElementById("room_parent")) dropdown_attach("room_parent", "room_child", "hover", "y", "default");
</script> -->


<!-- ***** Smiley ********************************************************** 

<div>

<div class="smiley"         id="smiley">
<div class="menu_form_head" id="smiley_drag">
<div class="menu_form_exit" id="smiley_exit">&nbsp;</div>Smileys
</div>
<div class="menu_form_body">

<div class="padding">
<table>
<tr>
<td>
<?php

$dir = dirname(__FILE__) . '/smileys/';
if ($handle = opendir($dir))
{
  while (false !== ($filename = readdir($handle)))
  {
    $pathinfo = pathinfo("$dir$filename");
    if ($pathinfo['extension'] == 'gif')
    {
      ?>
      <script type="text/javascript">
      img = new Image();
      img.src = <?="'{$chat_path}smileys/{$pathinfo['basename']}'";?>;
      </script>
      <a href="javascript:chat_api_smiley('<?=basename($filename, '.gif');?>');"><img src="<?=$chat_path;?>smileys/<?=$pathinfo['basename'];?>" alt="" /></a>
      <?php
    }
  }
  closedir($handle);
}

?>
</td>
</tr>
</table>
</div>

</div>
</div>
</div>


</div>-->

<!-- ***** Character_Info ********************************************************** -->

<div id="character_info_base">
	<div id="character_info_inner">
		<p class="character_info" id="hud_character_name">Character Name</p>
		<p class="character_info" id="hud_player_name">Player Name</p>
		<p class="character_info" id="hud_activity_status">Last Post: </p>
		<!-- <div>
			<img id="mute" src="">Mute--<img id="highlight" src="">Highlight<!-- <img id="group_color" src=""> --><!--
		</div> -->
		<p class="character_info" id="hud_room">Location</p>
		<!-- <p class="character_info" id="hud_chat_status">Chat Status</p> -->
	</div>
</div>
