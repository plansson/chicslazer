<?php

class eventoRemessaImdiataVO {
	
	public $type;
	public $clientId;
	public $sku;
	public $immediateShipment;
	
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
	public function getImmediateShipment() {
		return $this->immediateShipment;
	}
	public function setImmediateShipment($immediateShipment) {
		$this->immediateShipment = $immediateShipment;
		return $this;
	}
	
}