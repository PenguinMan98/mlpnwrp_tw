<?php
include_once('OperationBase.php');
class Operation_Roll extends OperationBase{
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
		$test = preg_match("/^(\d*)d(\d*)(\s?(\+|-)(\d*))?/i", $this->data[0], $matches);
		$result = "";

		if( $test === false){
			throw new Exception("An error occurred parsing the string.");
		}elseif( $test === 0 ){
			throw new Exception("Usage: '/roll XdY+Z' or '/roll XdY-Z' where X,Y, and Z are any integer number. Z is optional.");
		}else{
			$howMany = $matches[1];
			$howBig = $matches[2];
			
			if(count($matches > 5)){
				$modifierOp = $matches[4];
				$modifier = $matches[5];
			}else{
				$modifierOp = false;
				$modifier = false;
			}
			
			$result = "{{ {$howMany}d{$howBig}";
			if($modifier && $modifierOp == "+") $result .= "+$modifier";
			elseif($modifier) $result .= "-$modifier";
			$result .= ": ";
			$sum = 0;
				
			if($howMany > 50 || $howBig > 100 || $howMany < 1 || $howBig < 2 ){
				return $result .= " Don't be silly. }}". $matches[6];
			}else{
				for($i = 0; $i < $howMany; $i++){
					if($i > 0) $result .= " ";
					$rand = mt_rand(1, $howBig);
					$result .= $rand;
					$sum += $rand;
				}
			}
				
			if($modifier && $modifierOp == "+"){
				$result .= " +$modifier";
				$sum = $sum + $modifier;
			}
			elseif($modifier){ // assume -
				$result .= " -$modifier";
				$sum = max($sum - $modifier, 1);
			}
			
			$result .= " = {$sum} }} ". $matches[6];
		}

		return $result;
	}
}