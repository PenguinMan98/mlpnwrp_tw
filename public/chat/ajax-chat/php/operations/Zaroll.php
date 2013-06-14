<?php

class Operation_Zaroll{
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

	public function __toString(){
		return $this->roll();
	}

	// this chat can't do /me here.
	/*private function me(){
		return " " . $this->data;
	}*/

	private function roll(){
		$matches = array();
		$test = preg_match("/^(\d*)d(\d*)(\s?(\+|-)(\d*))?\s?(.*)/i", $this->data[0], $matches);
		$result = "";
		
		if( $test === false){
			throw new Exception("An error occurred parsing the string.");
		}elseif( $test === 0 ){
			$result = "<<Error>> " . $this->data;
		}else{
			//print_r($matches);
			$howMany = $matches[1];
			$howBig = $matches[2];
			$modifierOp = $matches[4];
			$modifier = $matches[5];
			
			$result = "<< {$howMany}d{$howBig}";
			if($modifier && $modifierOp == "+") $result .= "+$modifier";
			elseif($modifier) $result .= "-$modifier";
			$result .= ": ";
			$successCount = 0;
			$tenCount = 0;
			$sum = 0;
			
			if($howMany > 50 || $howBig > 100 || $howMany < 1 || $howBig < 2 ){
				$result .= "Don't be silly.";
			}else{
				for($i = 0; $i < $howMany+$tenCount; $i++){
					if($i > 0) $result .= " ";
					$rand = mt_rand(1, $howBig);
					
					if($rand >= 6){
						$successCount++;
					}
					if($rand == 10){
						$tenCount++;
					}
					if($i >= $howMany) $result .= "{";
					$result .= $rand;
					if($i >= $howMany) $result .= "}";
					
					$sum += $rand;
				}
			}
			
			if($modifier && $modifierOp == "+") $result .= " +$modifier";
			elseif($modifier) $result .= " -$modifier";
			if($howMany > 1 || $modifier > 0)
				$result .= " = " . $successCount . " Successes";
			$result .= " >> ". $matches[6]; // then add the rest
		}
		
		return $result;
	}
}