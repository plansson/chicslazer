<?php

class categoriaVO {
	
	public $parent_id;
	public $name;
	public $description;
	public $slug;
	
	public function getParentId() {
		return $this->parent_id;
	}
	public function setParentId($parent_id) {
		$this->parent_id = $parent_id;
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
	public function getSlug() {
		return $this->slug;
	}
	public function setSlug($slug) {
		$this->slug = $slug;
		return $this;
	}
	
}
	