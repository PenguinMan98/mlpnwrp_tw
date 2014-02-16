// Copyright (C) 2013 Pengy Programming

// ***** Var *******************************************************************

var chat_smsg = false;
var initializeUsers = false;
var initializePosts = false; // on first load of the chat, initializePosts is set to false

var chat_message_id = -1;
var chat_rand = -1;
var chat_timeout;

var chat_addr;
var chat_room;
var chat_user;
var chat_pass;

var chat_usrs;
var chat_msgs;
var chat_wait;
var chat_priv;

var chat_temp_msgs = new Array();
var chat_msgs_rcvd = {};
var chat_player_rooms = {};
var chat_private = {};

var chat_focu = true;
var chat_colr = '#484848';
if (getCookie('chat_colr'))
     chat_colr = getCookie('chat_colr');
else chat_colr = '#'+(Math.floor(6*Math.random())*32+48).toString(16)
                    +(Math.floor(6*Math.random())*32+48).toString(16)
                    +(Math.floor(6*Math.random())*32+48).toString(16);
setCookieLT('chat_colr', chat_colr, 365*24*3600);

// game notes
var updateGameNotes = true;
var gameNotesCompare = '';

/* chat state object
 *
 * This is sent to the server with each ajax request.
 * This gives the program all the variables it will need
 * to make decisions about changing the chat state
 */
var chatState = {
		lastUserListUpdate: -1, // timestamp of last userlist update
		lastMessageId: -1, // message id int
		handle: handle, // important for guests
		characterId: character_id, // an int id or 'G'
		userId: userId, // player id int
		roomId: room, // room id
		ip: ip, // ip address
		weatherStateId: 0, // weather state int
		lastWeatherUpdate: -1 // timestamp of last weather update
};

// weather defaults
var weatherState = {};
var currentTimeOfDay = 'day';
var currentSeason = 'summer';


// ***** chat_api_color ********************************************************

function chat_api_color(col)
{
  setCookie ('chat_colr', chat_colr = col);
  popup_hide('color');
}


// ***** chat_api_smiley *******************************************************

function chat_api_smiley(str)
{
  var input = document.getElementById('send');
  input.focus();

  if (input.selectionStart !== undefined &&
      input.selectionEnd   !== undefined &&
      input.textLength     !== undefined)
  {
    pos  = input.selectionStart;
    val1 = input.value.substr(0, input.selectionStart);
    val2 = input.value.substr(input.selectionEnd, input.textLength);

    input.value          = val1+'%%'+str+'%%'+val2;
    input.selectionStart = pos+str.length+4;
    input.selectionEnd   = pos+str.length+4;

    return;
  }

  if (document.selection             !== undefined &&
      document.selection.createRange !== undefined)
  {
    range = document.selection.createRange();
    range.text = '%%'+str+'%%';
    range.select();

    return;
  }

  input.value += '%%'+str+'%%';
}


// ***** chat_api_onload *******************************************************

function chat_api_onload(room, registered, handle)//, focu
{
	hideRooms(); // hide the rooms panel
	$('#character_info_base').hide(); // hide the character hud
	//$('#header_messages').html(roomList[room]); // change the room name

	if(roomImgList[room]){ // if the image exists
		$('#header_messages').html('<img src=\'../img/room'+room+'.png\'>'); // change the room name
	}else{
		$('#header_messages').html(roomList[room]); // change the room name
	}

	if(room == 13 || room == 12 || room == 11){
		$('#chat').addClass('game');
		$('#game_notes').show();
		updateGameNotes = true;
	}else{
		$('#chat').removeClass('game');
		$('#game_notes').hide();
	}

	document.getElementById('send').focus(); // decide if you are going to focus the cursor in the text field or not

	chat_reset(room, registered, handle); // reset the chat
}


// ***** chat_date *************************************************************

function chat_date_aux(num)
{
  if (num < 10) return '0'+num; else return num;
}

function chat_date(offset)
{
  mm = new Array('Jan', 'Feb', 'Mar',
                 'Apr', 'May', 'Jun',
                 'Jul', 'Aug', 'Sep',
                 'Oct', 'Nov', 'Dec');
  d1 = new Date();
  d2 = new Date();
  d2.setTime(d2.getTime()+offset*1000);
  if ((d2.getDate() == d1.getDate()) && (d2.getMonth() == d1.getMonth()))
       return                                                        chat_date_aux(d2.getHours())+':'+chat_date_aux(d2.getMinutes());
  else return chat_date_aux(d2.getDate())+' '+mm[d2.getMonth()]+', '+chat_date_aux(d2.getHours())+':'+chat_date_aux(d2.getMinutes());
}


// ***** chat_login ************************************************************

function chat_login(asuser)
{
  if ((document.getElementById( 'login').style.display != 'block') && /* if login is hidden AND */
      (document.getElementById('glogin').style.display != 'block') || asuser){ /* guestlogin is hidden OR asuser is true */
	  if(document.getElementById( 'ajaxChatLogin')){
		  popup_show('login', 'login_drag', 'login_exit', 'element', 50,  50, 'chat', true);
	  }else{
		  popup_show('glogin', 'glogin_drag', 'glogin_exit', 'element', 50,  50, 'chat', true);
	  }
  }
  if (chat_focu && document.getElementById( 'login').style.display == 'block') document.getElementById( 'user').focus();
  if (chat_focu && document.getElementById('glogin').style.display == 'block') document.getElementById('guser').focus();
}


