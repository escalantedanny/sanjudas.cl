<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['main'] = 'Home_controller/index';
$route['comentary'] = 'Home_controller/add_comentary_whit_db';
$route['login'] = 'Home_controller/login';
$route['nosotros'] = 'Home_controller/quienes_somos';
$route['sanjudas'] = 'Home_controller/show_sanjudas';
$route['peticiones'] = 'Home_controller/show_peticiones';
$route['himno'] = 'Home_controller/show_himno';

$route['conectar'] = 'Home_controller/conectar';