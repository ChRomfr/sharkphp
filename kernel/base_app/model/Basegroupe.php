<?php

class Basegroupe extends Record{

	const Table = 'groupe';

	public $id;

	public $name;

	public $description;

	public $image;

	public $principal;

	public $system;

	public $ouvert;

	public $visible;

}