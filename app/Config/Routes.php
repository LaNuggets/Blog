<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Posts
$routes->get('/', 'Home::index');
$routes->get('/post/create', 'PostController::create');
$routes->post('/post/save', 'PostController::save');
$routes->get('/posts', 'PostController::index');

//Pages
$routes->get('/info', 'Home::info');
$routes->get('/blog', 'Home::blog');
$routes->get('/tech', 'Home::tech');
$routes->get('/exp', 'Home::exp');

// Comments
$routes->post('/comment/save', 'CommentController::save');
$routes->get('comments', 'CommentController::index');  
$routes->get('comment/delete/(:num)', 'CommentController::delete/$1');
