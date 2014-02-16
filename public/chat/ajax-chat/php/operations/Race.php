<?php
include_once('OperationBase.php');
class Operation_Race extends OperationBase{
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
		if(!($uugProvider->isGuide($userId) || $userId == 11)){
			$this->messages[] = "You don't have permission to do that.";
			return (implode(" ", self::$args));
		}
		// ok. we have permission to proceed.
		$characterName = $this->data[0];
		$newRace = str_replace('"', '', $this->data[1]);
		
		
		$crProvider = new Model_Data_CharacterRaceProvider(); // A class for character race related methods
		try{
			$crProvider->setRace($characterName, $newRace, $this->messages); // do the action. May throw errors.
		}catch(Exception $e){
			$this->messages[] = $e->getMessage();
			return "{{ Error }}";
		}
		return "{{ $characterName is now a $newRace }}";
	}
}