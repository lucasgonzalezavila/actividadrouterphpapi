<?php

use App\Controllers\UserController;

$router = new Router(new Request());


$router->addRoute('GET', '/api/users', [new UserController(), 'index']);
$router->addRoute('GET', '/api/users/{id}', [new UserController(), 'show']); 

return $router; 
