<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('/pages/dashboard', 'Dashboard::index', [
    'as' => 'dashboard'
]);

$routes->get('/pages/rekrutmen', 'Rekrutmen::index', [
    'as' => 'rekrutmen'
]);

$routes->get('/pages/aslab', 'Aslab::index', [
    'as' => 'aslab'
]);

$routes->get('/pages/jadwal', 'Jadwal::index', [
    'as' => 'jadwal'
]);

$routes->get('/pages/laporan', 'Laporan::index', [
    'as' => 'laporan'
]);