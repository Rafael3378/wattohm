<?php

use Router\Router;
use Exceptions\RouteNotFoundException;

require './../vendor/autoload.php';

$router = new Router();

$router->register('/', function () {
    return 'Homepage';
});

$router->register('/contact', function () {
    return 'Contact Page';
});

try {
echo $router->resolve($_SERVER['REQUEST_URI']);
} catch (RouteNotFoundException $e) {
    echo $e->getMessage();
}