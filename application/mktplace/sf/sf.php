<?php

class sf{
	
	function getEstoques() {
		require_once '../application/mktplace/sf/WS/estoques/estoques.php';
	}
	
	function getPedidos() {
		NULL;
	}
	
	function getProdutos() {
		require_once '../application/mktplace/sf/WS/produtos/produtos.php';
		return new produtos();
	}
}