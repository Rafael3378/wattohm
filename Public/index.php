<?php

use Router\Router;

require '../vendor/autoload.php';

define('views', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);

$router->get('/', 'App\Controllers\FrontController@home');

$router->get('/gallery', 'App\Controllers\FrontController@gallery');
$router->get('/gallery', 'App\Controllers\FrontController@galleryIndex');
$router->get('/gallery/:id', 'App\Controllers\FrontController@galleryShow');

$router->get('/job', 'App\Controllers\FrontController@job');
$router->get('/job', 'App\Controllers\FrontController@jobIndex');
$router->get('/job/:id', 'App\Controllers\FrontController@jobShow');

$router->get('/contact', 'App\Controllers\FrontController@contact');

$router->get('/login', 'App\Controllers\FrontController@login');
$router->get('/admin', 'App\App\Controllers\FrontController@admin');

$router->run();