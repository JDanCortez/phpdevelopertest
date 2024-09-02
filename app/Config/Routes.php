<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Post::index');
$routes->get('post', 'Post::index');
$routes->get('post/create', 'Post::create');
$routes->post('post/store', 'Post::store');
$routes->get('post/(:segment)/edit', 'Post::edit/$1');
$routes->put('post/(:segment)', 'Post::update/$1');
$routes->post('post/(:num)', 'Post::delete/$1');
$routes->get('post/(:segment)/show', 'Post::show/$1');


service('auth')->routes($routes);