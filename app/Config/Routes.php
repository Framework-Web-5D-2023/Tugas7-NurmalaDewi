<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'about::index');
$routes->post('/create', 'Home::createMahasiswa');
//$routes->get('/.num', 'Home::detailMahasiswa');
// $routes->get('/praktikum2', 'Home::praktikum2');