// ***** chat_parse ************************************************************

function chat_parse(str)
{
  str  = str.trim();
  return str.split(/\r\n/); /*Splitting on this is not very reliable*/
}


// ***** chat_priv_prepair ************************************************************
// not sure what this does.  Probably should figure it out.

function chat_priv_prepair(user1, user2)
{
  if (chat_msgs[user1] == undefined) chat_msgs[user1] = new Array();
  if (chat_msgs[user2] == undefined) chat_msgs[user2] = new Array();
  if (chat_msgs[user1][user2] == undefined) chat_msgs[user1][user2] = '';
  if (chat_msgs[user2][user1] == undefined) chat_msgs[user2][user1] = '';
  if (chat_wait[user1] == undefined) chat_wait[user1] = new Array();
  if (chat_wait[user2] == undefined) chat_wait[user2] = new Array();
  if (chat_wait[user1][user2] == undefined) chat_wait[user1][user2] = false;
  if (chat_wait[user2][user1] == undefined) chat_wait[user2][user1] = false;
}


// ***** chat_priv_switch ************************************************************
// chat_reset calls this with a '.' and false

function chat_priv_switch(user, focus)
{
  if (chat_focu && focus)
	document.getElementById('send').focus();
  if (user == chat_user) return; // can't pm yourself
  chat_priv = user; // store the username we're going to message
  chat_priv_prepair(chat_user, user);
  if (user != '.'){ // we're switching to PM mode
	  if(typeof chat_private[user] == 'undefined') chat_private[user] = {};
	  chat_private[user]['active'] = true;
	  $('#exit_pm_text').html('Private with '+user);
	  showExitPM();
	  // mark that I've seen the latest.
	  chat_private[user]['last_seen'] = chat_private[user]['last_received'];
  }else{ // switching to regular mode
	  for( i = 0; i < chat_private.length; i++ ){
		  chat_private[i]['active'] = false;
	  }
	  /*for(var i in chat_private)
		  chat_private[i]['active'] = false;*/
	  hideExitPM();
  }
  chat_out_msgs();
}
function showExitPM(){
	// show the element
	$('#exit_pm').css('display','block');
	// animate moving right to 0
	$('#exit_pm').animate({
			opacity: '1',
			right: '220px'
		},1000,'swing',function(){
			var width = $('#exit_pm').width() + 15;
			var height = $('#exit_pm').height();
			$('#chat').prepend('<div style="float: right; height: '+height+'px; width: '+width+'px; padding: 4px 10px 16px; margin-bottom: 13px;">&nbsp;</div>');
		});
}
function hideExitPM(){
	// animate moving left to 0
	$('#exit_pm').animate({
			opacity: '0',
			right: '0px'
		},1000,'swing',function(){
			$('#exit_pm').css('display','none');
		});
}
function showRooms(){
	// show the element
	$('#rooms').css('display','block');
	// animate moving right to 0
	$('#rooms').animate({
			opacity: '1',
			right: '220px'
		},1000,'swing',function(){
		});
}
function hideRooms(){
	// animate moving left to 0
	$('#rooms').animate({
			opacity: '0',
			right: '0px'
		},1000,'swing',function(){
			$('#rooms').css('display','none');
		});
}

function togglePreferences(elem){
	if($('#preferences_container').css('display') == 'block'){
		hidePreferences(elem);
	}else{
		showPreferences(elem);
	}
}
function showPreferences(elem){
	var prefRect = elem.getBoundingClientRect();
	// show the element
	$('#preferences_container').css('display','block');
	$('#preferences_container').css('left', prefRect.left);
	$('#preferences_container').css('top', -250);
	// animate moving right to 0
	$('#preferences_container').animate({
			opacity: '1',
			top: '50px'
		},1000,'swing',function(){
		});
}
function hidePreferences(){
	// animate moving left to 0
	$('#preferences_container').animate({
			opacity: '0',
			top: '-250px'
		},1000,'swing',function(){
			$('#preferences_container').css('display','none');
		});
}

// ***** chat_reset ************************************************************
// may be called with only a room and null user/pass

function chat_reset(room, registered, handle)
{
  chat_message_id  = -1;
  initializeUsers = true;
  initializePosts = true; // if the chat gets reset, change initialize posts to true.

  chat_room = room; // set globals
  chat_user = handle;
  /*chat_pass = pass;*/

  chat_usrs = new Array(); // re-initialize these arrays
  chat_msgs = new Array();
  chat_wait = new Array();
  chat_priv = '.';
  //variables = {};

  chat_temp_msgs = new Array(); // clear the pending messages
  chat_msgs_rcvd = {}; // clear the received post history
  chat_player_rooms = {}; // for tracking who is where

  chat_msgs['.'] = ''; // set messages to .?
  chat_priv_switch('.', false); // makes sure we aren't in private mode

  clearTimeout(chat_timeout); // stop the looping ajax

  chat_setup(); // initial run to get things set up

  if(typeof chat_users_timeout != 'undefined') clearInterval(chat_users_timeout);
  chat_users_timeout = setInterval("chat_users_get()", 5000); // start the ajax
  if(typeof chat_messages_timeout != 'undefined') clearInterval(chat_messages_timeout);
  chat_messages_timeout = setInterval("chat_msgs_get()", 1000); // start the ajax

}

