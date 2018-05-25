<?php

require_once '../application/mktplace/conexao.php';
require_once '../application/mktplace/apps/VO/empresaVO.php';

class empresaDAO{
	
	public static $instance;
	
	public static function getInstance() {
	
		if (!isset(self::$instance))
			self::$instance = new empresaDAO();
	
			return self::$instance;
	
	}
	
	public function selectEmpresas() {
		try {
			$sql = "SELECT * FROM TGEREMPRESA";
	
			$stmt = Conexao::getInstanceAPPS()->prepare($sql);
	
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
	
	public function selectEmpresa(empresaVO $e) {
		try {
			$sql = "SELECT * FROM TGEREMPRESA E WHERE E.CODIGO = ?";
	
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
	
	
}