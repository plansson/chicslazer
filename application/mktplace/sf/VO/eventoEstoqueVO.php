<?php

class eventoEstoqueVO {
	
	public $type;
	public $clientId;
	public $sku;
	public $quantity;
	
	public function getType() {
		return $this->type;
	}
	public function setType($type) {
		$this->type = $type;
		return $this;
	}
	public function getClientId() {
		return $this->clientId;
	}
	public function setClientId($clientId) {
		$this->clientId = $clientId;
		return $this;
	}
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
	
}