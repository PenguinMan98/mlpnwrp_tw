<?php
include_once("OperationBase.php");
class Operation_Ssr extends OperationBase{
	public $operator;
	public $data;
	public static $args = 1;
	public $messages = array();

	function __construct( $args ){
		if(self::$args != count($args)){
			return (implode(" ", $args));
		}

		$this->data = $args;
	}

	public function getValue(){
		try{
			return $this->roll();
		} catch (Exception $e){
			throw $e;
		}
	}

	private function roll(){
		$matches = array();
		$test = preg_match("/^(\d+)(!|T(\d+)(!?))?$/i", $this->data[0], $matches);
		//$followingText = array_slice($this->data, 1);
		$result = "";

		if( $test === false){
			throw new Exception("An error occurred parsing the string.");
		}elseif( $test === 0 ){
			$this->messages[] = "Shadowrun Roller. Usage: '/sr X, /sr X!, /sr XTY, or /sr XTY!' where X is an integer number of d6's, Y is your threshhold, and the ! means to reroll the sixes.";
		}else{
			$howBig = 6;// constant for this operation
			$howMany = $matches[1]; // how many d6
			// $matches[2] should have ! or TX or TX!
			$threshhold = (!empty($matches[3])) ? $matches[3] : -1; // threshhold
			$explode = (!empty($matches[4]) || $matches[2] == '!'); // $matches[4] will have ! or nothing

			$result = "{{ {$howMany}".$matches[2].": ";
			$successCount = 0;
			$failCount = 0;
			$silly = false;
			$extraRolls = 0;

			if($howMany > 50 || $howMany < 1 ){
				$silly = true;
			}else{
				for($i = 0; $i < $howMany; $i++){
					if($i > 0) $result .= " ";
					$rand = mt_rand(1, $howBig); // get the random number

					if($rand > 4){
						$successCount++;
					}
					if($rand == 1){
						$failCount++;
					}
					if($rand == 6){
						$extraRolls++;
					}
					$result .= ($rand > 4) ? " [b]".$rand."[/b]" : " $rand";
				}
				// explode
				while($explode && $extraRolls > 0){
					$howMany++; // add to the roll count
					$rand = mt_rand(1, $howBig); // get the random number
					if($rand > 4){
						$successCount++;
					}
					if($rand == 1){
						$failCount++;
					}
					if($rand == 6){
						$extraRolls++;
					}
					$result .= ' {' . $rand . '}';
					$extraRolls--; // tick off one extra roll.
				}
			}
			if($silly)
				$result .= "Don't be silly. }} ";
			else{
				$result .= " = {$successCount} Hits";
				if($threshhold > 0 && $howMany > 0){
					$result .= " vs $threshhold: ";
					if($successCount > $threshhold){
						$result .=  'Success+' . ($successCount - $threshhold);
					}elseif($successCount == $threshhold){
						$result .= 'Success';
					}else{
						$result .= 'Failure';
					}
				}
				// "If more than half the dice you rolled show a one, then you’ve got problems. This is called a glitch."
				$failThreshhold = ( $howMany % 2 == 1 ) ? ( $howMany + 1 ) / 2  : ( $howMany + 2 ) / 2;
				if($failThreshhold > 0 && $failCount >= $failThreshhold){ // glitch!
					if($successCount == 0){
						$result .= ' CRITICAL GLITCH!!';
					}else{
						$result .= ' GLITCH!';
					}
				}
				$result .= " }} "; // then add the rest
			}
		}
				
		$this->messages[] = $result;

		return "{{ Rolls Dice Privately }}";
	}
}