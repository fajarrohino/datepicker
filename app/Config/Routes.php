<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/filter-data', 'Home::index'); // Sesuaikan dengan nama metode di controller

