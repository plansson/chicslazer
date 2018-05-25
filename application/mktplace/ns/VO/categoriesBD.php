<?php

class categoriesBD {
	
	public $created_at;
	public $description_en;
	public $description_es;
	public $description_pt;
	public $handle_en;
	public $handle_es;
	public $handle_pt;
	public $id;
	public $name_en;
	public $name_es;
	public $name_pt;
	public $parent;
	public $updated_at;
	
	public function getCreatedAt() {
		return $this->created_at;
	}
	public function setCreatedAt($created_at) {
		$this->created_at = $created_at;
		return $this;
	}
	public function getDescriptionEn() {
		return $this->description_en;
	}
	public function setDescriptionEn($description_en) {
		$this->description_en = $description_en;
		return $this;
	}
	public function getDescriptionEs() {
		return $this->description_es;
	}
	public function setDescriptionEs($description_es) {
		$this->description_es = $description_es;
		return $this;
	}
	public function getDescriptionPt() {
		return $this->description_pt;
	}
	public function setDescriptionPt($description_pt) {
		$this->description_pt = $description_pt;
		return $this;
	}
	public function getHandleEn() {
		return $this->handle_en;
	}
	public function setHandleEn($handle_en) {
		$this->handle_en = $handle_en;
		return $this;
	}
	public function getHandleEs() {
		return $this->handle_es;
	}
	public function setHandleEs($handle_es) {
		$this->handle_es = $handle_es;
		return $this;
	}
	public function getHandlePt() {
		return $this->handle_pt;
	}
	public function setHandlePt($handle_pt) {
		$this->handle_pt = $handle_pt;
		return $this;
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getNameEn() {
		return $this->name_en;
	}
	public function setNameEn($name_en) {
		$this->name_en = $name_en;
		return $this;
	}
	public function getNameEs() {
		return $this->name_es;
	}
	public function setNameEs($name_es) {
		$this->name_es = $name_es;
		return $this;
	}
	public function getNamePt() {
		return $this->name_pt;
	}
	public function setNamePt($name_pt) {
		$this->name_pt = $name_pt;
		return $this;
	}
	public function getParent() {
		return $this->parent;
	}
	public function setParent($parent) {
		$this->parent = $parent;
		return $this;
	}
	public function getUpdatedAt() {
		return $this->updated_at;
	}
	public function setUpdatedAt($updated_at) {
		$this->updated_at = $updated_at;
		return $this;
	}
		
	
	
	
}