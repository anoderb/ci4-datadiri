<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/datadiri', 'Home::datadiri');
$routes->get('/login', 'AuthController::login');
$routes->get('/register', 'AuthController::register');

