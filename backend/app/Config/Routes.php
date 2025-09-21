<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/Login', 'Login::index');
$routes->get('/Signup', 'Signup::index');
$routes->get('/Moodboard', 'Moodboard::index');
