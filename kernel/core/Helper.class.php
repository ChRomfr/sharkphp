<?php

class Helper{

	private $registry;

	public static $config = null;

	public static $string_url = null;

	public function __construct($registry){
		$this->registry = $registry;
		self::$config = $this->registry->config;

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

}