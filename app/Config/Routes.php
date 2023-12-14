<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('upload', 'Upload::index');          // Add this line.
$routes->post('upload', 'Upload::upload'); // Add this line.
$routes->get('cuti-masuk', 'CutiMasuk::index'); // Add this line.