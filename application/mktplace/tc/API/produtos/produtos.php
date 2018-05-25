<?php 

require_once '../application/mktplace/meliTray.php';

class produtos{
	
	private $path;
	private $meli;
	private $params = array();
	private $auth;
	
	function __construct() {
		$this->meli = new meliTray();
		$this->auth = $this->meli->getAuthorizationCode();
		$this->params['access_token'] = $this->auth['accessToken'];
	}
	
	function getProdutoReference($ref) {
		
		$this->path = "/products";
		if(isset($ref)) $this->params['reference'] = $ref;
		
		$get = $this->meli->get($this->path,$this->params);
		
		return $get;
		
	}
	
	function postProduto(produtoTCVO $body){
		
		$this->path = "/products/" . $body->getId();
		
		$post = $this->meli->post($this->path, $body, $this->params);
		
		return $post;
		
	}
	
	function putProduto(produtoTCVO $body){
	
		$this->path = "/products/" . $body->getId();
	
		$put = $this->meli->put($this->path, $body, $this->params);
	
		return $put;
	
	}
	
	
}



