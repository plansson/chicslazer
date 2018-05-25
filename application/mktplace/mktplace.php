<?php 

class mktplace{
	
	/* public static $instance;
	
	function getInstance(){
		if(!isset(self::$instance)){
			self::$instance = new self();
		}
		
		return self::$instance;
	} */
	
	public function getSF() {
		require_once 'mktplace/sf/sf.php';
		return new sf();
	}
	
	public function getNS() {
		require_once 'mktplace/ns/ns.php';
		return new ns();
	}
	
	public function getTC() {
		require_once '../application/mktplace/tc/tc.php';
		return new tc();
	}
	
	public function getMAG() {
		require_once 'mktplace/magento/magento.php';
		return new magento();
	}
	
}