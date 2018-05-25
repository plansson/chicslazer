<?php

class produtoVO {
	
	private $codigo;
	private $ean;
	private $name;
	private $description_small;
	private $description;
	private $stock;
	private $price;
	private $cost_price;
	private $marca;
	private $categoria;
	private $subcategoria;
	
	public function getCodigo() {
		return $this->codigo;
	}
	public function setCodigo($codigo) {
		$this->codigo = $codigo;
		return $this;
	}
	public function getEan() {
		return $this->ean;
	}
	public function setEan($ean) {
		$this->ean = $ean;
		return $this;
	}
	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
		return $this;
	}
	public function getDescriptionSmall() {
		return $this->description_small;
	}
	public function setDescriptionSmall($description_small) {
		$this->description_small = $description_small;
		return $this;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}
	public function getStock() {
		return $this->stock;
	}
	public function setStock($stock) {
		$this->stock = $stock;
		return $this;
	}
	public function getPrice() {
		return $this->price;
	}
	public function setPrice($price) {
		$this->price = $price;
		return $this;
	}
	public function getCostPrice() {
		return $this->cost_price;
	}
	public function setCostPrice($cost_price) {
		$this->cost_price = $cost_price;
		return $this;
	}
	public function getMarca() {
		return $this->marca;
	}
	public function setMarca($marca) {
		$this->marca = $marca;
		return $this;
	}
	public function getCategoria() {
		return $this->categoria;
	}
	public function setCategoria($categoria) {
		$this->categoria = $categoria;
		return $this;
	}
	public function getSubcategoria() {
		return $this->subcategoria;
	}
	public function setSubcategoria($subcategoria) {
		$this->subcategoria = $subcategoria;
		return $this;
	}
	
	
	
	
	
}