function chat_setup(){
	chat_users_get(); // get the users. AJAX. Output is done when the response is received.

	// moved to inside the response handler for the users_get.
	//chat_msgs_get(); // get the messages. AJAX. Output is done when the response is received.
}

//***** chat_users *********************************************************
// Calls a script that updates the user list and returns the current version

var users_get_id = 0;

function chat_users_get(){
	$.ajax({
		url: chat_path+"php/users_get.php",
		dataType: "JSON",
		data: {users_get_id: users_get_id++}
	})
	.done(function(response) {
		chat_usrs = response.characters;

		for(var i in chat_usrs){
			if(typeof chat_private[chat_usrs[i]['name']] == 'undefined'){ // initialize chat_private for this handle
				chat_private[chat_usrs[i]['name']] = {};
				chat_private[chat_usrs[i]['name']]['last_seen'] = 0;
				chat_private[chat_usrs[i]['name']]['last_received'] = 0;
			}
		}

		chat_out_usrs(); // output the users

			// if this is an initialization run, then do a msgs_get here after the users have been received.
		if(initializeUsers){
			chat_msgs_get(); // get the messages. AJAX. Output is done when the response is received.
			initializeUsers = false;
		}
	});
}

function handleSort(a, b){
	return a.name.toUpperCase() > b.name.toUpperCase();
}

// ***** chat_msgs_add *********************************************************

function chat_msgs_add()
{
    // check for blank
	var post_text = $('#send').val();
    if (!post_text || post_text == "") return;

	// process the operations that do not send normal posts.
    	// variables
    if(post_text.indexOf('/var') > -1){
    	var varSplit = post_text.split(' ');
    	if(varSplit.length < 3){
    		console.log('not enough arguments');
    		// error: not enough arguments.
    		return false;
    	}
    	var varName = varSplit[1];
    	var varValue = varSplit.slice(2).join(' ');
    	console.log( 'saving', varName, varValue);
    	saveVariable( varName, varValue );
    	$('#send').val('');
    	variables[varName] = varValue;
    	console.log('variables: ', variables);

    	chat_out_system_msg( varName+' set to '+varValue );

    	return true;
    }

    // process any text replacements
    var tokensToReplace = post_text.match(/%([^%]*)%/ig);
    if(tokensToReplace && tokensToReplace.length > 0){
    	for(var i = 0; i < tokensToReplace.length; i++){
    		var token = tokensToReplace[i].replace(/%/g,'');
    		if(typeof variables[token] !== 'undefined'){
    			post_text = post_text.replace('%'+token+'%', variables[token]);
    		}
    	}
    }

    // build the post
    var timestamp = Math.round(new Date().getTime() / 100);// I switched the chat rand to a timestamp.  This should fix any guid problems and false duplicate posts.
    var newPost = {
	    rand: timestamp,
	    addr: chat_addr,
	    user: chat_user,
	    pass: chat_pass,
	    priv: chat_priv,
	    chat_name_color: chat_name_color,
	    chat_text_color: chat_text_color,
	    data: post_text,
	    room: chat_room,
	    guest: guest_char,
	    chat_log_type_id: (chat_priv == '.')? 1 : 2,
	    tries: 1
    };
    chat_temp_msgs.push(newPost);

    // call it!
	add_post_ajax(newPost);

	// clean up
	document.getElementById('send').value = '';
	if (chat_focu) document.getElementById('send').focus();
}

function resend_dead_posts(){
	for(var i = 0; i < chat_temp_msgs.length; i++){
		if(chat_temp_msgs[i].tries <= 5){ // try 5 times
			add_post_ajax(chat_temp_msgs[i]); // try to add it.
			chat_temp_msgs[i].tries++; // increment tries
		}else{
			if (confirmPostRand(chat_temp_msgs[i].rand)) // If this succeeds, it removes an element from chat_temp_messages
				i--; // so we must decrement i to keep the pointer from skipping one when it increments
		}
	}
}

function add_post_ajax(newPost)
{
	$.ajax({
		url: chat_path+"php/msg_add.php",
		data: newPost,
		dataType: "JSON"
	})
	.done(function(response) {
		if(response.success){

			if(typeof response.messages != 'undefined' && typeof response.messages.length != 'undefined' && response.messages.length > 0){
				for(var i = 0; i< response.messages.length; i++){
					if(response.messages[i].trim() != ""){
						chat_out_system_msg( response.messages[i] );
					}
				}
			}
			confirmPostRand(newPost.rand);
		}else{
			if(typeof response.text != 'undefined' && response.text.trim() != ""){
				chat_out_system_msg( response.text );
			}

	        //chat_out_msgs();

			if(typeof response.text != 'undefined' && response.text.trim() == "Character Not Logged In"){
				clearInterval(chat_users_timeout);
				clearInterval(chat_messages_timeout);
				window.location = SITE_ROOT + "/login.php";
			}
		}
	});
}

// ***** chat_msgs_get **********************************************************

