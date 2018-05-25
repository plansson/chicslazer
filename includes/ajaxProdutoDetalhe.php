<?php

require_once '../application/mktplace/apps/VO/empresaVO.php';
require_once '../application/mktplace/apps/VO/produtoVO.php';

require_once '../application/mktplace/apps/DAO/produtoDAO.php';

$e = new empresaVO();
$p = new produtoVO();

IF(isset($_POST['empresaCodigo']) && !is_null($_POST['empresaCodigo']) && !empty(($_POST['empresaCodigo']))){
	$e->setCodigo($_POST['empresaCodigo']);
}

IF(isset($_POST['produtoCodigo']) && !is_null($_POST['produtoCodigo']) && !empty(($_POST['produtoCodigo']))){
	$p->setCodigo($_POST['produtoCodigo']);
}

//echo json_encode($_POST);
$result = array();

try {
	
	$result = produtoDAO::getInstance()->selectProdutoPorCodigo($e, $p);
	
} catch (Exception $e) {
	$result['error'] = "Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
}


echo json_encode($result['data']);