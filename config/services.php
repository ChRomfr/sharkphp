<?php

$Services = array(
	'db'			=> 	array('name' => 'db', 'callfunction' => 'sqlconnexion'),
	'cache'			=>	array('name' => 'cache', 'class' => 'MyCache'),
	'smarty'		=> 	array('name' => 'smarty', 'class' => 'MySmarty', 'param' => array('db', 'cache')),	
	'Http'			=>	array('name' =>	'Http'),
	'Helper'		=>	array('name' =>	'Helper'),
	'Router'		=>	array('name' => 'Router'),
	'Config'		=>	,
	'Form'			=>	,
	'Session'		=>	,
);