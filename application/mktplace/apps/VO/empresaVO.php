<?php

class empresaVO {
	
	public $codigo;
	public $nomefantasia;
	
	public function getCodigo() {
		return $this->codigo;
	}
	public function setCodigo($codigo) {
		$this->codigo = $codigo;
		return $this;
	}
	public function getNomefantasia() {
		return $this->nomefantasia;
	}
	public function setNomefantasia($nomefantasia) {
		$this->nomefantasia = $nomefantasia;
		return $this;
	}
	
	
	
	
	
}