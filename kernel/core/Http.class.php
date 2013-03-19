<?php

class Http {

    private $app;

    public function __construct($app){
        $this->app = $app;
    }
    
	public function get(){
		return isset($_GET[$key]) ? $_GET[$key] : null;
	}

	public function post(){
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

    public function error404(){
        //http_response_code(404);;
        header("HTTP/1.0 404 Not Found");
        //$this->app->smarty->assign('content', $this->app->smarty->fetch(VIEW_PATH . 'error' . DS . '404.tpl'));
        //$this->app->smarty->display( ROOT_PATH . 'themes' . DS . $this->app->config['theme'] . DS . 'layout.tpl' );
        return $this->app->smarty->fetch(VIEW_PATH . 'error' . DS . '404.tpl');
        exit;
    }

}