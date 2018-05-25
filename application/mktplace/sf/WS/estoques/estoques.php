<?php 

require_once 'mktplace/meliSF.php';

class estoques{
	
	private $path;
	private $meli;
	
	function __construct() {
		$this->meli = new meliSF();
	}
	
	function getEstoque($page = NULL, $per_page = NULL) {
		
		$this->path = "/stock";
		$param = array();
		if(isset($page)) $param['page'] = $page;
		if(isset($per_page)) $param['per_page'] = $per_page;
		
		$get = $this->meli->get($this->path,$param);
		
		return $get;
		
	}
	
	
}



