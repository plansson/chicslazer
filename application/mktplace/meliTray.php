<?php

if(!isset($_SESSION)){

	session_start();

}



class meliTray {

	

	/**

	 * @version 1.0.0

	 */

    const VERSION  = "1.0.0";



    /**

     * @var $API_ROOT_URL is a main URL to access the Meli API's.

     * @var $AUTH_URL is a url to redirect the user for login.

     */

    /* protected static $API_ROOT_URL = "http://trayparceiros.commercesuite.com.br/web_api";

    protected static $AUTH_URL = "http://trayparceiros.commercesuite.com.br/auth.php";

    protected static $OAUTH_URL = "/auth"; */

    

    /* protected static $API_ROOT_URL = "http://www.fortunadetectores.com.br/web_api";

    protected static $AUTH_URL = "http://www.fortunadetectores.com.br/auth.php";

    protected static $OAUTH_URL = "/auth";

    

    private $code = '74ccdc38d2ca297dae95bc9ca30a2f9cef8e27e138b4270dfe792211e4b3ea46';

    private $consumer_secret = '5394c16b57b05f8a2c779d06ce456dc16afb9c06d63a12275a6ca3d8b8c98681';

    private $consumer_key = '4797da6bbd2077990a94863997d9eb0273fd0e1b9107a490f0c8f5c993b392ba'; */

    

    protected static $API_ROOT_URL = "https://www.pescalazer.com.br/web_api";

    protected static $AUTH_URL = "https://www.pescalazer.com.br/auth.php";

    protected static $OAUTH_URL = "/auth";

    

    private $code = '0f85ce06c6ee0d131ca789ce7298510b5acea62fdb675d98bdd8e84eca14dee4';

    private $consumer_secret = '227f4f8284bc2ff91d4c6e34af881e2edcd1f0f7a4d91e3f1685c5bb15f6f1c5';

    private $consumer_key = '030a3ffc5d7008080862b6613d37d85d89892ae86292c26a209fe55d3d264500';

    

	public static $CURL_OPTS = array(

        CURLOPT_USERAGENT => "MELI-PHP-SDK-1.0.0", 

        CURLOPT_SSL_VERIFYPEER => false,

        CURLOPT_CONNECTTIMEOUT => 10, 

        CURLOPT_RETURNTRANSFER => 1, 

        CURLOPT_TIMEOUT => 60

    );



	public function getAuthorizationCode() {

		

		if (!isset($_SESSION['accessToken'])) {

			

			//echo "Sessão sem Token" . "</br>";

			

			$body = array('code' => $this->code,

					      'consumer_secret' => $this->consumer_secret,

					      'consumer_key' => $this->consumer_key,

			);

	

			$opts = array(

					CURLOPT_POST => true,

					CURLOPT_POSTFIELDS => $body

			);

	

			$request = self::execute(self::$OAUTH_URL, $opts);

	

			if($request["httpCode"] == 200 || $request["httpCode"] == 201) {

				

				//echo "Solicitação de Token" . "</br>";

				

				//var_dump($request);

				

				$_SESSION['accessToken'] = $request["body"]->access_token;

				$_SESSION['refreshToken'] = $request["body"]->refresh_token;

				$_SESSION['expiresIn'] = time() + $request["body"]->date_expiration_access_token;

				$_SESSION['expiresRefreshIn'] = $request["body"]->date_expiration_refresh_token;

				$_SESSION['dateActivated'] = $request["body"]->date_activated;

				$_SESSION['storeId'] = $request["body"]->store_id;

				

				

			} else {

				echo "Solicitação de Token Mal Sucedida" . "</br>";

				var_dump($request);

			}

	

		} else {

			

			if(time() > $_SESSION['expiresIn']){

				

				//echo "Token Expirado Refresh" . "</br>";

				 

				$param['refresh_token'] = $_SESSION['refreshToken'];

				 

				$request = self::execute(self::$OAUTH_URL, NULL, $param);

				 

				if($request["httpCode"] == 200 || $request["httpCode"] == 201) {

					$_SESSION['accessToken'] = $request["body"]->access_token;

					$_SESSION['refreshToken'] = $request["body"]->refresh_token;

					$_SESSION['expiresIn'] = time() + $request["body"]->date_expiration_access_token;

					$_SESSION['expiresRefreshIn'] = $request["body"]->date_expiration_refresh_token;

					$_SESSION['dateActivated'] = $request["body"]->date_activated;

					$_SESSION['storeId'] = $request["body"]->store_id;

				}

				 

			}

	

		}

//var_dump($_SESSION);

		return $_SESSION;

	}

	

	public function authorize($code, $redirect_uri) {

	

		if($redirect_uri)

			$this->redirect_uri = $redirect_uri;

	

			$body = array(

					"grant_type" => "client_credentials", //authorization_code",

					"client_id" => $this->client_id,

					"client_secret" => $this->client_secret,

					//"code" => $code,

					//"redirect_uri" => $this->redirect_uri

			);

	

			$opts = array(

					CURLOPT_POST => true,

					CURLOPT_POSTFIELDS => $body

			);

	

			$request = $this->execute($this->getOAUTHUrl(), $opts);

	

			if($request["httpCode"] == 200) {

				$this->access_token = $request["body"]->access_token;

	

				if($request["body"]->refresh_token)

					$this->refresh_token = $request["body"]->refresh_token;

	

					return $request;

	

			} else {

				return $request;

			}

	}

	

	function get($path, $params = null) {

		

		$opts = array(

		

				CURLOPT_HTTPHEADER => array('Content-Type: application/json'),

		

		);

		

        $exec = $this->execute($path, $opts, $params);



        return $exec;

    }

	

	public function put($path, $body = null, $params) {

        $body = json_encode($body);

        $opts = array(

            CURLOPT_HTTPHEADER => array('Content-Type: application/json'),

            CURLOPT_CUSTOMREQUEST => "PUT",

            CURLOPT_POSTFIELDS => $body

        );

        

        $exec = $this->execute($path, $opts, $params);



        return $exec;

    }

    

    public function post($path, $body = null, $params) {

    	$body = json_encode($body);

    	$opts = array(

    			CURLOPT_HTTPHEADER => array('Content-Type: application/json'),

    			CURLOPT_CUSTOMREQUEST => "POST",

    			CURLOPT_POSTFIELDS => $body

    	);

    

    	$exec = $this->execute($path, $opts, $params);

    

    	return $exec;

    }

	

	public function execute($path, $opts = array(), $params = array()) {

        

		

		$uri = self::make_path($path, $params);

		//echo $uri;

        $ch = curl_init($uri);

        curl_setopt_array($ch, self::$CURL_OPTS);



        if(!empty($opts))

            curl_setopt_array($ch, $opts);



        $return["body"] = json_decode(curl_exec($ch));

        $return["httpCode"] = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        $return["info"] = curl_getinfo($ch);

        $return["erro"] = curl_error($ch);



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

            $uri = self::$API_ROOT_URL.$path;

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