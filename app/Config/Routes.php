<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'about::index');

// $routes->get('/praktikum2', 'Home::praktikum2');
