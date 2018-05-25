<?php

require_once '../application/mktplace/conexao.php';

class productsDAO{
	
	public static $instance;
	
	public static function getInstance() {
	
		if (!isset(self::$instance))
			self::$instance = new productsDAO();
	
			return self::$instance;
	
	}
	
	public function selectProductSKU(productsBD $product) {
		try {
			$sql = "select * from products";
			$sql .= " where sku_sf = ?";
	
			$stmt = Conexao::getInstanceNS()->prepare($sql);
	
			$stmt->bindValue(1, $product->getSkuSF(), PDO::PARAM_STR);
	
			$stmt->execute();
				
			$ret = array();
				
			$ret['body'] = $stmt->fetchAll();
			$ret['total'] = $stmt->rowCount();
				
			return $ret;
	
		} catch (Exception $e) {
			echo "Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
			var_dump($stmt);
			exit;
		}
	}
	
	public function insertProductID(productsBD $product) {
		try {
			$sql = "insert into products (id_ns, sku_sf)";
			$sql .= " values (?, ?)";
	
			$stmt = Conexao::getInstanceNS()->prepare($sql);
	
			$stmt->bindValue(1, $product->getIdNS(), PDO::PARAM_INT);
			$stmt->bindValue(2, $product->getSkuSF(), PDO::PARAM_STR);
	
			$stmt->execute();
	
			return Conexao::getInstanceNS()->lastInsertId();
	
		} catch (Exception $e) {
			echo $product->getSkuSF() . "</br>";
			echo "Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
			var_dump($stmt);
			exit;
		}
	}
	
	public function updateProductID(productsBD $product) {
		try {
			$sql = "UPDATE `products` set updated_at = CURRENT_TIMESTAMP 
					where id_ns = ? and sku_sf = ?";
	
			$stmt = Conexao::getInstanceNS()->prepare($sql);
	
			$stmt->bindValue(1, $product->getIdNS(), PDO::PARAM_INT);
			$stmt->bindValue(2, $product->getSkuSF(), PDO::PARAM_STR);
	
			$stmt->execute();
	
			return $stmt->rowCount();
	
		} catch (Exception $e) {
			echo $product->getSkuSF() . "</br>";
			echo "Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
			var_dump($stmt);
			exit;
		}
	}
	
	
}