<?php

class tc{
	
	function Produtos() {
		require_once '../application/mktplace/tc/api/produtos/produtos.php';
		return new produtos();
	}
	
	function Categorias() {
		require_once '../application/mktplace/tc/api/categorias/categorias.php';
		return new categories();
	}
	
}