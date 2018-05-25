<?php

require_once '../application/mktplace/conexao.php';

class produtoDAO{
	
	public static $instance;
	
	public static function getInstance() {
	
		if (!isset(self::$instance))
			self::$instance = new produtoDAO();
	
			return self::$instance;
	
	}
	
	public function selectProdutosTotal($sql, $empresa = NULL, $saldo = NULL) {
		try {
	
			$stmt = Conexao::getInstanceAPPS()->prepare($sql);

			//$stmt->bindValue(1, $empresa, PDO::PARAM_STR);
			//$stmt->bindValue(2, $saldo, PDO::PARAM_INT);
	
			$stmt->execute();
	
			$ret = array();
	
			$ret['data'] = $stmt->fetchAll();
			$ret['total'] = $stmt->rowCount();
	
			return $ret;
	
		} catch (Exception $e) {
			throw new Exception($e);
			exit;
		}
	}
	
	public function selectProdutos($sql, $empresa = NULL, $saldo = NULL) {
		
		try {
	
			$stmt = Conexao::getInstanceAPPS()->prepare($sql);

			//$stmt->bindValue(1, $empresa, PDO::PARAM_STR);
			//$stmt->bindValue(2, $saldo, PDO::PARAM_INT);
	
			$stmt->execute();
	
			$ret = array();
	
			$ret['data'] = $stmt->fetchAll();
			$ret['total'] = $stmt->rowCount();
	
			return $ret;
	
		} catch (Exception $e) {
			throw new Exception($e);
		}
	}
	
	public function selectProdutoPorEmpresa(empresaVO $e) {
		try {
			$sql = "SELECT P.EMPRESA, P.PRODUTO, PG.DESCRICAO, E.ESTDISPONIVEL
					  FROM TESTPRODUTOGERAL PG
					 INNER JOIN TESTPRODUTO P ON (P.PRODUTO = PG.CODIGO AND P.EMPRESA = COALESCE(?, P.EMPRESA))
					 LEFT JOIN TESTESTOQUE E ON (E.PRODUTO = P.PRODUTO AND E.EMPRESA = P.EMPRESA)
					ORDER BY P.EMPRESA, PG.DESCRICAO";
	
			$stmt = Conexao::getInstanceAPPS()->prepare($sql);
			$stmt->bindValue(1, $e->getCodigo(), PDO::PARAM_INT);
	
			$stmt->execute();
	
			$ret = array();
	
			$ret['data'] = $stmt->fetchAll();
			$ret['total'] = $stmt->rowCount();
	
			return $ret;
	
		} catch (Exception $e) {
			echo "Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
			var_dump($stmt);
			exit;
		}
	}
	
	public function selectProdutoPorCodigo(empresaVO $e, produtoVO $p) {
		try {
			$sql = "SELECT E.EMPRESA
						 , PG.CODIGO
					     , PG.CODIGOBARRA EAN
					     , PG.DESCRICAO NAME
					     , PG.DESCRICAOREDUZIDA DESCRIPTION_SMALL
					     , PG.DESCRICAOGRADE DESCRIPTION
					     , PG.REFERENCIA
					     , E.ESTDISPONIVEL STOCK
					     , P.PRPRATICADO PRICE
					     , P.CUSTOFINAL COST_PRICE
					     , M.DESCRICAO MARCA
					     , G.DESCRICAO CATEGORIA
					     , SG.DESCRICAO SUBCATEGORIA
						 , COALESCE(PG.PESOBRUTO,0) PESO
					     , COALESCE(PG.M3COMPRIMENTO,0) COMPRIMENTO
					     , COALESCE(PG.M3LARGURA,0) LARGURA
					     , COALESCE(PG.M3ALTURA,0) ALTURA
					 FROM TESTPRODUTOGERAL PG
					    , TEstEstoque E
					    , TEstProduto P
					    , TESTMARCA M
					    , TESTGRUPO G
					    , TESTSUBGRUPO SG
					 WHERE 1 = 1 
					   AND PG.CODIGO = ? 
					   AND E.PRODUTO = PG.CODIGO
					   AND E.EMPRESA = ? 
					   AND P.PRODUTO = E.PRODUTO
					   AND P.EMPRESA = E.EMPRESA
					   AND M.CODIGO = PG.MARCA
					   AND G.CODIGO = P.GRUPO
					   AND G.EMPRESA = P.EMPRESA
					   AND SG.SUBGRUPO = P.SUBGRUPO
					   AND SG.GRUPO = P.GRUPO
					   AND SG.EMPRESA = P.EMPRESA";
	
			$stmt = Conexao::getInstanceAPPS()->prepare($sql);
			$stmt->bindValue(1, $p->getCodigo(), PDO::PARAM_INT);
			$stmt->bindValue(2, $e->getCodigo(), PDO::PARAM_INT);
	
			$stmt->execute();
	
			$ret = array();
	
			$ret['data'] = $stmt->fetch();
			$ret['total'] = $stmt->rowCount();
	
			return $ret;
	
		} catch (Exception $e) {
			echo "Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
			exit;
		}
	}
	
}