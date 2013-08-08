<?php

class TokenOperation{
	public $data = array();
	private $oocFlag = false;
	
	function __construct( &$string, &$messages ){
		//$string = html_entity_decode($string);
		$raw = explode(" ", $string);
		$grouped = array(); // grouped will group tokens together that are separated by " or ' delimiters
		$tempToken = "";
		$findingApostrophe = $findingQuote = false;
		for($i = 0; $i < count($raw); $i++){ // for each token
			$word = $raw[$i]; // call it word
				
			if($word[0] == '\'' && !$findingQuote){ // if it starts with apostrophe,
				$findingApostrophe = true; // start finding a close apostrophe
			}elseif($word[0] == '"' && !$findingApostrophe){ // if it starts with quote
				$findingQuote = true; // start looking for a close quote
			}
							
			if($findingQuote || $findingApostrophe){ // if I'm searching,
				if(!empty($tempToken)) $tempToken .= " ";
				$tempToken .= $word; // add the word to the tempToken
			}else{
				$grouped[] = $word; // otherwise, put the token in the grouped array
			}
						
			if(( $word[strlen($word)-1] == '\'' && $findingApostrophe ) || // if I find a closing
				( $word[strlen($word)-1] == '"' && $findingQuote )){
				$findingApostrophe = $findingQuote = false; // stop searching
				$grouped[] = $tempToken; // add the new grouped token to the grouped array
				$tempToken = ""; // reset the tempToken
			}
				
			if( $i+1 == count($raw) && !empty($tempToken)){ //if I've gotten to the end with leftovers,
				$grouped[] = $tempToken; // just add the temp Token to the grouped array
			}
		}
		$parsed = array();
		
		for($i = 0; $i < count($grouped); $i++){ // go through each word
			$word = $grouped[$i];
			//echo "i=$i rawcount=".count($raw)." word=$word<br>";
			$matches = array();
			$test = preg_match("/^[\/!](\/?\w*)([^\s]*)/i", $word, $matches); // test for a token.  Must start with / or !

			if( $test === false ){// failure
				throw new Exception("An error occurred parsing the string.");
			}elseif( $test === 0 ){// no match, move along.
				
					// : (/me)
				if($word == ":" && $i == 0){
					$parsed[] = "/me";
				}elseif($word[0] == ":" && $i == 0){
					$parsed[] = "/me " . substr($word,1);
				}else{
					$parsed[] = $word;
				}
				
			}else{ // token found.
				$operator = $matches[1];// save the operation name
				$args = array();
					// get the classname
				$className = "Operation_" . ucfirst($operator);
				$filePath = "operations/" . ucfirst($operator) . ".php"; // ajax-chat/php/
				
					// /me
				if($operator == "me" && $i == 0){
					$parsed[] = "/" . $operator . $matches[2];
					continue;
				}
								
					// //
				if($operator == "/" && $i == 0){
					$this->oocFlag = true;
					$parsed[] = "(( ".$matches[2];
					if(count($grouped) == 1) $parsed[] = "))";
					continue;
				}elseif($operator[0] == "/" && $i == 0){
					$this->oocFlag = true;
					$parsed[] = "(( " . substr($operator,1).$matches[2];
					if(count($grouped) == 1) $parsed[] = "))";
					continue;
				}
				
					// Checks to make sure that operation exsits. Otherwise, we'll be throwing an error.
				if(!file_exists($filePath)){
					//throw new Exception("'" . $operator . "' is not a valid command.");
					$parsed[] = $word;
					continue; // skip it instead
				}else{
					/****Perform an Operation****/
						// include the class
					require_once($filePath);
				
					if(($i + $className::$args) >= count($grouped) ){ // not enough arguments
						$parsed[] = "Not enough arguments for '" . $operator . "'";
						continue;
					}
					$args = array_slice($grouped, $i + 1, $className::$args);
					
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
				// tack )) on the end if it's an ooc
			if($i >= count($grouped) - 1 && $this->oocFlag){
				$parsed[] = "))";
			}
		}
		$string = implode(' ', $parsed);
	}
}