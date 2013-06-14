<?php

class TokenOperation{
	public $data = array();
	private $oocFlag = false;
	
	function __construct( &$string, &$messages ){
		$raw = explode(" ", $string);
		$parsed = array();
		
		for($i = 0; $i < count($raw); $i++){ // go through each word
			$word = $raw[$i];
			//echo "i=$i rawcount=".count($raw)." word=$word<br>";
			$matches = array();
			$test = preg_match("/^[\/!](\/?\w*)/i", $word, $matches); // test for a token.  Must start with / or !

			if( $test === false){// failure
				throw new Exception("An error occurred parsing the string.");
			}elseif( $test === 0 ){// no match, move along.
				$parsed[] = $word;
			}else{ // token found.
				$operator = $matches[1];// save the operation name
				$args = array();
					// get the classname
				$className = "Operation_" . ucfirst($operator);
				$filePath = "operations/" . ucfirst($operator) . ".php";
				
					// /me
				if($operator == "me" && $i == 0){
					$parsed[] = "/" . $operator;
					continue;
				}
					// //
				if($operator == "/" && $i == 0){
					$this->oocFlag = true;
					$parsed[] = "(( ";
					if(count($raw) == 1) $parsed[] = "))";
					continue;
				}elseif($operator[0] == "/" && $i == 0){
					$this->oocFlag = true;
					$parsed[] = "(( " . str_replace("/", "", $operator);
					if(count($raw) == 1) $parsed[] = "))";
					continue;
				}
				
					// check for the class file
				if(!file_exists($filePath)){
					//throw new Exception("The operation " . $operator . " has not been defined.");
					$parsed[] = "&lt;&lt; '" . $operator . "' operation not found &gt;&gt; ";
					continue;
				}
					// include the class
				require_once($filePath);
				
				if(($i + $className::$args) >= count($raw) ){ // not enough arguments
					$parsed[] = "&lt;&lt; not enough arguments &gt;&gt;";
					continue;
				}
				$args = array_slice($raw, $i + 1, $className::$args);
				
					// create the class
				$opClass = new $className($args);
				
				$parsed[] = (string)$opClass; // perform the operation
				
				$messages = $opClass->messages;  // get any messages
				
				$i += $className::$args;
				
			}
			if($i >= count($raw) - 1 && $this->oocFlag){
				$parsed[] = "))";
			}
		}
		$string = implode(' ', $parsed);
	}
}