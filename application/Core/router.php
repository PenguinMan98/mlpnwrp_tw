<?php
// load the config
require_once("Bootstrap.php");
$_Bootstrap = Bootstrap::getInstance();

// fetch the passed request
$uriSplit = explode("?",$_SERVER['REQUEST_URI']);

if(count($uriSplit) == 0){
	error404("Error! No URI.<br>");
}

$URI = $uriSplit[0];
$GET = (count($uriSplit) > 1) ? $uriSplit[1] : null;

// Variable separation
$tempSplit = explode("/", $URI);
$routeSplit = array();
foreach($tempSplit as $string){
	if(!empty($string)){
		$routeSplit[] = $string;
	}
}
/*echo "<pre>";
print_r($routeSplit);*/
//die("URI: $URI count: ".count($routeSplit));
$route = null;
if(count($routeSplit) <= 1){ // action only
	$route = new Route(
			"Index", 
			"Index", 
			(!empty($routeSplit[0])) ? $routeSplit[2] : "Index", 
			array()
		);
}elseif(count($routeSplit) == 2){ // controller / action OR  module/controller/index
	$route = new Route(
			"Index", 
			$routeSplit[0], 
			$routeSplit[1], 
			array()
		);
	if($route->error){
		$route = new Route(
				$routeSplit[0],
				$routeSplit[1],
				"Index",
				array()
			);
	}
}elseif(count($routeSplit) == 3){ // module / controller / action
	$route = new Route(
			$routeSplit[0], 
			$routeSplit[1], 
			$routeSplit[2], 
			array()
		);
	// my first routing exception
	if($route->error && $routeSplit[0] == "character"){
		$route = new Route(
				"Index",
				$routeSplit[0],
				$routeSplit[1],
				array('c'=>$routeSplit[2])
		);
	}
}elseif(count($routeSplit) > 3){ // module / controller / action / params
	$URI_PARAMS = array();
	$params = array_slice($routeSplit, 3); // get the params
	if(count($params)%2 == 1) array_pop($params); // ensure an even count
	while(count($params) > 1){
		$URI_PARAMS[$params[0]] = $params[1];
		$params = array_slice($params,2);
	}
	$route = new Route(
			$routeSplit[0], 
			$routeSplit[1], 
			$routeSplit[2], 
			$URI_PARAMS
		);
}

if(!is_object($route)){
	error404("Not sure what you did but stop it.");
}
// perform the routing!
if(!$route->error){
	$route->load();
}else{
	error404($route->error);
}

function error404($errMessage){
	$_SESSION['SYSTEM_MESSAGE'] = $errMessage;
	header("Location: " . SITE_ROOT . "/oops404.php");
}

class Route { 
	private $MODULE;
	private $CONTROLLER;
	private $ACTION;
	private $URI_PARAMS;
	public $_controller;
	public $error;

	function __construct($MODULE, $CONTROLLER, $ACTION, $URI_PARAMS){
		//die( "I got $MODULE, $CONTROLLER, $ACTION<br>" );
		$this->MODULE = $MODULE;
		$this->CONTROLLER = $CONTROLLER;
		$this->ACTION = $ACTION;
		$this->URI_PARAMS = $URI_PARAMS;
		$this->validate();
	}
	
		// takes the routing object, validates it, and builds the pathing.
	function validate(){
		$this->error = null;
	
		// variable sanitization
		$varPattern = "/^(\D(\w|\d)*)$/i";
		$filePattern = "/^(\D(\w|\d|-|_|\.)*)$/i";
	
		if(!preg_match($varPattern, $this->MODULE)){
			$this->error = "Invalid Module Name";
			return false;
			error404("Error! Invalid Module Name<br>");
		}
		$this->MODULE = ucfirst($this->MODULE);
	
		if(!preg_match($varPattern, $this->CONTROLLER)){
			$this->error = "Invalid Controller Name";
			return false;
			error404("Error! Invalid Controller Name<br>");
		}
		$this->CONTROLLER = ucfirst($this->CONTROLLER);
	
		if(!preg_match($varPattern, $this->ACTION)){
			$this->error = "Invalid Action Name";
			return false;
			error404("Error! Invalid Action Name<br>");
		}
		$this->ACTION = ucfirst($this->ACTION);
	
		$temp = array();
		foreach($this->URI_PARAMS as $name=>$value){
			if(preg_match($varPattern, $name)){
				$temp[$name] = $value;
			}
		}
		$this->URI_PARAMS = $temp;
	
		// ROUTE!
	
	
		if(file_exists(CONTROLLER_ROOT . $this->MODULE . "/")){ // Does the module directory exist?
			$this->CONTROLLER_PATH = CONTROLLER_ROOT . $this->MODULE . "/" . $this->CONTROLLER . "Controller.php";
			if(file_exists($this->CONTROLLER_PATH)){ // Does the controller file exist?
				require_once($this->CONTROLLER_PATH); // include the controller file
				$this->CONTROLLER_CLASS_NAME = $this->MODULE."_".$this->CONTROLLER."Controller";
				if(class_exists($this->CONTROLLER_CLASS_NAME)){ // Does the chosen controller class exist?
					$_controller = new $this->CONTROLLER_CLASS_NAME(); // create the controller class
					$this->ACTION_NAME = $this->ACTION . "Action";
					if(is_object($_controller) && method_exists($_controller, $this->ACTION_NAME)){ // does the controller class have the right action?
						$this->VIEW_PATH = VIEW_ROOT . $_controller->getView();
						if(!$_controller->getView()){// is the view there?
							$this->_controller = $_controller;
							return true;
						}elseif(file_exists($this->VIEW_PATH)){// is the view there?
							$this->_controller = $_controller;
							return true;
						}else{
							$this->error = "The specified view ".$_controller->getView()." does not exist!";
							return false;
							error404($this->error);
						}
					}else{
						$this->error = "The specified action $this->ACTION_NAME does not exist!";
						return false;
						error404($this->error);
					}
				}else{
					$this->error = "The specified class $this->CONTROLLER_CLASS_NAME does not exist!";
					return false;
					error404($this->error);
				}
			}else{
				$this->error = "The specified controller $this->CONTROLLER does not exist!";
				return false;
				error404($this->error);
			}
		}else{
			$this->error = "The specified module $this->MODULE does not exist!";
			return false;
			error404($this->error);
		}
	
	}
	
	function load(){
		GLOBAL $user;
		
		$_controller = $this->_controller;
		$_controller->URI_PARAMS = $this->URI_PARAMS;// move the URI params somewhere useful
		$_controller->user = $user;

		// execute the action
		$actionName = $this->ACTION_NAME;
		$_controller->$actionName();
		
		// send it to the view
		if($_controller->getView()){
			$this->loadView($_controller);
			//include($this->VIEW_PATH);
		}
	}
	
	function loadView($_controller){
		$this->VIEW_PATH = VIEW_ROOT . $_controller->getView();
		if(file_exists($this->VIEW_PATH)){// is the view there?
			include($this->VIEW_PATH);// load it!
		}else{
			$this->error = "The specified view ".$_controller->getView()." does not exist!";
			return false;
			error404($this->error);
		}
	}
}
