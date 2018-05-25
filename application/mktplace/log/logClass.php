<?php
header("Content-type: text/html; charset=utf-8");

date_default_timezone_set('America/Bahia');

class Log {
	
	public static $handle;
	public static $dirName = '../logs/';
	public static $fileName;
	
	private static $instance;
	
	public static function getInstance(){
		if ( is_null( self::$instance ) ){
			self::$instance = new self();
		}
		return self::$instance;
	}
	
	public function escreve($msg){
		
		self::$handle = fopen(self::$dirName.self::$fileName, 'ab');
		
		$hoje = date("Ymd");
		
		$hora = date("H:i:s T");
		
		$msg = "[". $hoje . " " . $hora. "] INFO:" . $msg . "\r\n";
		
		fwrite(self::$handle, $msg);
		
		echo utf8_encode($msg);
	
	}
	public static function getFileName() {
		return self::$fileName;
	}
	public static function setFileName($fileName) {
		self::$fileName = $fileName;
	}
	
	function __destruct() {
		fclose(self::$handle);
	}
}