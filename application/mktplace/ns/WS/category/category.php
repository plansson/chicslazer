<?php

require_once '../application/mktplace/meliNS.php';

class category{
	
	private $path;
	private $meli;
	
	function __construct() {
		$this->meli = new meliNS();
	}
	
	function getCategories() {
		$this->path = "/categories";
		$get = $this->meli->get($this->path);
		return $get;
	}
	
	function headCategories() {
		
		$this->path = "/categories";
		$head = $this->meli->head($this->path);
		
		return $head;
	}
	
	function postCategory($body) {
		
		$this->path = "/categories";
		$post = $this->meli->post($this->path, $body, NULL);
		
		return $post;
	}
	
	function deleteCategories($id) {
		$this->path = "/categories/" . $id;
		$delete = $this->meli->delete($this->path);
		return $delete;
	}
	
}