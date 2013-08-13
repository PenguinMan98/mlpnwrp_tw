<?php
include_once 'OperationBase.php';
class Operation_Zaroll extends OperationBase{
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
		$test = preg_match("/^(\d*)\s?(.*)/i", $this->data[0], $matches);
		$result = "";
		
		if( $test === false){
			throw new Exception("An error occurred parsing the string.");
		}elseif( $test === 0 ){
			$this->messages[] = "Usage: '/zaroll X' where X is an integer number of d10's.";
		}else{
			$howMany = $matches[1];
			$howBig = 10; //$matches[2];
			
			$result = "{{ {$howMany}d{$howBig}: ";
			$successCount = 0;
			$tenCount = 0;
			$sum = 0;
			$silly = false;
			
			if($howMany > 50 || $howMany < 1 ){
				$silly = true;
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
					if($i >= $howMany) $result .= "*";
					$result .= $rand;
					if($i >= $howMany) $result .= "*";
					
					$sum += $rand;
				}
			}
			if($silly)
				$result .= "Don't be silly. }} ". $matches[2];
			else
				$result .= " = {$successCount} Successes }} ". $matches[2]; // then add the rest
		}
		
		return $result;
	}
}