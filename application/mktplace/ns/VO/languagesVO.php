<?php

class languagesVO{
	
	public $en;
	public $es;
	public $pt;
	
	public function getEn() {
		return $this->en;
	}
	public function setEn($en) {
		$this->en = $en;
		return $this;
	}
	public function getEs() {
		return $this->es;
	}
	public function setEs($es) {
		$this->es = $es;
		return $this;
	}
	public function getPt() {
		return $this->pt;
	}
	public function setPt($pt) {
		$this->pt = $pt;
		return $this;
	}
	
}