function chat_msgs_get()
{
  chat_rand = Math.round(new Date().getTime() / 1000);
  if(chat_rand % 5 == 0) { resend_dead_posts(); }; // every three seconds or so, retry the dead posts.
  var playDing = false;

  var rand = chat_rand;
  var room = chat_room;
  var user = chat_user;
  var pass = chat_pass;
  var mptr = chat_message_id;
	$.ajax({
		url: chat_path+"php/msg_get.php",
		data: {rand: rand,
			room: room,
			user: user,
			pass: pass,
			mptr: mptr,
			chatState: chatState},
		dataType: "JSON"
	})
	.done(function(response) {
		if(response.success){

	      if (response.operation == '-' && chat_user && chat_pass) { // If I got a remove event and the username and password are set
	    	  chat_api_onload(chat_room, true); // refresh the chat?
	    	  return;
	      }
	      var initializationRun = (chat_message_id == -1);  // I'm sure I'll need this eventually

	      // ----------GAME NOTES--------------
	      if(response.room && response.room.game_notes){
	    	  game_notes = $('#game_note_field').val();
	    	  if(updateGameNotes || (game_notes == gameNotesCompare && game_notes != response.room.game_notes)){ // if I'm joining the room or somebody else changed it.
	    		  $('#game_note_field').val(response.room.game_notes); // update the field.
	    		  gameNotesCompare = response.room.game_notes;
	    	  }
	    	  if(game_notes != gameNotesCompare){
	    		  gameNotesCompare = game_notes;
	    	  }
	    	  updateGameNotes = false;
	      }
	      //-----------WEATHER---------------
	      if(typeof(response.newWeatherState) != "undefined" && typeof(response.newWeatherState.weather_state_id) != "undefined"){
	    	  chatState.lastWeatherUpdate = Math.round(new Date().getTime() / 1000);
	    	  chatState.weatherStateId = response.newWeatherState.weather_state_id;
	    	  weatherState = response.newWeatherState;
	      }
	      updateWeather( response.serverTime );
	      //--------------POSTS-------------------
	      for (var i = 0; i < response.lines.length; i++) // now, go through the lines
	      {
	    	  line = response.lines[i];

	    	  if(typeof(chat_msgs_rcvd[line.chat_log_id]) != "undefined"){ continue; }; // if I've already seen this post, skip.
	    	  chat_msgs_rcvd[line.chat_log_id] = true; // set this to true, then process the post.  Perhaps I should move this to after I've completely processed the post.
	    	  chat_message_id =  Math.max(chat_message_id, line.chat_log_id); // set the chat_message_id
	    	  chatState.lastMessageId = Math.max(chat_message_id, line.chat_log_id); // set the chat_message_id in the state object too

	          confirmPostRand(line.chat_rand); // flag that this post was received.  Might be superfluous now.

	          var message = "";
	          if($('#msg_'+line.chat_log_id).length == 0){ // if the element does not exist in the form already
		          chat_usrs[line.handle] = new Array(chat_room, line.gender, line.status, true);// this appears to refresh some information about the user.
		          message = line.text; // get the text

		          // initialize a few things
		          var stare = false;
		          if(stare_array.indexOf(line.handle) > -1){
					// stare is on
					stare = true;
					playDing = true;
				  }
		          if(mute_array.indexOf(line.handle) > -1){// if this user is muted
		        	  continue;// skip processing the post.
				  }

		          // check for operators.  Currently, only /me goes here.
		          var operatorParsed = message.match(/^\/(\w+)(.*)/); // pull out the operator
		          var operator = "";
		          if(operatorParsed){ // if an operator was found
			          operator = operatorParsed[1];
			          if(operator == 'me'){ // if it's /me
			        	  message = "<span style=\"color: "+line.chat_name_color+";\">"+operatorParsed[2]+"</span>";
			          }else if(operator == 'announce'){ // if it's /announce
			        	  message = operatorParsed[2];
			          }else{ // anything else, ignore it
			        	  message = ":  <span style=\"color: "+line.chat_text_color+";\">"+message+"</span>";
			          }
		          }else{
		        	  message = ":  <span style=\"color: "+line.chat_text_color+";\">"+message+"</span>";
		          }

		          // parse pseudo-html
		          message = replaceAndBalanceTag(message, /\[i\]/gi, '<i>', /\[\/i\]/gi,'</i>' );
		          message = replaceAndBalanceTag(message, /\[b\]/gi, '<b>', /\[\/b\]/gi,'</b>' );
		          message = replaceAndBalanceTag(message, /\[u\]/gi, '<u>', /\[\/u\]/gi,'</u>' );
		          message = replaceAndBalanceTag(message, /\[s\]/gi, '<s>', /\[\/s\]/gi,'</s>' );
		          message = replaceAndBalanceTag(message, /\[sup\]/gi, '<sup>', /\[\/sup\]/gi,'</sup>' );
		          message = replaceAndBalanceTag(message, /\[sub\]/gi, '<sub>', /\[\/sub\]/gi,'</sub>' );
		          message = replaceAndBalanceTag(message, /&lt;i&gt;/gi, '<i>', /&lt;\/i&gt;/gi,'</i>' );
		          message = replaceAndBalanceTag(message, /&lt;b&gt;/gi, '<b>', /&lt;\/b&gt;/gi,'</b>' );
		          message = replaceAndBalanceTag(message, /&lt;u&gt;/gi, '<u>', /&lt;\/u&gt;/gi,'</u>' );
		          message = replaceAndBalanceTag(message, /&lt;s&gt;/gi, '<s>', /&lt;\/s&gt;/gi,'</s>' );
		          message = replaceAndBalanceTag(message, /&lt;sup&gt;/gi, '<sup>', /&lt;\/sup&gt;/gi,'</sup>' );
		          message = replaceAndBalanceTag(message, /&lt;sub&gt;/gi, '<sub>', /&lt;\/sub&gt;/gi,'</sub>' );

		          // convert url's into hyperlinks
		          message = replaceURLWithHTMLLinks(message);

		          if (line.chat_log_type_id == 1){ // if this message is public
		        	  var nameLine = '<div ';
					  if(stare){nameLine += 'class="line stare" '} else { nameLine += 'class="line" ' };
					  //nameLine += 'id="line_'+line.chat_log_id+'" style="color: #ddd;"><span class="post_date" title="23-Hr: '+line.twentyThreeHour+' Adj-Hr: '+line.adjustedHour+'">'+line.formattedDate+'</span> <b>'+chat_msgs_usr(line.handle, line.chat_name_color)+'</b>'+ message +'</div>';
					  nameLine += 'id="line_'+line.chat_log_id+'" style="color: #ddd;"><span class="post_date" title="23-Hr: '+line.twentyThreeHour+' MDT: '+line.formattedDate+'">'+line.adjustedHour+'</span> <b>'+chat_msgs_usr(line.handle, line.chat_name_color)+'</b>'+ message +'</div>';
//------------Add the post to the chat_msgs array
					  chat_msgs['.'] += nameLine;
					  if(!initializePosts && chat_priv == '.'){
//------------Send it to chat_out_msg
						  chat_out_msg(nameLine);
					  }
		          }
		          else if(line.chat_log_type_id == 2) // it's a private message
		          {
					chat_priv_prepair(line.handle, line.recipient_username); // not entirely sure what this does
					//var nameLine = '<div id="line_'+line.chat_log_id+'" style="color: #ddd;"><span class="post_date" title="23-Hr: '+line.twentyThreeHour+' Adj-Hr: '+line.adjustedHour+'">'+line.formattedDate+'</span> <b>'+chat_msgs_usr(line.handle, line.chat_name_color)+'</b>'+ message +'</div>';
					var nameLine = '<div class="line" id="line_'+line.chat_log_id+'" style="color: #ddd;"><span class="post_date" title="23-Hr: '+line.twentyThreeHour+' MDT: '+line.formattedDate+'">'+line.adjustedHour+'</span> <b>'+chat_msgs_usr(line.handle, line.chat_name_color)+'</b>'+ message +'</div>';

					// if it's from somebody to me, (new system)
					if(line.recipient_username == chat_user){
						  if(typeof chat_private[line.handle] == 'undefined')	chat_private[line.handle] = {}; // if I don't have any current PM's, create the object to hold them.
						  chat_private[line.handle]['last_received'] = line.chat_log_id;  // store that I got a priv from this guy.
						  if(chat_priv == line.handle){ // if I'm currently chatting with this guy
							chat_private[line.handle]['last_seen'] = chat_private[line.handle]['last_received']; // then mark that I've seen the new message.
						  }
					}

					// Add the PM to the logs for both parties.
					chat_msgs[line.handle][line.recipient_username] += nameLine;
					chat_msgs[line.recipient_username][line.handle] += nameLine;
					// chat wait is what tells people they have a PM and who from.
					chat_wait[line.handle][line.recipient_username]  = false; // sender to recipient is false.
					chat_wait[line.recipient_username][line.handle]  = true; // recipient to sender is true.

					// if this is a normal run and I'm in a private convo with this character,
					if(!initializePosts && (chat_priv == line.handle || chat_priv == line.recipient_username) ){
						chat_out_msg(nameLine);
					}else if(!initializePosts){// if this is a normal run and I'm not in pm with this character,
						playDing = true;
					}
					show_pm();
		          }else if(line.chat_log_type_id == 3){
						// system message
			        var nameLine = '<div ';
					nameLine += 'id="line_'+line.chat_log_id+'" style="color: #ddd;"><span class="post_date" title="23-Hr: '+line.twentyThreeHour+' MDT: '+line.formattedDate+'">'+line.adjustedHour+'</span> <b>System: </b>'+ message +'</div>';
					chat_msgs['.'] += nameLine;

					console.log('add a system post');
					if(!initializePosts){
					  chat_out_msg(nameLine);
					}
				  }
	          }

		      if(pingOnNew){ // ding on all updates for this room
		    	  playDing = true;
		      }
		      if(chat_room == line.roomname){ // ding if my name is mentioned
		    	  var trimmedUsername = chat_user.replace('GT-','');
		    	  if(message.indexOf(trimmedUsername) >= 0){
		    		  playDing = true;
		    	  }
		      }
		      /*if(line.recipient_username == chat_user && !chat_private[line.handle]['active'] && !initializationRun){ // ding if I get a Priv and I'm not chatting with him
		    	  playDing = true;
		      }*/
	      }// end of line loop

	      if(playDing){
	          var ding = $('#audio_ding');
	          ding = ding.get(0).play();
	      }

	      if (response.lines.length > 0)
	      {
	    	  if(initializePosts){
	    		  chat_out_msgs();
	    		  var icTimeStamp = null; //Date.getTime();
	    		  //console.log('This is where I want to output the chat room motd.', roomArr[chat_room].description, 'The current IC time is: ', icTimeStamp);
	    		  if( roomArr[chat_room].description ){
	    			chat_msgs['.'] += roomArr[chat_room].description;
	    		  	chat_out_msg( roomArr[chat_room].description );
			  	  }
	    		  initializePosts = false;
	    	  }

	          show_pm();
	      }
		}else{ // response.success is false
			if(response.error.trim() != ""){
				chat_out_system_msg( response.error );
			}
	        //chat_out_msgs();

			if(typeof response.error != 'undefined' && response.error.trim() == "Character Not Logged In"){
				clearInterval(chat_users_timeout);
				clearInterval(chat_messages_timeout);
				window.location = SITE_ROOT + "/login.php";
			}else if(typeof response.error != 'undefined' && response.error.trim() == "Error: Insufficient Privilege."){ // user was kicked or banned
				clearInterval(chat_users_timeout);
				clearInterval(chat_messages_timeout);
				if(character_id != 'G'){
					window.location = SITE_ROOT + "/chat/ajax-chat/php/logout.php?handle="+encodeURIComponent(chat_user)+'&character_id='+character_id;
				}else{
					window.location = SITE_ROOT + "/chat/ajax-chat/php/logout.php?handle="+encodeURIComponent(chat_user);
				}

			}

		}

	});
}

