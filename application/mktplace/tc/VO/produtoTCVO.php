<?php

class produtoTCVO {

	public $id;
	public $ean;
	public $name;
	public $description;
	public $description_small;
	public $price;
	public $cost_price;
	public $promotional_price;
	public $start_promotion;
	public $end_promotion;
	public $brand;
	public $model;
	public $weight;
	public $length;
	public $width;
	public $height;
	public $stock;
	public $category_id;
	public $available;
	public $reference;
	public $payment_option;
	public $related_categories;
	public $release_date;
	public $shortcut;
	public $virtual_product;
	public $picture_source_1;
	public $picture_source_2;
	public $picture_source_3;
	public $picture_source_4;
	public $picture_source_5;
	public $picture_source_6;
	
	public function getId() {
		return $this->id;
	}
	
	public function setId($id) {
		$this->id = $id;
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
	public function getDescription() {
		return $this->description;
	}
	public function setDescription($description) {
		$this->description = $description;
		return $this;
	}
	public function getDescriptionSmall() {
		return $this->description_small;
	}
	public function setDescriptionSmall($description_small) {
		$this->description_small = $description_small;
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
	public function getPromotionalPrice() {
		return $this->promotional_price;
	}
	public function setPromotionalPrice($promotional_price) {
		$this->promotional_price = $promotional_price;
		return $this;
	}
	public function getStartPromotion() {
		return $this->start_promotion;
	}
	public function setStartPromotion($start_promotion) {
		$this->start_promotion = $start_promotion;
		return $this;
	}
	public function getEndPromotion() {
		return $this->end_promotion;
	}
	public function setEndPromotion($end_promotion) {
		$this->end_promotion = $end_promotion;
		return $this;
	}
	public function getBrand() {
		return $this->brand;
	}
	public function setBrand($brand) {
		$this->brand = $brand;
		return $this;
	}
	public function getModel() {
		return $this->model;
	}
	public function setModel($model) {
		$this->model = $model;
		return $this;
	}
	public function getWeight() {
		return $this->weight;
	}
	public function setWeight($weight) {
		$this->weight = $weight;
		return $this;
	}
	public function getLength() {
		return $this->length;
	}
	public function setLength($length) {
		$this->length = $length;
		return $this;
	}
	public function getWidth() {
		return $this->width;
	}
	public function setWidth($width) {
		$this->width = $width;
		return $this;
	}
	public function getHeight() {
		return $this->height;
	}
	public function setHeight($height) {
		$this->height = $height;
		return $this;
	}
	public function getStock() {
		return $this->stock;
	}
	public function setStock($stock) {
		$this->stock = $stock;
		return $this;
	}
	public function getCategoryId() {
		return $this->category_id;
	}
	public function setCategoryId($category_id) {
		$this->category_id = $category_id;
		return $this;
	}
	public function getAvailable() {
		return $this->available;
	}
	public function setAvailable($available) {
		$this->available = $available;
		return $this;
	}
	public function getReference() {
		return $this->reference;
	}
	public function setReference($reference) {
		$this->reference = $reference;
		return $this;
	}
	public function getPaymentOption() {
		return $this->payment_option;
	}
	public function setPaymentOption($payment_option) {
		$this->payment_option = $payment_option;
		return $this;
	}
	public function getRelatedCategories() {
		return $this->related_categories;
	}
	public function setRelatedCategories($related_categories) {
		$this->related_categories = $related_categories;
		return $this;
	}
	public function getReleaseDate() {
		return $this->release_date;
	}
	public function setReleaseDate($release_date) {
		$this->release_date = $release_date;
		return $this;
	}
	public function getShortcut() {
		return $this->shortcut;
	}
	public function setShortcut($shortcut) {
		$this->shortcut = $shortcut;
		return $this;
	}
	public function getVirtualProduct() {
		return $this->virtual_product;
	}
	public function setVirtualProduct($virtual_product) {
		$this->virtual_product = $virtual_product;
		return $this;
	}
	public function getPictureSource1() {
		return $this->picture_source_1;
	}
	public function setPictureSource1($picture_source_1) {
		$this->picture_source_1 = $picture_source_1;
		return $this;
	}
	public function getPictureSource2() {
		return $this->picture_source_2;
	}
	public function setPictureSource2($picture_source_2) {
		$this->picture_source_2 = $picture_source_2;
		return $this;
	}
	public function getPictureSource3() {
		return $this->picture_source_3;
	}
	public function setPictureSource3($picture_source_3) {
		$this->picture_source_3 = $picture_source_3;
		return $this;
	}
	public function getPictureSource4() {
		return $this->picture_source_4;
	}
	public function setPictureSource4($picture_source_4) {
		$this->picture_source_4 = $picture_source_4;
		return $this;
	}
	public function getPictureSource5() {
		return $this->picture_source_5;
	}
	public function setPictureSource5($picture_source_5) {
		$this->picture_source_5 = $picture_source_5;
		return $this;
	}
	public function getPictureSource6() {
		return $this->picture_source_6;
	}
	public function setPictureSource6($picture_source_6) {
		$this->picture_source_6 = $picture_source_6;
		return $this;
	}
	
	
	
}