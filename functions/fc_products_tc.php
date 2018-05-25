<?php
header("Content-type: text/html; charset=utf-8");

set_time_limit(0);

require_once '../application/mktplace/mktplace.php';
require_once '../application/mktplace/tc/VO/produtoTCVO.php';

function cadastraProdutoTC(empresaVO $e, produtoTCVO $p) {	
		
		$mkt = new mktplace();
		$request = $mkt->getTC()->Produtos()->getProdutoReference($p->getReference());
		
		if ($request['httpCode'] == '200' && $request['body']->Products) {
				
			foreach ($request['body']->Products as $produtoTC) {
				
				$p->setId($produtoTC->Product->id);
				
				$request = $mkt->getTC()->Produtos()->putProduto($p);
					
			}
				
		} else {
				
			$request = $mkt->getTC()->Produtos()->postProduto($p);
				
			if ($request['httpCode'] == '201'){
				
				$p->setId($request['body']->id);
				
			}
				
		}
		
		return $p;
	
}

function listProdutoNS($id){
	
	$mkt = new mktplace();
	
	$produtosNS = $mkt->getNS()->getProduct()->getProductId($id);

	$produtoNS = NULL;
	
	if ($produtosNS['httpCode'] == 200 or $produtosNS['httpCode'] == 201){
	
		$produtoNS = $produtosNS['body'];
	}
	
	return $produtoNS;
	
}