function room_change(room, registered, handle){
	if(!room){
		return false;
	}
	$.ajax({
		url: chat_path+"php/room_change.php",
		dataType: "JSON",
		data: {
			handle: handle,
			room: room
		}
	})
	.done(function(response) {
		if(response.success){
			chat_api_onload(room, registered, handle);
		}else{
			/*alert('Invalid Room Change');*/
		}
	});

}

// ***** chat_msgs_usr **********************************************************
/*
 * Takes a user, color, and away status and formats an html dealie for them.
 * */
function chat_msgs_usr(handle, color, sidebar)
{
  sidebar = (typeof sidebar == 'undefined') ? false : sidebar ; // first, are we on the sidebar?,

  var thisChar = null;
  for (var i in chat_usrs){// for each char
    if ( chat_usrs[i].name == handle){ // find a match with the character I'm working with
      thisChar = chat_usrs[i]; // put it here for now
      break;
    }
  }
  // then build a return string
  var retString = "";

  	// logged in with no cutie mark, use Twi's
  if(sidebar){ retString += '<span style="height: 100%; width: 15px;">'; }
  if(sidebar && thisChar && !thisChar.cutie_mark && thisChar.registered){
	  retString += '<img style="cursor: pointer;" src="'+SITE_ROOT+'/img/VinnyHavoc-CMCHeraldMicroicon.png" onClick="showHUD(this, \''+handle+'\'); return false;" />&nbsp;';
  }	// guest
  else if(sidebar && thisChar && !thisChar.cutie_mark){
	  retString += 'G&nbsp;';
  }	// you have a cutie mark!
  else if(sidebar && thisChar){
	  retString += '<img style="cursor: pointer;" src="'+SITE_ROOT+'/img/'+thisChar.character_id+'/'+thisChar.cutie_mark+'" onClick="showHUD(this, \''+handle+'\'); return false;" />&nbsp;';
  }
  if(sidebar){ retString += '</span>'; }
    // not a sidebar, an icon is present, and it's me, add a chat icon
  if(!sidebar && thisChar && thisChar.chat_icon){
	  retString += '<img src="'+SITE_ROOT+'/img/'+thisChar.character_id+'/'+thisChar.chat_icon+'" />&nbsp;';
  }
  // if there is a status, then add the icon
  /*if(typeof chat_usrs[user] != 'undefined' && typeof chat_usrs[user][2] != 'undefined' && chat_usrs[user][2] != 'none'){
	  retString += '<img src="'+chat_path+'style/status/'+chat_usrs[user][2]+'.png" alt="" style="margin-right: 0px;" />';
  }
  // if there is a gender, then add the icon
  if(typeof chat_usrs[user] != 'undefined' && typeof chat_usrs[user][1] != 'undefined' && chat_usrs[user][1] != 'none'){
	  retString += '<img src="'+chat_path+'style/gender/'+chat_usrs[user][1]+'.png" alt="" style="margin-right: 2px;" />';
  }*/
  // always add the name and the javascript that fires the switch to private messaging
  retString += '<a style="color: '+color+'" href="#" onClick="chat_priv_switch(\''+handle+'\', true); return false;">' + handle + '</a>';

  // if the user is away, add this
  /*if(sidebar && typeof chat_usrs[user] != 'undefined' && typeof chat_usrs[user][3] != 'undefined' && !chat_usrs[user][3]){
	  retString += '&nbsp;(away)';
  }*/
  // ship it out
  return retString;
}

