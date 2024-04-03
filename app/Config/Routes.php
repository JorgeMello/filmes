<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('/cuidador', 'Main::cuidador');
$routes->get('/filmes', 'Main::filmes');
