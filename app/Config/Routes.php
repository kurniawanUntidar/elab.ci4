<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Tambahkan baris ini di tempat yang sesuai, misalnya di bawah rute produk Anda
$routes->get('/test', 'Test::index');