// ***** chat_out_msgs **********************************************************

function chat_out_msgs()
{
	// dumps the backlog into the chat div
    document.getElementById('chat').innerHTML = (chat_priv == '.') ? chat_msgs[chat_priv] : chat_msgs[chat_user][chat_priv];

    if($('#autofocus').attr('checked')){ //Disable autofocus!
	    $("#chat").scrollTop( $('#chat')[0].scrollHeight );//+ $(window).height()
    }
}

function chat_out_msg( messageDiv ) // ONLY outputs to the chat. Does not alter the internal storage.
{
  // the switch between displaying the PM's and the public
	$('#chat').append(messageDiv);
	if(autofocus){ /*Disable autofocus!*/
		$("#chat").animate({ scrollTop: $('#chat')[0].scrollHeight }, "slow");
		//$("#chat").scrollTop( $('#chat')[0].scrollHeight );
    }
}

function chat_out_system_msg( messageText )
{
	var systemMessage = '<b>System:</b> '+messageText+'<br />';
    chat_msgs['.'] += systemMessage;
    chat_out_msg(systemMessage);
}

// ***** chat_out_usrs **********************************************************
/*
 * This seems to be the function that outputs users to the main page.
 * It draws its data from the chat_usrs variable.
 * */
function chat_out_usrs()
{
  var users = '';
  //chat_usrs.sort(); // I've already sorted
  var thisRoom = $('#users_this_room');
  var otherRoom = $('#users_other');

  show_pm();

  users = ''; // reset users.
  for (var i in chat_usrs){// for each char
    if ( chat_usrs[i].chat_room_id == chat_room) // if they're in my room
      users += chat_msgs_usr(chat_usrs[i].name, chat_usrs[i].chat_name_color, true)+' <br />'; // format them
  }
  //if (chat_user) // if I'm here
      //users = chat_msgs_usr(chat_user, 'black', true)+' <br />'+users; // put me on top
  thisRoom.html(users); // connect to this room's div and dump the users in
  //document.getElementById('users_this').style.display = users ? 'block' : 'none'; // show it if people are here. (WTF?)

  users = ''; // reset users
  for (var i in chat_usrs)
    if (
    		chat_usrs[i].name != chat_user && // if it's not me
    		chat_usrs[i].chat_room_id != chat_room) // and NOT in my room
      users += chat_msgs_usr(chat_usrs[i].name, '#ddd', true)+' <br />'; // format them up
  otherRoom.html(users); // dump them into other.
  otherRoom.css('display', (users ? 'block' : 'none'));  // show it if it needs to be shown.
  // no return value.
};

