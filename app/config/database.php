<?php
/**
 * 
 * 
 */
return array(
	
	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	*/
	'connections' => array(
		'master' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'database',
			'username'  => 'username',
			'password'  => 'password',
			'charset'   => 'utf8',
			'collation' => 'utf8_general_ci',
			'prefix'    => '',
		),

		'slave' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'database',
			'username'  => 'username',
			'password'  => 'password',
			'charset'   => 'utf8',
			'collation' => 'utf8_general_ci',
			'prefix'    => '',
		),
	)
);