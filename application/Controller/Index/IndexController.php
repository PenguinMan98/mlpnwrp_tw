<?php

class Index_IndexController extends Index_BaseController{
	public function __construct(){
		parent::__construct();
	}
	
	public function IndexAction(){
		//echo "This is the default page!<br><a href=\"./forum\">Our Forum</a>";
		//$this->vars->someVariable = true;
		
		// get the blog data
		$blogPostProvider = new Model_Data_BlogPostProvider();
		$blogPosts = $blogPostProvider->getCurrent(5);
		$this->vars->blogPosts = $blogPosts;
	}
	
	public function TestAction(){
		echo "Test Action called correctly!<br>";
		$this->vars->someVariable = false;
		$this->view = false; // do not render a view
		
		echo "<br>Letsa go!<br><pre>";
		
		echo "</pre><br>End!<br>";
	}
	
	public function ChatLogAction(){
		$this->view = "Chat/logSearchFormView.phtml";
		
		$startDate = $characterId = $character = $roomId = $room = $text = null;
		
		if(isset($_POST['searchForm'])){
			$startDate = isset($_POST['startDate']) ? $_POST['startDate'] : null;
			$character = isset($_POST['character']) ? $_POST['character'] : null;
			$roomId = isset($_POST['room']) ? $_POST['room'] : null;
			$text = isset($_POST['text']) ? $_POST['text'] : null;
		}
		
		// get chatrooms
		$chatRoomProvider = new Model_Data_ChatRoomProvider();
		$rooms = $chatRoomProvider->getChatList();
		$this->vars->roomList = array();
		foreach($rooms as $room){
			$this->vars->roomList[$room['chat_room_id']] = $room['room_name'];
		}
		if(isset($roomId)){
			$room = $chatRoomProvider->getOneByPk($roomId);
		}
		
		// get characters
		$characterProvider = new Model_Data_CharacterProvider();
		$this->vars->characters = $characterProvider->getAll();
		
		// get results
		$chatLogProvider = new Model_Data_ChatLogProvider();
		$this->vars->results = $chatLogProvider->search($startDate,null,$text,$room,$character);
		
	}
}
