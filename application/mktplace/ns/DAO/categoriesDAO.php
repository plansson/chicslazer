<?php
require_once '../application/mktplace/conexao.php';

class categoriesDAO {
	
	public static $instance;
	
	public static function getInstance() { 
		
		if (!isset(self::$instance)) 
			self::$instance = new categoriesDAO();
		
		return self::$instance; 
	
	}
	
	public function selectCategoryName(categoriesBD $category) {
		try {
			$sql = "select * from categories";
			$sql .= " where name_pt = ?";
				
			$stmt = Conexao::getInstanceNS()->prepare($sql);
				
			$stmt->bindValue(1, $category->getNamePt(), PDO::PARAM_STR);				
	
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
	
	public function insertCategoryName(categoriesBD $category) {
		try {
			$sql = "insert into categories (id, name_pt, parent)";
			$sql .= " values (?, ?, ?)";
	
			$stmt = Conexao::getInstanceNS()->prepare($sql);
	
			$stmt->bindValue(1, $category->getId(), PDO::PARAM_INT);
			$stmt->bindValue(2, $category->getNamePt(), PDO::PARAM_STR);
			$stmt->bindValue(3, $category->getParent(), PDO::PARAM_INT);
	
			$stmt->execute();
				
			return Conexao::getInstanceNS()->lastInsertId();
	
		} catch (Exception $e) {
			echo $category->getNamePt() . "</br>";
			echo "Código: " . $e->getCode() . " Mensagem: " . $e->getMessage();
			var_dump($stmt);
			exit;
		}
	}
	
}