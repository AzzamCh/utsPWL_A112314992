<?php

namespace Config;

$routes = Services::routes();

$routes->get('/', 'AuthController::login');
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::loginPost');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/admin', 'DashboardController::admin', ['filter' => 'auth']);
$routes->get('/user', 'DashboardController::user', ['filter' => 'auth']);
$routes->get('/user/pesan', 'DashboardController::pesanGalon', ['filter' => 'auth']);
$routes->get('/admin/user', 'DashboardController::kelolaUser', ['filter' => 'auth']);
