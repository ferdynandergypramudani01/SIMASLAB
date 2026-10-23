<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('test', function () {
    return view('tailwind-test');
});

$routes->get('dashboard', 'DashboardController::index', [
    'as' => 'dashboard'
]);

$routes->get('rekrutmen', 'RekrutmenController::index', [
    'as' => 'rekrutmen'
]);

$routes->get('aslab', 'AslabController::index', [
    'as' => 'aslab'
]);

$routes->get('jadwal', 'JadwalController::index', [
    'as' => 'jadwal'
]);

$routes->get('laporan', 'LaporanController::index', [
    'as' => 'laporan'
]);