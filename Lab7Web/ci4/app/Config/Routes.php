<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Routing halaman umum
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');

// Routing admin artikel
$routes->get('/artikel/(:any)', 'Artikel::view/$1');
$routes->group('admin',['filter' => 'auth'], function($routes) {
    $routes->get('artikel', 'Artikel::view/$1');
    $routes->add('artikel/add', 'Artike;::add');
    $routes->add('artikel/edit/(:any)', 'Artikel::edit/$1');
    $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');

});


