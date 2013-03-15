<?php

class Helper{

	public static $config = null;

	public static $string_url = null;

	public function __construct($config){
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

	public function formOpen($form_id = null, $form_action = '#', $form_class= null, $form_files = false, $form_method = "post"){
		$Code = '<form ';

		if( !is_null($form_id) ):
			$Code .= ' id="'. $form_id .'" ';
		endif;

		$Code .= ' action="'. $form_action .'" ';

		if( !is_null($form_class) ):
			$Code .= ' class="'. $form_class .'" ';
		endif;

		$Code .= ' method="'. $form_method .'" ';

		$Code .= ' >';

		return $Code;
	}

	public function formClose(){
		return '</form>';
	}

	public function formSelect($param){
		$Code = '<div class="control-group"><label class="control-label" for="'. $param['id'] .'">'. $param['label'] . ': </label><div class="controls"><select id="'. $param['id'] . '" name="'. $param['name'] .'"';

		if( isset($param['required']) ):
			$Code .= ' required class="validate[required]" ';
		endif;

		$Code .= '>';

		if( $param['lists'] == 'yn'):

			$Code .= '<option value="0"';
			if( isset($Param['value']) && $param['value'] == 0):
				$Code .= ' selected="selected" ';
			endif;
			$Code .= ' >Non</option>';

			$Code .= '<option value="1"';
			if( isset($Param['value']) && $param['value'] == 1):
				$Code .= ' selected="selected" ';
			endif;
			$Code .= ' >Oui</option>';
		endif;

		$Code .= '</select></div></div>';

		return $Code;

	}

}