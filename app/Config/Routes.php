<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'userController::login');
$routes->post('/login/authenticate', 'userController::authenticate');
$routes->get('/logout', 'userController::logout');

$routes->get('/todolist', 'todoListController::index');
$routes->post('/todolist/simpan', 'todoListController::simpanKegiatan');
$routes->get('/todolist/selesai/(:num)', 'todoListController::selesaiKegiatan/$1');
$routes->get('/todolist/hapus/(:num)', 'todoListController::hapusKegiatan/$1');



 
