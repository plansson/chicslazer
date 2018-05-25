<?php
class Conexao {
	
	public static $instanceTC;
    public static $instanceAPPS;

	
	public static function getInstanceTC() { 
		
		if (!isset(self::$instanceNS)) { 
			
			self::$instanceTC= new PDO('mysql:host=plansson.com.br;dbname=plans128_nuvemshop;charset=utf8', 'SYSDBA', 'masterkey');
			
			self::$instanceTC->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			
			self::$instanceTC->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		
		}
			
			return self::$instanceTC; 
	
	}
	
	public static function getInstanceAPPS() {
	
		if (!isset(self::$instanceAPPS)) {
				
			self::$instanceAPPS= new PDO("firebird:host=localhost;dbname=C:\Program Files\Firebird\Firebird_2_5\DADOS\ECODB.FDB", 'SYSDBA', 'masterkey');
				
			self::$instanceAPPS->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
			self::$instanceAPPS->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	
		}
			
		return self::$instanceAPPS;
	
	}
	
}