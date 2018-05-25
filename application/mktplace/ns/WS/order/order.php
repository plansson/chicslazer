<?php

require_once '../application/mktplace/meliNS.php';

class order{
	
	private $path;
	private $meli;
	
	function __construct() {
		$this->meli = new meliNS();
	}
	
	function getOrderId($id) {
		$this->path = "/orders/" . $id;
		$get = $this->meli->get($this->path);
		return $get;
	}
	
}