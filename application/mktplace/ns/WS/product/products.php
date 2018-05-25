<?php

require_once '../application/mktplace/meliNS.php';

class products{
	
	private $path;
	private $params = array();
	private $meli;
	
	function __construct() {
		$this->meli = new meliNS();
	}
	
	function getProducts($page = 1, $perPage = 30) {
		
		if(isset($page)) $this->params['page'] = $page;
		if(isset($page)) $this->params['per_page'] = $perPage;
		$this->path = "/products";
		$get = $this->meli->get($this->path, $this->params);
		
		return $get;
	}
	
	function getProductId($id) {
		
		$this->path = "/products/" . $id;
		$get = $this->meli->get($this->path);
		
		return $get;
	}
	
	function headProducts() {
		
		$this->path = "/products";
		$head = $this->meli->head($this->path);
		
		return $head;
	}
	
	function postProducts($body) {
		
		$this->path = "/products";
		$post = $this->meli->post($this->path, $body, NULL);
		
		return $post;
	}
	
	function putProducts($id, $body) {
		$this->path = "/products/" . $id;
		$put = $this->meli->put($this->path, $body, null);
		
		return $put;
	}
	
	function putProductVariant($productId, $variantId, $body) {
		$this->path = "/products/" . $productId . "/variants/" . $variantId;
		$put = $this->meli->put($this->path, $body, null);
	
		return $put;
	}
	
	function deleteProduct($id) {
		
		$this->path = "/products/" . $id;
		$delete = $this->meli->delete($this->path);
		
		return $delete;
	}
	
}