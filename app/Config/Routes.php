<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('dashboard', 'Dashboard::index', [
    'as' => 'dashboard'
]);

$routes->get('rekrutmen', 'Rekrutmen::index', [
    'as' => 'rekrutmen'
]);

$routes->get('aslab', 'Aslab::index', [
    'as' => 'aslab'
]);

$routes->get('jadwal', 'Jadwal::index', [
    'as' => 'jadwal'
]);

$routes->get('laporan', 'Laporan::index', [
    'as' => 'laporan'
]);