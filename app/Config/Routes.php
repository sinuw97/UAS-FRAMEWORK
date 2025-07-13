<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'auth\AuthController::login');
$routes->post('/login/submit', 'auth\AuthController::loginSubmit');
$routes->get('/logout', 'auth\AuthController::logout');

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

//Admin
$routes->get('/admin/dashboard', 'Admin\AdminController::showDashboard');
$routes->get('/admin/all-products', 'Admin\AdminController::showProduct');
$routes->post('/admin/add-product', 'Admin\AdminController::addProduct');
$routes->get('/admin/all-products/add-product', 'Admin\AdminController::showAddProduct');
$routes->get('/admin/all-orders', 'Admin\AdminController::showOrder');

$routes->get('/register', 'auth\AuthController::register');
$routes->post('register/proses', 'Auth\AuthController::proses');


