<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
//$active_group = 'produccion';
$query_builder = TRUE;



$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',	
	'password' => '13081',
	'database' => 'zenteno',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => false,
	'db_debug' => TRUE,
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

/*
$db['produccion']['hostname'] = 'database.sanjudas.cl';
$db['produccion']['username'] = judastadeo';
$db['produccion']['password'] = 'BasiLIcaCM@';
$db['produccion']['database'] = 'zenteno';
$db['produccion']['dbdriver'] = 'mysql';
$db['produccion']['dbprefix'] = '';
$db['produccion']['pconnect'] = FALSE;
$db['produccion']['db_debug'] = (ENVIRONMENT !== 'production');
$db['produccion']['cache_on'] = FALSE;
$db['produccion']['cachedir'] = '';
$db['produccion']['char_set'] = 'utf8';
$db['produccion']['dbcollat'] = 'utf8_general_ci';
$db['produccion']['swap_pre'] = '';
$db['produccion']['autoinit'] = TRUE;
$db['produccion']['stricton'] = FALSE;
*/

/*
$db['produccion']['hostname'] = 'http://localhost/sanjudas.cl';
$db['produccion']['username'] = root';
$db['produccion']['password'] = '';
$db['produccion']['database'] = 'zenteno';
$db['produccion']['dbdriver'] = 'mysql';
$db['produccion']['dbprefix'] = '';
$db['produccion']['pconnect'] = FALSE;
$db['produccion']['db_debug'] = (ENVIRONMENT !== 'production');
$db['produccion']['cache_on'] = FALSE;
$db['produccion']['cachedir'] = '';
$db['produccion']['char_set'] = 'utf8';
$db['produccion']['dbcollat'] = 'utf8_general_ci';
$db['produccion']['swap_pre'] = '';
$db['produccion']['autoinit'] = TRUE;
$db['produccion']['stricton'] = FALSE;
*/