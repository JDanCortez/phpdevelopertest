<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get('user/create', 'User::create');
// $routes->get('user', 'User::index');
// $routes->post('user/store', 'User::store');

$routes->get('post/create', 'Post::create');
$routes->post('post/store', 'Post::store');

service('auth')->routes($routes);
// $routes->get('/post/create', 'Post::create');