<?php 

abstract class Controller{
	
	public	$registry,
			$smarty,
			$session,
			$data,
			$input,
			$lang,
			$manager;
			
	protected	$db;
    
    public $app;

    public function  __construct($registry) {
		global $db, $lang, $smarty, $Session, $config;

		$this->db 			= $db;
		$this->smarty 		= $registry->smarty;
		$this->tpl 			= $registry->smarty;
		$this->HTTPRequest 	= $registry->HTTPRequest;
		$this->Helper    	= new Helper($config);
		$this->Http 		= new Http();
		$this->cache 		= $registry->cache;

		
		$this->registry = $registry;
		$this->lang = $lang;        
        $this->app = $this->registry;
		$this->manager = new stdClass;
    }
	
    public function updateSessionData(){
    	$_SESSION = $this->_session;
    }
	
	public function getToken(){
		return md5(uniqid(rand(), true));
	}
	
	public function getTokenForm(){
		$token = $this->getToken();
		$_SESSION['token_form'] = $token;
		$this->smarty->assign('token_form', $token);
	}
	
	public function _post($str){ return $this->Http->post(); }		
	
	public function _get($str){ return $this->Http->get(); }

	
	public function load_lang($module){
		global $lang;
		$this->lang = $lang;
		if( is_file(ROOT_PATH . 'modules' . DS . $module . DS . 'lang' . DS . 'fr.php') ){
			require ROOT_PATH . 'modules' . DS . $module . DS . 'lang' . DS . 'fr.php';
			$this->lang = array_merge($this->lang, $lang);
			$this->smarty->assign('lang', $this->lang);
		}
	}
	
	public function load_model($model, $type = null){
        
       switch ($type){
            case 'admin':
                require_once ADM_MODEL_PATH . $model .'.php';
                break;
            
            case 'base_app':
                require_once BASE_APP_PATH . 'model' . DS . 'Base' . $model .'.php';
                break;
                
            default:
                if( is_file(ROOT_PATH . 'app' . DS . 'model' . DS . $model .'Model.php') )
				    require_once ROOT_PATH . 'app' . DS . 'model' . DS . $model .'Model.php';
                if( is_file(ROOT_PATH . 'app' . DS . 'model' . DS . $model .'.php') )
				    require_once ROOT_PATH . 'app' . DS . 'model' . DS . $model .'.php';
                elseif( is_file(ROOT_PATH . 'model' . DS . $model .'.php') )
                    require_once ROOT_PATH . 'model' . DS . $model .'.php';
                elseif( is_file( MODEL_PATH . $model .'.php') )
				    require_once MODEL_PATH . $model .'.php';
				elseif( is_file(ADM_MODEL_PATH . $model .'.php') )
					require_once ADM_MODEL_PATH . $model .'.php';
       }    
	}
	
	public function load_controller($controller, $type = null){

		# Code pour comatibilite
		$controller = str_replace('Controller', '', $controller);
	   	
        switch ($type){
            
            case 'admin':
                require_once ROOT_PATH . 'adm' . DS . 'app' . DS . 'controller' . DS . $controller .'.php';
                break;
                
            case 'base_app':
                require_once BASE_APP_PATH . 'controller' . DS . 'Base' . $controller . 'Controller.php';
                
            default:
				if( is_file(APP_PATH . 'controller' . DS . $controller .'Controller.php') ):
					require_once APP_PATH . 'controller' . DS . $controller .'Controller.php';
				elseif( is_file(APP_PATH . 'controller' . DS . $controller .'.php') ):
					require_once APP_PATH . 'controller' . DS . $controller .'.php';
				elseif( is_file(ROOT_PATH . 'adm' . DS . 'app' . DS . 'controller' . DS . $controller .'Controller.php' ) ):
					require_once ROOT_PATH . 'adm' . DS . 'app' . DS . 'controller' . DS . $controller .'Controller.php';
				elseif( is_file(ROOT_PATH . 'adm' . DS . 'app' . DS . 'controller' . DS . $controller .'.php' ) ):
					require_once ROOT_PATH . 'adm' . DS . 'app' . DS . 'controller' . DS . $controller .'.php';
				endif;
        }

        # On renomme correctement le controller pour l appel
       	$controller  = $controller . 'Controller';

		$i = new $controller($this->registry);
		$this->$controller = $i;
		return $i;
	}
		
	
	public function load_manager($manager, $type = null){
	   
       switch($type){
            case 'admin':
                require_once ADM_MODEL_PATH . $manager .'Manager.php';
                $m = $manager.'Manager';
                break;
                
            case 'base_app':
                require_once BASE_APP_PATH . 'manager' . DS . 'Base' . $manager .'Manager.php';
                $m = 'Base' . $manager.'Manager';
                break;
                
            default:
				if( is_file(ROOT_PATH . 'app' . DS . 'model' . DS . $manager .'Manager.php') )
					require_once ROOT_PATH . 'app' . DS . 'model' . DS . $manager .'Manager.php';
				elseif( is_file(ADM_MODEL_PATH . $manager .'Manager.php') )
				
					require_once ADM_MODEL_PATH . $manager .'Manager.php';
                $m = $manager.'Manager';
                break;
       }

		$this->manager->$manager = new $m();
	}
	
	public function sendHttpRequest($host, $controller, $action, array $param = null, $chemin = ''){
		$this->Http->sendHttpRequest($host, $controller,$action, $param, $chemin);
	}
	
	public function redirect($url, $tps = 0, $message = ''){
		return $this->Helper->redirect($url, $tps, $message);		
	}
	
	protected function getFormValidatorJs(){
		$this->registry->addJS('jquery.validationEngine.js');
		$this->registry->addJS('jquery.validationEngine-fr.js');
		$this->registry->addCSS('formValidator/template.css');
		$this->registry->addCSS('formValidator/validationEngine.jquery.css');
		$this->registry->addJS('validation/jquery.validate.js');
	}
    
    protected function getCkEditorJs(){
        $this->registry->addJS('ckeditor/ckeditor.js');
    }
}