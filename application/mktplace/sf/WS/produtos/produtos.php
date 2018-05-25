<?php 

require_once '../application/mktplace/meliSF.php';

class produtos{
	
	private $path;
	private $meli;
	
	function __construct() {
		$this->meli = new meliSF();
	}
	
	function getProdutos($page = 1, $per_page = 25, $updated_since) {
		
		$this->path = "/products";
		$param = array();
		if(isset($page)) $param['page'] = $page;
		if(isset($per_page)) $param['per_page'] = $per_page;
		if(isset($updated_since)) $param['updated_since'] = rawurlencode($updated_since);
		
		var_dump($param);
		
		$get = $this->meli->get($this->path,$param);
		
		return $get;
		
	}
	
	function getProdutosDisponiveis($page = 1, $per_page = 25, $updated_since) {
	
		$this->path = "/products/available";
		$param = array();
		if(isset($page)) $param['page'] = $page;
		if(isset($per_page)) $param['per_page'] = $per_page;
		if(isset($updated_since)) $param['updated_since'] = rawurlencode($updated_since);
	
		$get = $this->meli->get($this->path,$param);
	
		return $get;
	
	}
	
	function getProdutosIndisponiveis($page = NULL, $per_page = NULL, $updated_since) {
	
		$this->path = "/products/unavailable";
		$param = array();
		if(isset($page)) $param['page'] = $page;
		if(isset($per_page)) $param['per_page'] = $per_page;
		if(isset($updated_since)) $param['updated_since'] = rawurlencode($updated_since);
	
		$get = $this->meli->get($this->path,$param);
	
		return $get;
	
	}
	
	function getProdutoSku($sku) {
	
		$this->path = "/products/" . $sku;
		$param = array();
	
		$get = $this->meli->get($this->path,$param);
	
		return $get;
	
	}
	
	
}



