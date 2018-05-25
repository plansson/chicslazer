<?php

class meliNS{

    const VERSION  = "1.0.0";
    
    protected static $API 		= "https://api.tiendanube.com/v1/426352";
    
    protected $access_token		= "e48731748f9c427c633f0f8014d07f44a939f794";
    
	public static $CURL_OPTS = array(
        CURLOPT_USERAGENT => "NS-PHP-SDK-1.0.0", 
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_CONNECTTIMEOUT => 10, 
        CURLOPT_RETURNTRANSFER => 1, 
        CURLOPT_TIMEOUT => 60
    );
	
	function get($path, $params = null) {
		
		$opts = array(
				CURLOPT_HTTPHEADER => array('authentication: bearer '.$this->access_token
    					                  , 'content-type: application/json'
    									  , 'user-agent: PLANSSON_APP (yclpjr@gmail.com)')
		);
		
        $exec = $this->execute($path, $opts, $params);

        return $exec;
    }
    
    function head($path, $params = null) {
    
    	$opts = array(
    			CURLOPT_HTTPHEADER => array('authentication: bearer '.$this->access_token
    					, 'content-type: application/json'
    					, 'user-agent: PLANSSON_APP (yclpjr@gmail.com)'),
    			CURLINFO_HEADER_OUT => true,
    			CURLOPT_HEADER => true,
    			CURLOPT_NOBODY => true
    	);
    
    	$exec = $this->execute($path, $opts, $params);
    
    	return $exec;
    }
	
	public function put($path, $body = null, $params) {
        
		$body = json_encode($body);
        
        $opts = array(
            CURLOPT_HTTPHEADER => array('authentication: bearer '.$this->access_token
    					                  , 'content-type: application/json'
    									  , 'user-agent: PLANSSON_APP (yclpjr@gmail.com)'),
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => $body
        );
        
        $exec = $this->execute($path, $opts, $params);

        return $exec;
    }
    
    public function post($path, $body = null, $params) {
    	$body = json_encode($body);
    	
    	$opts = array(
    			CURLOPT_HTTPHEADER => array('authentication: bearer '.$this->access_token
    					                  , 'content-type: application/json'
    									  , 'user-agent: PLANSSON_APP (yclpjr@gmail.com)'),
    			CURLOPT_CUSTOMREQUEST => "POST",
    			CURLOPT_POSTFIELDS => $body
    	);
    
    	$exec = $this->execute($path, $opts, $params);
    
    	return $exec;
    }
    
    public function delete($path, $params = null) {
    	$opts = array(
    			CURLOPT_HTTPHEADER => array('authentication: bearer '.$this->access_token
					    				  , 'content-type: application/json'
					    				  , 'user-agent: PLANSSON_APP (yclpjr@gmail.com)'),
    			CURLOPT_CUSTOMREQUEST => "DELETE"
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
        
        $response = curl_exec($ch);
        
        //var_dump($response);
        
        $return["body"] = json_decode($response);
        $return["httpCode"] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $return["info"] = curl_getinfo($ch);
        //$header_size = $return["info"]['header_size'];
        //$header = substr($response, 0, $header_size);
        //$body = substr($response, $header_size);
        //$return["header"] = $header; //explode(":", $header);
                
        curl_close($ch);
        
        if (isset($return["info"]["request_header"])){
        	list($headers, $content) = explode("\r\n\r\n",$response,2);
        	$return["header"] = explode("\r\n",$headers);
        	$content;
        }
        
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
            $uri = self::$API.$path;
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