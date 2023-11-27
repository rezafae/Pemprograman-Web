<?php

use App\Controllers\pages;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');

$routes->get('/Pages', 'pages::contact');
$routes->get('/produk', 'produk::input');
$routes->get('/pages', 'pages::input_mahasiswa');
$routes->get('pointnim', 'pointnim::lihat');
