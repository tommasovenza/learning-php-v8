<?php

// require
require_once "../Routing/Router.php";

use App\Routing\Router;

// var_dump($_SERVER);

$router = new Router();

$router->register('/', function () {
    return 'home';
});

$router->register('/video', function () {
    return 'video';
});

$router->register('/server', function () {
    return 'server';
});
// call_user_func('callback');

// var_dump($router);
var_dump($router->execute());
