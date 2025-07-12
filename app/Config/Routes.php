<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'auth\AuthController::login');
$routes->post('/login/submit', 'auth\AuthController::loginSubmit');
$routes->get('/logout', 'auth\AuthController::logout');
