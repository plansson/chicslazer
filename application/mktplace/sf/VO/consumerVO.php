<?php

class consumerVo {
	
	public $consumerType;
	public $name;
	public $email;
	public $phoneNumber;
	public $mobilePhoneNumber;
	public $cpfCnpj;
	public $address;
	
	public function getConsumerType() {
		return $this->consumerType;
	}
	public function setConsumerType($consumerType) {
		$this->consumerType = $consumerType;
		return $this;
	}
	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
		return $this;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}
	public function getPhoneNumber() {
		return $this->phoneNumber;
	}
	public function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $phoneNumber;
		return $this;
	}
	public function getMobilePhoneNumber() {
		return $this->mobilePhoneNumber;
	}
	public function setMobilePhoneNumber($mobilePhoneNumber) {
		$this->mobilePhoneNumber = $mobilePhoneNumber;
		return $this;
	}
	public function getCpfCnpj() {
		return $this->cpfCnpj;
	}
	public function setCpfCnpj($cpfCnpj) {
		$this->cpfCnpj = $cpfCnpj;
		return $this;
	}
	public function getAddress() {
		return $this->address;
	}
	public function setAddress($address) {
		$this->address = $address;
		return $this;
	}
	
	
	
}