<?php

class Service{

	private $Services;

	public function __construct( $Services ){
		$this->Services = $Services;

		// On declare tout les services
		foreach ($this->Services as $Service) {
			
		}
	}

	public function get($name){

		if( issset($this->$name) ){
			return $this->$name;
		}
	}

	private function start($name){
		
	}
}