<?php
include_once('OperationBase.php');

/*
 * Grant
 * Gives access to a character to a player.  
 * This access does not remove or invalidate any other players access to the character.
 * /grant <player_name> <character_name>
 * */
class Operation_Kick extends OperationBase{
	public $operator;
	public $data;
	public static $args = 3; // user, minutes, reason
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
			return "{{ Error }}";
		}
		// ok. we have permission to proceed.
		$userName = str_replace('"', '', $this->data[0]);
		$minutes = str_replace('"', '', $this->data[1]);
		$reason = str_replace('"', '', $this->data[2]);
		
		// minutes must be an integer
		if(!is_numeric($minutes)){
			$this->messages[] = "You must use an integer number of minutes for the second argument.";
			return "{{ Error }}";
		}
		
		// verify the user
		$uProvider = new Model_Data_UsersUsersProvider();
		$user = $uProvider->getOneByPlayerName($userName);
		
		if(!is_object($user)){
			$this->messages[] = "I couldn't find user $userName.";
			return "{{ Error }}";
		}
		
		$ucProvider = new Model_Data_UserChastisementProvider(); // A class for methods relating to chastising users.
		// logic: The latest entry in the table is the only one that matters so if the user is already kicked, then kick em again to restart the timer.
		// this means I only ever insert and read, never update.  That'll save time.
		$uc = new Model_Structure_UserChastisement( array(
			"userId" => $user->getUserid(),
			"type" => "kick",
			"duration" => intval($minutes),
			"reason" => $reason
			)	
		);
		$arrErrors = array();
		
		try{
			$ucProvider->insertOne($uc, $arrErrors); // do the action. May throw errors.
			
			if(!empty($arrErrors)){
				$this->messages[] = "Something went wrong trying to kick $userName.";
				return "{{ Error }}";
			}
		}catch(Exception $e){
			$this->messages[] = $e->getMessage();
			return "{{ Error }}";
		}
		return "{{ $userName has been kicked for $minutes minutes \"$reason\" }}";
	}
}