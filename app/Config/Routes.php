<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/post/create', 'PostController::create');
$routes->post('/post/save', 'PostController::save');
$routes->get('/posts', 'PostController::index');
$routes->post('/comment/save', 'CommentController::save');
$routes->get('/info', 'Home::info');
$routes->get('/blog', 'Home::blog');