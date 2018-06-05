<?php

require_once '../application/mktplace/apps/VO/empresaVO.php';
require_once '../application/mktplace/apps/VO/produtoVO.php';
require_once '../application/mktplace/tc/VO/produtoTCVO.php';

require_once '../application/mktplace/apps/DAO/produtoDAO.php';

require_once '../functions/fc_categories_tc.php';
require_once '../functions/fc_products_tc.php';

$e = new empresaVO();
$p = new produtoVO();

IF(isset($_POST['empresaCodigo']) && !is_null($_POST['empresaCodigo']) && !empty($_POST['empresaCodigo'])){
	$e->setCodigo($_POST['empresaCodigo']);
}

IF(isset($_POST['produtoCodigo']) && !is_null($_POST['produtoCodigo']) && !empty($_POST['produtoCodigo'])){
	$p->setCodigo($_POST['produtoCodigo']);
}

//echo json_encode($_POST);
$result = array();

try {
	
	$result = produtoDAO::getInstance()->selectProdutoPorCodigo($e, $p);
	//echo json_encode($result);
	//exit();
	
	if ($result['total'] != 0) {
		
		$produtoEco = $result['data'];
		
		try {
			
			$categoriaId = cadastraCategoriaTC($produtoEco);
			
		} catch (Exception $e) {
			
			$result['error'] = "Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
			echo json_encode($result);		
			
		}
			
		
		$produtoTC = new produtoTCVO();
		$produtoTC->setEan($produtoEco->EAN)
				  ->setName($produtoEco->NAME)
				  ->setDescription(mb_convert_case($produtoEco->DESCRIPTION, MB_CASE_TITLE, "UTF-8"))
 				  ->setDescriptionSmall($produtoEco->DESCRIPTION_SMALL)
				  ->setPrice($produtoEco->PRICE)
				  ->setCostPrice($produtoEco->COST_PRICE)
// 				  ->setPromotionalPrice($produtoEco->)
// 				  ->setStartPromotion($start_promotion)
// 				  ->setEndPromotion($end_promotion)
 				  ->setBrand($produtoEco->MARCA)
// 				  ->setModel($model)
//				  ->setWeight($produtoEco->PESO)
				  ->setWeight(1000)
				  ->setLength($produtoEco->COMPRIMENTO)
				  ->setWidth($produtoEco->LARGURA)
				  ->setHeight($produtoEco->ALTURA)
 				  ->setStock($produtoEco->STOCK)
 				  ->setCategoryId($categoriaId)
 				  ->setAvailable($produtoEco->STOCK > 0?1:0)
				  ->setReference($produtoEco->CODIGO)
// 				  ->setPaymentOption($payment_option)
// 				  ->setRelatedCategories($related_categories)
// 				  ->setReleaseDate($release_date)
// 				  ->setShortcut($shortcut)
				  ->setVirtualProduct("0");
// 				  ->setPictureSource1($picture_source_1)
// 				  ->setPictureSource2($picture_source_2)
// 				  ->setPictureSource3($picture_source_3)
// 				  ->setPictureSource4($picture_source_4)
// 				  ->setPictureSource5($picture_source_5)
// 				  ->setPictureSource6($picture_source_6);
		
		$produto = cadastraProdutoTC($e, $produtoTC);
		
	}
	
} catch (Exception $e) {
	$result['error'] = "Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
	echo json_encode($result);
}


echo json_encode($produto);