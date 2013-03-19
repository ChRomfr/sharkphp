<?php

class Baseconfig extends Record{
	
	const Table = 'config';

	public $cle;

	public $valeur;

	/**
	 * @NoDb: {"nodb":1}
	 */
	public $config = array();

	/**
	 * @NoDb: {"nodb":1}
	 */
	public $cache;

	/**
	 * @NoDb: {"nodb":1}
	 */
	public $config_file;

	/**
	 * @NoDb: {"nodb":1}
	 */
	public $db;


	public function __construct($config_file=null, MyCache $cache, $db){
		$this->cache = $cache;
		$this->config_file = $config_file;
		$this->db = $db;
		$this->merge();
	}

	/**
	 * Methode magic pour aller voir dans le tableau $config
	 * @param
	 * @return
	 */
	public function __get($name){
		if( isset($this->config[$name]) ):
			return $this->config[$name];
		endif;
	}

	public function get($cle = null){

		if( !$Datas = $this->cache->get('config') ):
			// Recuperation de la config dans la base
			$Datas = $this->db->get(PREFIX . 'config');

			// Sauvegarde en cache
			$this->cache->save(serialize($Datas));
		else:
			$Datas = unserialize($Datas);
		endif; 			

		foreach( $Datas as $Row ):
			$this->config[$Row['cle']] = $Row['valeur'];
		endforeach;
	}

	public function merge(){
		$this->config = array_merge($this->config, $this->config_file);
	}

}