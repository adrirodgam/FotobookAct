<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 /*

    get( 'ruta_web', Controlador::funcion                             )

 */
$routes->get('/', 'Home::index');

//Cuando entren a /saludar que imprima hola mundo
$routes->get('/saludar', 'Home::saludar');

$routes->get('/saludar/(:alpha)', 'Home::saludar2/$1');

$routes->get('/saludar/(:alpha)/(:num)', 'Home::saludar3/$1/$2');

$routes->get('/calcular/(:num)/(:num)', 'Home::calcular/$1/$2');

$routes->get('/calculadora/(:num)/(:num)/(:alpha)', 'Home::calculadora/$1/$2/$3');


//usuarios
$routes->get ('/usuarios', 'UsuarioController::index'); //todos los usuarios
$routes->get ('/usuarios/(:num)', 'UsuarioController::show/$1'); // info un usuario
$routes->get ('/usuarios/create', 'UsuarioController::create'); // formulario crear usuario
$routes->post ('/usuarios/store', 'UsuarioController::store'); // controlador crear usuario
$routes->get ('/usuarios/(:num)/edit', 'UsuarioController::edit/$1'); //formulario editar usuario
$routes->post ('/usuarios/(:num)/update', 'UsuarioController::update/$1'); //controlador editar usuario
$routes->get ('/usuarios/(:num)/delete', 'UsuarioController::delete/$1'); //controlador editar usuario

$routes->get ('/login', 'UsuarioController::login'); //login
$routes->get ('/login', 'UsuarioController::validarLogin'); //validar login
$routes->get ('/logout', 'UsuarioController::logout'); //cerrar sesion


$routes->get ('/fotografia', 'FotografiaController::index'); //todos los usuarios
$routes->get ('/fotografia/(:num)', 'FotografiaController::show/$1'); // info un usuario
$routes->get ('/fotografia/create', 'FotografiaController::create'); // formulario crear usuario
$routes->post ('/fotografia/store', 'FotografiaController::store'); // controlador crear usuario
$routes->get ('/fotografia/(:num)/edit', 'FotografiaController::edit/$1'); //formulario editar usuario
$routes->post ('/fotografia/(:num)/update', 'FotografiaController::update/$1'); //controlador editar usuario
$routes->get ('/fotografia/(:num)/delete', 'FotografiaController::delete/$1'); //controlador editar usuario



$routes->get('/plantilla', 'Home::plantilla');



