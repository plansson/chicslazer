<?php

class pedidoVO {
	
	public $consumer;
	public $items;
	public $shippingMethod;
	public $customLabelUrl;
	public $trackingCode;
	
	public function getConsumer() {
		return $this->consumer;
	}
	public function setConsumer($consumer) {
		$this->consumer = $consumer;
		return $this;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItems($items) {
		$this->items = $items;
		return $this;
	}
	public function getShippingMethod() {
		return $this->shippingMethod;
	}
	public function setShippingMethod($shippingMethod) {
		$this->shippingMethod = $shippingMethod;
		return $this;
	}
	public function getCustomLabelUrl() {
		return $this->customLabelUrl;
	}
	public function setCustomLabelUrl($customLabelUrl) {
		$this->customLabelUrl = $customLabelUrl;
		return $this;
	}
	public function getTrackingCode() {
		return $this->trackingCode;
	}
	public function setTrackingCode($trackingCode) {
		$this->trackingCode = $trackingCode;
		return $this;
	}
	
	
	
}