function show_pm(){
	var pmNotice = $('#users_private');
	var users = '';

	for(var i in chat_private){
		if(typeof chat_private[i]['last_seen'] != 'undefined' && chat_private[i]['last_seen'] < chat_private[i]['last_received']){ // if there is a new priv
			users += chat_msgs_usr(i, '#ddd', true)+'<br />'; // get the formated html and then we append it to users
		}
	}
	pmNotice.html(users); // dump them into other.
	pmNotice.css('display', (users ? 'block' : 'none'));  // show it if it needs to be shown.
}

//***** replaceURLWithHTMLLinks **********************************************************

function replaceURLWithHTMLLinks(text) {
	  var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/i;
	  return text.replace(exp,"<a href='$1' target='_blank'>$1</a>");
};

//***** Tag Replacing/balancing **********************************************************

function replaceAndBalanceTag( message, openRegex, openTag, closeRegex, closeTag){

	openTagCount = (message.match(openRegex)) ? message.match(openRegex).length : 0;
	message = message.replace(openRegex, openTag);
	closeTagCount = (message.match(closeRegex)) ? message.match(closeRegex).length : 0;
	message = message.replace(closeRegex, closeTag);
	for(var i=0; i < openTagCount - closeTagCount; i++){
		  message += closeTag;
	}
	return message;
};

//***** character HUD **********************************************************

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
		if(response.success && $('#character_info_base').css('display') == 'none'){
			// make it visible
			$('#character_info_base').css('display','block');
			$('#character_info_base').css('left', linkRect.left-250 );

			// set the character name.  Link to character profile
			$('#hud_character_name').html('<a href="'+SITE_ROOT+'/chat/character/view.php?c='+response.characterInfo.name+'" target="_blank">' + response.characterInfo.name + '</a>');

			// set the player name. Link to player profile
			$('#hud_player_name').html(response.characterInfo.username);

				// This must be fixed for the away/Active feature to work properly
			var ts = new Date().getTime()
			ts = Math.floor(ts/1000);
			var fifteenMinutes = 60*15;
			var fiveMinutes = 60*5;

			if(	ts - response.characterInfo.last_status_request > fiveMinutes ){
				$('#hud_activity_status').html('Disconnected');
			}else if(	ts - response.characterInfo.last_activity > fifteenMinutes ){
				$('#hud_activity_status').html('Away');
			}else{
				$('#hud_activity_status').html('Active');
			};

			// set the room.  Link to change rooms.
			$('#hud_room').html(roomList[response.characterInfo.chat_room_id]);
			$('#hud_room').off('click');
			$('#hud_room').on('click',function(){room_change(response.characterInfo.chat_room_id, !guest_char, chat_user);});
			$('#hud_room').css('cursor','pointer');

			// set the status (not implemented yet)
			$('#hud_chat_status').html('A status');

			// set the stare state
			if(stare_array.indexOf(response.characterInfo.name) != -1){
				// stare is on
				$("#stare").attr("src","../img/stare_on.png");
				$("#stare").attr("title","Stop staring at this pony");
			}else{
				// stare is off
				$("#stare").attr("src","../img/stare_off3.png");
				$("#stare").attr("title","Stare at this pony");
			}

			// set the mute state
			if(mute_array.indexOf(response.characterInfo.name) != -1){
				// stare is on
				$("#mute").attr("src","../img/mute_on.png");
				$("#mute").attr("title","Un-mute this pony");
			}else{
				// stare is off
				$("#mute").attr("src","../img/mute_off.png");
				$("#mute").attr("title","Mute this pony");
			}

							// final display properties
			var modalRect = $('#character_info_base').get(0).getBoundingClientRect();
			var modalVCenterOffset = (modalRect.bottom - modalRect.top) / 2;
			$('#character_info_base').css('top', linkRect.top + linkVCenterOffset - modalVCenterOffset );
		}else{
			// hide it
			$('#character_info_base').css('display','none');
		}
	});
}

