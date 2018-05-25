<?php

class magento{
	
	function Produtos() {
		require_once '../application/mktplace/magento/soap/produtos/produtos.php';
		return new produtos();
	}
	
	function Categorias() {
		require_once '../application/mktplace/magento/soap/categorias/categorias.php';
	}
	
}