<?php

class Http {


	public function get($key){
    	return isset($_GET[$key]) ? $_GET[$key] : null;
    }

    public function post($key){
    	return isset($_POST[$key]) ? $_POST[$key] : null;
    }

	public function cookieData($key)
    {
        return isset($_COOKIE[$key]) ? $_COOKIE[$key] : null;
    }
    
    public function cookieExists($key)
    {
        return isset($_COOKIE[$key]);
    }
    
    public function getData($key){ return $this->get(); }
    
    public function getExists($key)
    {
        return isset($_GET[$key]);
    }
    
    public function postData($key){ return $this->post(); }
    
    public function postExists($key)
    {
        return isset($_POST[$key]);
    }
    
    public function requestURI()
    {
        return $_SERVER['REQUEST_URI'];
    } 

    public function sendHttpRequest($host, $controller, $action, array $param = null, $chemin = ''){
		/*$host =  $host
		//$v = '';
		
		//if( !is_null($chemin))
		//	$v .= $chemin;
		
		//$v.= 'index.php?c='. $controller . '&a='. $action;
		
		if( !is_null($param) && is_array($param) ){
			foreach($param as $k => $v){
				$v .= '&'.$k.'='.$v;
			}
		}	

        $fp = fsockopen($host, 80, $errno, $errstr, 10);
        stream_set_blocking ($fp, false);
        $header  = "GET $v HTTP /1.1\r\n";
		$header .= "Host: ". $host ."\r\n";
        $header .= "User-Agent: monScriptPHP\r\n";
        $header .= "Connection: Close\r\n\r\n";
        fputs($fp, $header);
        fclose($fp);*/
	}


}