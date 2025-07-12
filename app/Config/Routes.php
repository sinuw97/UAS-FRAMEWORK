<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Beranda Utama
$routes->get('/beranda', 'User\UserController::showBeranda');
// Product Page
$routes->get('/products', 'User\UserController::showProduct');
$routes->get('/product/detail/(:num)', 'User\UserController::showProductDetail/$1');
$routes->get('/product/my-cart', 'User\UserController::showCart');
// Add to cart tanpa login
$routes->post('/cart/add', 'User\UserController::addToCart');
// AJAX get stock dan harga sesuai size ukuran baju
$routes->get('/product/variant/(:num)/(:segment)', 'User\UserController::getVariant/$1/$2');