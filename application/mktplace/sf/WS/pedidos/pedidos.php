<?php 

require_once '../application/mktplace/meliSF.php';

class pedidos{
	
	private $path;
	private $meli;
	
	function __construct() {
		$this->meli = new meliSF();
	}
	
	function postPedido($pedido) {
		
		$this->path = "/orders";
		
		$post = $this->meli->post($this->path,$pedido, NULL);
		
		return $post;
		
	}
	
	
}



