<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/welcome_message', 'Home::index');
$routes->get('/www', 'UserController::admin');

$routes->get('/electronic', 'UserController::electronic');
$routes->get('/fashion', 'UserController::fashion');
$routes->get('/jewel', 'UserController::jewel');


$routes->get('/pro1', 'UserController::pro1');
$routes->get('/pro2', 'UserController::pro2');
$routes->get('/pro3', 'UserController::pro3');
$routes->get('/pro4', 'UserController::pro4');
$routes->get('/pro5', 'UserController::pro5');
$routes->get('/pro6', 'UserController::pro6');
$routes->get('/pro7', 'UserController::pro7');
$routes->get('/pro8', 'UserController::pro8');
$routes->get('/pro9', 'UserController::pro9');