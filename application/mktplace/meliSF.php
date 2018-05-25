<?php

class meliSF{

    const VERSION  = "1.0.0";
    
    protected static $BASE_URL 	= "https://app.squidfacil.com.br";
    protected static $API 		= "/api";
    protected static $OAUTH 	= "/oauth";
    
    //Identificador do cliente (encontrado no painel da loja)
    protected $client_id 		= "2a9c2827-cc08-42a3-ae4d-24c8c818220a";
    //Senha (encontrado no painel da loja)
    protected $client_secret 	= "kqDO/lImFipcgNLWNlPhtpI+ArrMTceh72Z2HhLq";
    
    protected $access_token		= "58057da8f24b129111b0d730df08887ec23efce3";
    
	public static $CURL_OPTS = array(
        CURLOPT_USERAGENT => "SF-PHP-SDK-1.0.0", 
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_CONNECTTIMEOUT => 10, 
        CURLOPT_RETURNTRANSFER => 1, 
        CURLOPT_TIMEOUT => 60
    );
	
	public function __construct(){
		
		$body = array(
				"grant_type" => "client_credentials",
				"client_id" => $this->client_id,
				"client_secret" => $this->client_secret,
		);
		
		$opts = array(
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => $body
		);
		
		$request = $this->execute(self::$OAUTH, $opts);
		
		if($request['httpCode'] == 200){
			
			$this->access_token = $request['body']->access_token;
			
		} else {
			
			var_dump($request);
			exit();
			
		}
	}
	
	function get($path, $params = null) {
		
		$opts = array(
				CURLOPT_HTTPHEADER => array('Authorization: Bearer '. $this->access_token)
		);
		
		$path = self::$API.$path;
		
        $exec = $this->execute($path, $opts, $params);

        return $exec;
    }
	
	public function put($path, $body = null, $params) {
        $body = json_encode($body);
        $opts = array(
            CURLOPT_HTTPHEADER => array('Authorization: Bearer '. $this->access_token),
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $body
        );
        
        $exec = $this->execute($path, $opts, $params);

        return $exec;
    }
    
    public function post($path, $body = null, $params) {
    	$body = json_encode($body);
    	
    	$opts = array(
    			CURLOPT_HTTPHEADER => array('Authorization: Bearer '.$this->access_token),
    			CURLOPT_CUSTOMREQUEST => "POST",
    			CURLOPT_POSTFIELDS => $body
    	);
    
    	$exec = $this->execute($path, $opts, $params);
    
    	return $exec;
    }
	
	public function execute($path, $opts = array(), $params = array()) {
        
		
		$uri = $this->make_path($path, $params);
		//echo $uri;
        $ch = curl_init($uri);
        curl_setopt_array($ch, self::$CURL_OPTS);

        if(!empty($opts))
            curl_setopt_array($ch, $opts);
		
        $return = array();
        $return["body"] = json_decode(curl_exec($ch));
        $return["httpCode"] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $return["info"] = curl_getinfo($ch);

        curl_close($ch);
        
        return $return;
    }

    /**
     * Check and construct an real URL to make request
     * 
     * @param string $path
     * @param array $params
     * @return string
     */
    public function make_path($path, $params = array()) {
        if (!preg_match("/^http/", $path)) {
            if (!preg_match("/^\//", $path)) {
                $path = '/'.$path;
            }
            $uri = self::$BASE_URL.$path;
        } else {
            $uri = $path;
        }

        if(!empty($params)) {
            $paramsJoined = array();

            foreach($params as $param => $value) {
               $paramsJoined[] = "$param=$value";
            }
            $params = '?'.implode('&', $paramsJoined);
            $uri = $uri.$params;
        }

        return $uri;
    }

}

?>