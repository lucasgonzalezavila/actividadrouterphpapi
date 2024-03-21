<?php

ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

use App\Request;
use App\Router;
use App\Controllers\UserController;

$request = new App\Request();
$router = new App\Router($request); 


$router->addRoute('GET', '/users', [new UserController(), 'index']);
$router->addRoute('GET', '/users/{id}', [new UserController(), 'show']);

$router->route($request->method(), $request->uri());
