<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->group('dashboard', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Dashboard::index');
    $routes->get('calendar', 'Dashboard::calendar');
    $routes->get('stats', 'Dashboard::stats');
});

$routes->group('employees', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Employees::index');
    $routes->get('create', 'Employees::create');
    $routes->post('store', 'Employees::store');
    $routes->get('edit/(:num)', 'Employees::edit/$1');
    $routes->post('update/(:num)', 'Employees::update/$1');
    $routes->get('delete/(:num)', 'Employees::delete/$1');
});

$routes->group('projects', ['filter' => 'auth'], function($routes) {
    $routes->get('/', 'Projects::index');
    $routes->get('create', 'Projects::create');
    $routes->post('store', 'Projects::store');
    $routes->get('edit/(:num)', 'Projects::edit/$1');
    $routes->post('update/(:num)', 'Projects::update/$1');
});