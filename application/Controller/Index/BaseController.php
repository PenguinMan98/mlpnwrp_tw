<?php

class Index_BaseController{
	var $view = "defaultView.phtml";
	var $vars = null;
	var $_DB = null;
	var $_URI = "";
	
	public function __construct(){
		$this->vars = new stdClass();
		$this->_DB = DbCn::getInstance();
		$this->_URI = $_SERVER['REQUEST_URI'];
	}
	
	public function getView(){
		return $this->view;
	}
	public function getVars(){
		return $this->vars;
	}
}