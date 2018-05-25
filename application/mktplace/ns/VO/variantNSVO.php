<?php

class variantNSVO {
	
	public $id;
	public $product_id;
	public $stock;
	//public $stock_management;
	public $price;
		
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	
	public function getProductId() {
		return $this->product_id;
	}
	public function setProductId($productId) {
		$this->product_id = $productId;
		return $this;
	}
	
	public function getStock() {
		return $this->stock;
	}
	public function setStock($stock) {
		$this->stock = $stock;
		return $this;
	}
		
	/* public function getStockManagement() {
		return $this->stock_management;
	}
	public function setStockManagement($stock_management) {
		$this->stock_management = $stock_management;
		return $this;
	} */
	
	public function getPrice() {
		return $this->price;
	}
	public function setPrice($price) {
		$this->price = $price;
		return $this;
	}	
	
}