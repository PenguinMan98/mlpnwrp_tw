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
			$test = preg_match("/^[\/!](\/?\w*)([^\s]*)/i", $word, $matches); // test for a token.  Must start with / or !

			if( $test === false ){// failure
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
					$parsed[] = "/" . $operator . $matches[2];
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
				
					// Checks to make sure that operation exsits. Otherwise, we'll be throwing an error.
				if(!file_exists($filePath)){
					//throw new Exception("'" . $operator . "' is not a valid command.");
					$parsed[] = $word;
					continue; // skip it instead
				}else{
						// include the class
					require_once($filePath);
				
					if(($i + $className::$args) >= count($raw) ){ // not enough arguments
						$parsed[] = "Not enough arguments for '" . $operator . "'";
						continue;
					}
					$args = array_slice($raw, $i + 1, $className::$args);
					
					// Create class and run its getValue function 
					try{
						$opClass = new $className($args);
						if( is_subclass_of($opClass, "OperationBase") ){
							$parsed[] = $opClass->getValue(); // perform the operation
							$messages = $opClass->messages; // get any system messages
						}else{
							throw new exception("Something went very wrong!");
						}
					} catch (Exception $e) {
						throw $e;
					}
					$i += $className::$args;
				}
			}
			if($i >= count($raw) - 1 && $this->oocFlag){
				$parsed[] = "))";
			}
		}
		$string = implode(' ', $parsed);
	}
}