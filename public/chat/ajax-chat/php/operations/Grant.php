<?php
include_once('OperationBase.php');

/*
 * Grant
 * Gives access to a character to a player.  
 * This access does not remove or invalidate any other players access to the character.
 * /grant <player_name> <character_name>
 * */
class Operation_Grant extends OperationBase{
	public $operator;
	public $data;
	public static $args = 2; // character, user.
	public $messages = array();

	function __construct( $args ){
		if(self::$args != count($args)){
			return (implode(" ", $args));
		}
		$this->data = $args;
	}

	public function getValue(){
		try{
			return $this->execute();
		} catch (Exception $e){
			throw $e;
		}
	}

	private function execute(){
		GLOBAL $userId;
		$uugProvider = new Model_Data_UsersUsergroupsProvider(); // my own class for checking tiki permissions
		if(!$uugProvider->isGuide($userId)){
			$this->messages[] = "You don't have permission to do that.";
			return (implode(" ", self::$args));
		}
		// ok. we have permission to proceed.
		$playerName = str_replace('"', '', $this->data[0]);
		$characterName = str_replace('"', '', $this->data[1]);
		
		$cuProvider = new Model_Data_CharacterUserProvider(); // A class for methods relating to the relationship of characters to users
		try{
			$cuProvider->grantCharacter($playerName, $characterName); // do the action. May throw errors.
		}catch(Exception $e){
			$this->messages[] = $e->getMessage();
			return "{{ Error }}";
		}
		return "{{ $playerName has been granted $characterName!  Congratulations! }}";
	}
}