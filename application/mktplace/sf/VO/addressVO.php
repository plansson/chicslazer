<?php

class addressVO {
	
	public $postalCode;
	public $street;
	public $number;
	public $district;
	
	public function getPostalCode() {
		return $this->postalCode;
	}
	public function setPostalCode($postalCode) {
		$this->postalCode = $postalCode;
		return $this;
	}
	public function getStreet() {
		return $this->street;
	}
	public function setStreet($street) {
		$this->street = $street;
		return $this;
	}
	public function getNumber() {
		return $this->number;
	}
	public function setNumber($number) {
		$this->number = $number;
		return $this;
	}
	public function getDistrict() {
		return $this->district;
	}
	public function setDistrict($district) {
		$this->district = $district;
		return $this;
	}
	
	
	
}