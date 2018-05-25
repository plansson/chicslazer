<?php

class categoriesVO {
	
	public $name;
	public $parent;
	
	public function getName() {
		return $this->name;
	}
	public function setName($name) {
		$this->name = $name;
		return $this;
	}
	public function getParent() {
		return $this->parent;
	}
	public function setParent($parent) {
		$this->parent = $parent;
		return $this;
	}
	
	
	
}