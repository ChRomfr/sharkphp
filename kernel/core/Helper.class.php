<?php

class Helper{

	public static $config = null;

	public static $string_url = null;

	protected $smarty;

	public function __construct($config){

		global $registry;

		$this->smarty = $registry->smarty;

		self::$config = $config;

		if( self::$config['rewrite_url'] == 1):
			self::$string_url = self::$config['url'] . self::$config['url_dir'];
		else:
			self::$string_url = self::$config['url'] . self::$config['url_dir'] . 'index.php/';
		endif;
	}

	/*
	*	Genere un lien
	*/
	public function getLink($str){
		return self::$string_url . $str;
	}

	/*
	*	Genere un lien pour l administration
	*/
	public function getLinkAdm($str){
		return self::$config['url'] . self::$config['url_dir'] . 'adm/index.php/' . $str;		
	}

	public function redirect($url, $tps = 0, $message = ''){

		$temps = $tps * 1000;

		if($message != ''):
			
			$r = explode('|',$message);
			$text = $r[0];

			if( isset($r[1]) ){
				$affichage = $r[1];
			}else{
				$affichage = 'success';
			}
			
			$this->smarty->assign('error_class', 'error_' . $affichage);
			$this->smarty->assign('error_image', 'comment_' . $affichage);
			$this->smarty->assign('message', $text);
			$this->smarty->assign('url', $url);
			$this->smarty->assign('temp', $temps);
			return $this->smarty->fetch(VIEW_PATH . 'redirect.tpl');
		else:

			echo "<script type=\"text/javascript\">\n"
			. "<!--\n"
			. "\n"
			. "function redirect() {\n"
			. "window.location='" . $url . "'\n"
			. "}\n"
			. "setTimeout('redirect()','" . $temps ."');\n"
			. "\n"
			. "// -->\n"
			. "</script>\n";
			exit;
		endif;
	}

	public function getFormValidatorJs(){
		registry::addJS('jquery.validationEngine.js');
		registry::addJS('jquery.validationEngine-fr.js');
		registry::addCSS('formValidator/template.css');
		registry::addCSS('formValidator/validationEngine.jquery.css');
		registry::addJS('validation/jquery.validate.js');
	}
    
    protected function getCkEditorJs(){
        registry::addJS('ckeditor/ckeditor.js');
    }

}