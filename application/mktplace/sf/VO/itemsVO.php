<?php

class itemsVO {
	
	public $sku;
	public $quantity;
	public $salePrice;
	
	public function getSku() {
		return $this->sku;
	}
	public function setSku($sku) {
		$this->sku = $sku;
		return $this;
	}
	public function getQuantity() {
		return $this->quantity;
	}
	public function setQuantity($quantity) {
		$this->quantity = $quantity;
		return $this;
	}
	public function getSalePrice() {
		return $this->salePrice;
	}
	public function setSalePrice($salePrice) {
		$this->salePrice = $salePrice;
		return $this;
	}
	
	
	
}