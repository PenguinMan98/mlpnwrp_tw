<?php

class Operation_Sroll{
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

	private function roll(){
		$matches = array();
		$test = preg_match("/^(\d*)d(\d*)(\s?(\+|-)(\d*))?/i", $this->data[0], $matches);
		$result = "";

		if( $test === false){
			throw new Exception("An error occurred parsing the string.");
		}elseif( $test === 0 ){
			$result = "&lt;&lt; Error &gt;&gt; " . $this->data;
		}else{
			//print_r($matches);
			$howMany = $matches[1];
			$howBig = $matches[2];
			
			if(count($matches > 5)){
				$modifierOp = $matches[4];
				$modifier = $matches[5];
			}else{
				$modifierOp = false;
				$modifier = false;
			}
			
			$result = "&lt;&lt; {$howMany}d{$howBig}";
			if($modifier && $modifierOp == "+") $result .= "+$modifier";
			elseif($modifier) $result .= "-$modifier";
			$result .= ": ";
			$sum = 0;
				
			if($howMany > 50 || $howBig > 100 || $howMany < 1 || $howBig < 2 ){
				$result .= "Don't be silly.";
			}else{
				for($i = 0; $i < $howMany; $i++){
					if($i > 0) $result .= " ";
					$rand = mt_rand(1, $howBig);
					$result .= $rand;
					$sum += $rand;
				}
			}
				
			if($modifier && $modifierOp == "+") $result .= " +$modifier";
			elseif($modifier) $result .= " -$modifier";
			if($howMany > 1 || $modifier > 0)
				$result .= " = " . (($modifierOp == "+")? $sum + $modifier : $sum - $modifier );
			$result .= " &gt;&gt; ". $matches[6];
		}
		
		$this->messages[] = $result;

		return "&lt;&lt; Rolls Dice Privately &gt;&gt;";
	}
}