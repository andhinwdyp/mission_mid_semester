<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::login');

$routes->get('/login', 'Auth::login');
$routes->post('/loginAuth', 'Auth::loginAuth');
$routes->get('/logout', 'Auth::logout');

$routes->get('/no-access', 'Auth::noAccess');

$routes->get('/admin/dashboard', 'Admin\Dashboard::index', ['filter' => 'auth:admin']);

$routes->get('/public/dashboard', 'Public\Dashboard::index', ['filter' => 'auth:public']);

$routes->group('admin', ['filter' => 'auth:admin'], function($routes){
    $routes->get('anggota', 'Admin\Anggota::index');
    $routes->get('anggota/create', 'Admin\Anggota::create');
    $routes->post('anggota/store', 'Admin\Anggota::store');
    $routes->get('anggota/edit/(:num)', 'Admin\Anggota::edit/$1');
    $routes->post('anggota/update/(:num)', 'Admin\Anggota::update/$1');
    $routes->get('anggota/delete/(:num)', 'Admin\Anggota::delete/$1');

    $routes->get('komponen', 'Admin\Komponen::index');
    $routes->get('komponen/create', 'Admin\Komponen::create');
    $routes->post('komponen/store', 'Admin\Komponen::store');
    $routes->get('komponen/edit/(:num)', 'Admin\Komponen::edit/$1');
    $routes->post('komponen/update/(:num)', 'Admin\Komponen::update/$1');
    $routes->get('komponen/delete/(:num)', 'Admin\Komponen::delete/$1');
});

$routes->group('public', ['filter' => 'auth:public'], function ($routes) {
    $routes->get('dashboard', 'Public\Dashboard::index');
});
