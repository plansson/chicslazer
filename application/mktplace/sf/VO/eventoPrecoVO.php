<?php

class eventoPrecoVO {
	
	public $type;
	public $clientId;
	public $sku;
	public $oldPrice;
	public $newPrice;
	public $oldSuggestedPrice;
	public $newSuggestedPrice;
	
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
	public function getOldPrice() {
		return $this->oldPrice;
	}
	public function setOldPrice($oldPrice) {
		$this->oldPrice = $oldPrice;
		return $this;
	}
	public function getNewPrice() {
		return $this->newPrice;
	}
	public function setNewPrice($newPrice) {
		$this->newPrice = $newPrice;
		return $this;
	}
	public function getOldSuggestedPrice() {
		return $this->oldSuggestedPrice;
	}
	public function setOldSuggestedPrice($oldSuggestedPrice) {
		$this->oldSuggestedPrice = $oldSuggestedPrice;
		return $this;
	}
	public function getNewSuggestedPrice() {
		return $this->newSuggestedPrice;
	}
	public function setNewSuggestedPrice($newSuggestedPrice) {
		$this->newSuggestedPrice = $newSuggestedPrice;
		return $this;
	}
	
}