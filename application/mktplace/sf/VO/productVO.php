<?php

class productVO{
	
	public $sku;
	public $name;
	public $slug;
	
	public function getSku() {
		return $this->sku;
	}
	public function setSku($sku) {
		$this->sku = $sku;
		return $this;
	}
	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
		return $this;
	}
	public function getSlug() {
		return $this->slug;
	}
	public function setSlug($slug) {
		$this->slug = $slug;
		return $this;
	}
	
}