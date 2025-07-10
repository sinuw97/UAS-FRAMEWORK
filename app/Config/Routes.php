<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Beranda Utama
$routes->get('/beranda', 'User\UserController::showBeranda');