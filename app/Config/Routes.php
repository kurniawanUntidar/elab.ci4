<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index'); // Dashboard
$routes->get('/home','Home::index');
//$routes->get('/about', 'Pages::about');
// Tambahkan baris ini di tempat yang sesuai, misalnya di bawah rute produk Anda
$routes->get('/test', 'Test::index');