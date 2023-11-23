<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index', 'Home::index');

$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/password', 'Home::password');

$routes->get('/tables', 'Home::tables');
$routes->get('/charts', 'Home::charts');
$routes->get('/layout-static', 'Home::layoutStatic');
$routes->get('/layout-sidenav-light', 'Home::layoutSidenavLight');

$routes->get('/404', 'Home::notFound');
$routes->get('/401', 'Home::unauthorized');
$routes->get('/500', 'Home::internalServerError');