function toggleStare(){
	var stareAtMe = $("#hud_character_name").text();
	if(stare_array.indexOf(stareAtMe) != -1){
		// remove it
		var temp = stare_array;
		stare_array = [];
		for(i in temp){
			if(temp[i] != stareAtMe){
				stare_array.push(temp[i]);
			}
		}
		// change the image to off
		$("#stare").attr("src","../img/stare_off3.png");
		$("#stare").attr("title","Stare at this pony");
	}else{
		stare_array.push(stareAtMe);
		// change the image to off
		$("#stare").attr("src","../img/stare_on.png");
		$("#stare").attr("title","Stop staring at this pony");
	}
	// save state
	saveHUDSettings();
}

function toggleMute(){
	var muteMe = $("#hud_character_name").text();
	if(mute_array.indexOf(muteMe) != -1){
		// remove it
		var temp = mute_array;
		mute_array = [];
		for(i in temp){
			if(temp[i] != muteMe){
				mute_array.push(temp[i]);
			}
		}
		// change the image to off
		$("#mute").attr("src","../img/mute_off.png");
		$("#mute").attr("title","Mute this pony");
	}else{
		mute_array.push(muteMe);
		// change the image to off
		$("#mute").attr("src","../img/mute_on.png");
		$("#mute").attr("title","Un-mute this pony");
	}
	// save state
	saveHUDSettings();
}

function saveHUDSettings(){
	$.ajax({
		url: chat_path+"php/save_hud_settings.php",
		data: {
			handle: handle,
			mute: mute_array,
			stare: stare_array,
			group_color: false
		}
	});
}

//***** ajax **********************************************************

function saveGameNotesSettings(room, gameNotes){
	$.ajax({
		url: chat_path+"php/save_room_settings.php",
		method: 'POST',
		data: {
			room: room,
			gameNotes: gameNotes
		}
	}).done(function(response){
		if(response.success){
			gameNotesCompare = gameNotes;
		}
	});
}

function saveVariable(varName, varValue){
	$.ajax({
		url: chat_path+"php/save_variables.php",
		method: 'POST',
		data: {
			character_id: character_id,
			var_name: varName,
			var_value: varValue
		}
	}).done(function(response){
		if(response.success){
			gameNotesCompare = gameNotes;
		}
	});
}

//***** WEATHER *************************
function updateWeather( serverTime ){
	// I need the IC date/time
	var d = new Date( serverTime * 1000 );

	var timeOfDay = 'day';
	var icon = weatherState.icon;
	if(d.getHours() < 7 || d.getHours() >= 19 ){ // nighttime
		timeOfDay = 'night';
		icon = weatherState.night_icon;
	}

	var season = 'summer';
	if( ( d.getMonth() == 11 && d.getDate() >= 21 ) || d.getMonth() == 0 || d.getMonth() == 1 || ( d.getMonth() == 2 && d.getDate < 21 ) ){ // winter
		season = 'winter';
	}else if( ( d.getMonth() == 2 && d.getDate() >= 21 ) || d.getMonth() == 3 || d.getMonth() == 4 || ( d.getMonth() == 5 && d.getDate < 21 ) ){ // spring
		season = 'spring';
	}else if( ( d.getMonth() == 8 && d.getDate() >= 21 ) || d.getMonth() == 9 || d.getMonth() == 10 || ( d.getMonth() == 11 && d.getDate < 21 ) ){ // fall
		season = 'fall';
	}
	var weatherDescName = season + '_' + timeOfDay + '_description';
	var weatherDescription = weatherState[weatherDescName];

	if( season != currentSeason || timeOfDay != currentTimeOfDay ){ // if I need to change
		if( icon ){
			$("#weather_img").attr('src', '../img/' + icon);
		}
		$("#weather").attr('title',weatherDescription);
		currentTimeOfDay = timeOfDay;
		currentSeason = season;
	}
}

//***** etc **********************************************************

function confirmPostRand( rand ){
  var temp_temp_msgs = new Array(); // temporary array.
  var confirmed = false; // stores if I found the rand in the list of pending posts
  var length = chat_temp_msgs.length;
  for(var i = 0; i< length; i++){ // go through the pending posts
	  if(chat_temp_msgs[i].rand != rand){ // if it's not the one I'm looking for
		  temp_temp_msgs.push(chat_temp_msgs[i]); // move it into the temp
	  }else{ // if it is
		  confirmed=true; // don't move it and set confirmed to true
	  }
  }
  if(confirmed){
  	chat_temp_msgs = temp_temp_msgs; // update chat_temp_msgs with the removed row
  }
  return confirmed;
};

function printTmpRands(){
	var string = "chat_temp_messages has ids: (";
	for(var i = 0; i< chat_temp_msgs.length; i++){
		string += chat_temp_msgs[i].rand + ", ";
	}
	console.log(string + ");");
}