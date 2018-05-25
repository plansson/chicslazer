<?php
header("Content-type: text/html; charset=utf-8");

require_once '../application/mktplace/mktplace.php';
require_once '../application/mktplace/tc/VO/categoriaVO.php';

function cadastraCategoriaTC($p) {
	
	//$categoryOld = NULL;
	$parentId = 0;
	
	$arrayCategoria = array(
			$p->CATEGORIA,
			$p->SUBCATEGORIA,
	);
	
	$categoriaId = 0;
	
	foreach ($arrayCategoria as $categoria) {
		
		$mkt = new mktplace();
		
		$request = $mkt->getTC()->Categorias()->getCategoryName($categoria, $parentId);

		if ($request['httpCode'] == '200' && $request['body']->Categories) {
			
			foreach ($request['body']->Categories as $categoriaTC) {
				
				$categoriaId = $categoriaTC->Category->id;
			
			}
			
		} else {
			
			$c = new categoriaVO();
			$c->setParentId($parentId);
			$c->setName($categoria);
			$c->setDescription('');
			$c->setSlug('');
			
			$request = $mkt->getTC()->Categorias()->postCategory($c);
			
			if ($request['httpCode'] == '201'){
				$categoriaId = $request['body']->id;
			} 
			
		}
		
		$parentId = $categoriaId;
	}
	
	return $categoriaId;
	
}

function deletaCategoriasNS(array $categoriasNS){
	foreach ($categoriasNS as $categoria) {
		deletaCategoriaNS($categoria);
	}
}

function deletaCategoriasBD(){
	
	try {
		
		categoriesDAO::getInstance()->deleteCategoriesBD();
		
	} catch (Exception $e) {
		
		throw new Exception($e);
		
	}	
	
}

function deletaCategoriaNS(categoriesNSVO $categoria){

	$mkt = new mktplace();
	
	$request = $mkt->getNS()->getCategory()->deleteCategories($categoria->getId());
	
	if($request['httpCode'] == 200 or $request['httpCode'] == 201){
		
		$categoriaBD = new categoriesBD();
		$categoriaBD->setId($categoria->getId());
		
		try {
			categoriesDAO::getInstance()->deleteCategoryId($categoriaBD);
			escreveTexto("Categoria Deletada: " . $categoriaBD->getId());
		} catch (Exception $e) {
			// Conexao::getInstanceNS()->rollBack();
			escreveTexto($e->getCode() . ' - ' . $e->getMessage());
		}
	}

}

function deletaCategoriaId($categoriaId){

	$mkt = new mktplace();

	$request = $mkt->getNS()->getCategory()->deleteCategories($categoriaId);

	if($request['httpCode'] == 200 or $request['httpCode'] == 201){

		$categoriaBD = new categoriesBD();
		$categoriaBD->setId($categoriaId);

		try {
			categoriesDAO::getInstance()->deleteCategoryId($categoriaBD);
			escreveTexto("Categoria Deletada: " . $categoriaBD->getId());
			
			return TRUE;
		} catch (Exception $e) {
			escreveTexto($e->getCode() . ' - ' . $e->getMessage());
			return FALSE;
		}
	} else {
		escreveTexto("Codigo Erro: " . $request['httpCode']);
		return FALSE; 
	}
	
	return FALSE;

}