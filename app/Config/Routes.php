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
$routes->get('/auth', 'Auth::login');
$routes->resource('userapi');
// $routes->group('api', ['filter' => 'jwt'], function ($routes) {
//     $routes->resource('userapi'); // Ini akan menerapkan filter 'jwt' ke semua operasi CRUD di Users
//     // Tambahkan resource atau route API lain di sini yang membutuhkan autentikasi
//    // $routes->resource('products');
// });