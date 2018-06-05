<?php

require_once '../application/mktplace/apps/DAO/produtoDAO.php';

$sqlRecord = $sqlTotal = $empresa = null;
$saldo = 0;
$arrayTotal = $arrayRecord = $arrayParam = array();

$sqlRecord = "SELECT";
$sqlTotal = "SELECT";

IF(isset($_POST['length'])){

	$sqlRecord .= " FIRST " . $_POST['length'];

	IF(isset($_POST['start'])){

		$sqlRecord .= " SKIP " . $_POST['start'] ;

	}

}

$sqlRecord .= " P.EMPRESA, P.PRODUTO, PG.DESCRICAO, round(E.ESTDISPONIVEL) ESTDISPONIVEL"; 
$sqlTotal .= " P.EMPRESA, P.PRODUTO, PG.DESCRICAO, round(E.ESTDISPONIVEL) ESTDISPONIVEL"; 
$sqlRecord .= " FROM TESTPRODUTOGERAL PG
		  INNER JOIN TESTPRODUTO P ON (P.PRODUTO = PG.CODIGO)
		   LEFT JOIN TESTESTOQUE E ON (E.PRODUTO = P.PRODUTO AND E.EMPRESA = P.EMPRESA)";
$sqlTotal .= " FROM TESTPRODUTOGERAL PG
		  INNER JOIN TESTPRODUTO P ON (P.PRODUTO = PG.CODIGO)
		   LEFT JOIN TESTESTOQUE E ON (E.PRODUTO = P.PRODUTO AND E.EMPRESA = P.EMPRESA)";
$sqlRecord .= " WHERE 1 = 1";
$sqlTotal .= " WHERE 1 = 1";

IF(isset($_POST['empresaId']) && !is_null($_POST['empresaId']) && !empty($_POST['empresaId'])){
	$empresa = $_POST['empresaId'];
}

IF(!is_null($empresa)){
	$sqlRecord .= " AND P.EMPRESA = '" . $empresa . "'";
	$sqlTotal .= " AND P.EMPRESA = '" . $empresa . "'";
}

IF(isset($_POST['saldo'])){
	$saldo = $_POST['saldo'];
}

IF($saldo != 0){

	$sqlRecord .= " AND ROUND(COALESCE(E.ESTDISPONIVEL,0)) >= " . $saldo;
	$sqlTotal .= " AND ROUND(COALESCE(E.ESTDISPONIVEL,0)) >= " . $saldo;

}

if(isset($_POST['search']['value']) && !empty($_POST['search']['value'])){

	$sqlRecord .= " AND (
		P.PRODUTO LIKE '%".$_POST['search']['value']."%' OR
		PG.DESCRICAO LIKE '%".$_POST['search']['value']."%'
	)";

	$sqlTotal .= " AND (
		P.PRODUTO LIKE '%".$_POST['search']['value']."%' OR
		PG.DESCRICAO LIKE '%".$_POST['search']['value']."%'
	)";

}

$sqlRecord .= " ORDER BY P.EMPRESA, PG.DESCRICAO";

//	echo $sqlRecord;

try {

	$arrayTotal = produtoDAO::getInstance()->selectProdutosTotal($sqlTotal);

	$arrayRecord = produtoDAO::getInstance()->selectProdutos($sqlRecord);

} catch (Exception $e) {

	$arrayParam['error'] = $e;

}

 $arrayParam = array (
 	'draw' => $_POST['draw'],
	'recordsTotal' => $arrayTotal['total'],
	'recordsFiltered' => $arrayTotal['total'],
	'data' => $arrayRecord['data']
);

echo json_encode($arrayParam);