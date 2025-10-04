<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::login');

$routes->get('/login', 'Auth::login');
$routes->post('/loginAuth', 'Auth::loginAuth');
$routes->get('/logout', 'Auth::logout');

$routes->get('/no-access', function() {
    echo view('layout/header');
    echo view('errors/no_access');
    echo view('layout/footer');
});

$routes->group('admin', ['filter' => 'auth:admin'], function($routes) {
    $routes->get('dashboard', 'Admin\Dashboard::index');
    $routes->resource('anggota');
    $routes->resource('komponen');
    $routes->resource('penggajian');
});

$routes->group('public', function($routes) {
    $routes->get('dashboard', 'Public\Dashboard::index');
    $routes->get('anggota', 'Public\Anggota::index');
    $routes->get('penggajian', 'Public\Penggajian::index');
});
