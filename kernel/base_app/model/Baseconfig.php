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
	}

	public function get($cle = null){
		$Datas = $this->db->get(PREFIX . 'config');

		foreach( $Datas as $Row ):
			$this->config[$Row['cle']] = $Row['valeur'];
		endforeach;
	}

	public function merge(){
		$this->config = array_merge($this->config, $this->config_file);
	}

}