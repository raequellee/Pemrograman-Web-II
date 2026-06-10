<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'AuthController::index');
$routes->post('/login/process', 'AuthController::process');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/buku', 'BukuController::index', ['filter' => 'auth']);
$routes->get('/buku/create', 'BukuController::create', ['filter' => 'auth']);
$routes->post('/buku/store', 'BukuController::store', ['filter' => 'auth']);
$routes->get('/buku/edit/(:num)', 'BukuController::edit/$1', ['filter' => 'auth']);
$routes->post('/buku/update/(:num)', 'BukuController::update/$1', ['filter' => 'auth']);
$routes->get('/buku/delete/(:num)', 'BukuController::delete/$1', ['filter' => 'auth']);