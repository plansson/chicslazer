<?php

require_once '../application/mktplace/meliTray.php';

class categories{
	
	private $path;
	private $meli;
	private $params = array();
	private $auth;
	
	function __construct() {
		$this->meli = new meliTray();
		$this->auth = $this->meli->getAuthorizationCode();
		$this->params['access_token'] = $this->auth['accessToken'];
	}
	
	function getCategories() {
		
		$this->path = "/categories/";
		$get = $this->meli->get($this->path, $this->params);
		return $get;
	}
	
	function getCategoryName($name, $parentId = ""){
		
		$this->path = "/categories";
		$this->params['name'] = $name;
		$this->params['parent_id'] = $parentId;
		$get = $this->meli->get($this->path, $this->params);
		return $get;
	}
	
	function postCategory($body) {
		
		$this->path = "/categories";
		$post = $this->meli->post($this->path, $body, $this->params);
		
		return $post;
	}
	
}