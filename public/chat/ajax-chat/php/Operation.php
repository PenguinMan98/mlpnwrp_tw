<?php

class Operation{
	public $operator;
	public $data;
	
	function __construct( $string ){
		$matches = array();
		$test = preg_match("/^\/(\/?\w*)\s?(.*)/i", $string, $matches);
		
		if( $test === false){
			throw new Exception("An error occurred parsing the string.");
		}elseif( $test === 0 ){
			$this->data = $string;
		}else{
			//print_r($matches);
			$this->operator = $matches[1];
			$this->data = $matches[2];
		}
	}
	
	public function __toString(){
		if($this->operator == "me"){
			return "/me " . $this->data; // can't do /me here so just move it through.
		}if($this->operator == "roll"){
			return $this->roll();
		}if($this->operator == "zaroll"){
			return $this->zaroll();
		}if($this->operator == "/"){
			return "(( " . $this->data . " ))";
		}if($this->operator[0] == "/"){ // first letter is a slash but there are more letters in the token,
			return "(( " . str_replace("/", "", $this->operator) . " " . $this->data . " ))";
		}
		return $this->data;
	}
	
	// this chat can't do /me here.
	/*private function me(){
		return " " . $this->data;
	}*/
	
	private function roll(){
		$matches = array();
		$test = preg_match("/^(\d*)d(\d*)(\s?(\+|-)(\d*))?\s?(.*)/i", $this->data, $matches);
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
			$result .= " >> ". $matches[6];
		}
		
		return $result;
	}
	
	private function zaroll(){
		$matches = array();
		$test = preg_match("/^(\d*)d(\d*)(\s?(\+|-)(\d*))?\s?(.*)/i", $this->data, $matches);
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
				$result .= " = " . $successCount;
			$result .= " >> ". $matches[6]; // then add the rest
		}
		
		return $result;
	}
}