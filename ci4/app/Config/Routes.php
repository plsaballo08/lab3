<?php

use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Pages;
use App\Controllers\News; 
use App\Controllers\Guests;

$routes->get('guest', [Guests::class, 'index']);
$routes->get('guest/new', [Guests::class, 'new']);
$routes->post('guest', [Guests::class, 'create']);
$routes->get('guest/(:segment)', [Guests::class, 'show']);

$routes->get('news', [News::class, 'index']);          
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']); 
$routes->get('news/(:segment)', [News::class, 'show']);



$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

