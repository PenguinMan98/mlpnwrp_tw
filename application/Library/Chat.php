<?php
class Chat{
	// Get the last X posts for room Y
	function getPosts( $count = 30 ){
		
	}
	
	// Get the last X private messages
	function getPriv( $count = 5 ){
		
	}
	
	// get the private messages within X minutes of now
	function getRecentPriv( $interval = 30 ){
		
	}	
	
	// Search by text
	// search by character
	// search by player
	function searchPosts( $text, Model_Structure_Character $character, Model_Structure_Phpbb_Users $player){
		
	}
	
	// parse a post from POST
	function parsePost(){
		
	}
	
	// serialize posts to be sent to the browser
	function serializePost( Model_Structure_ChatLog $post ){
		
	}
	
}