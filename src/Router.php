<?php

namespace App;

class Router {
    protected $routes = [];

    public function addRoute($method, $path, $handler) {
        $this->routes[$method][$path] = $handler;
    }

    public function route($method, $path) {
        foreach ($this->routes[$method] as $route => $handler) {
            $pattern = str_replace('/', '\/', $route);
            $pattern = preg_replace('/\{(\w+)\}/', '(?P<\1>\d+)', $pattern); 
            
            if (preg_match('/^' . $pattern . '$/', $path, $matches)) {

                return $handler(...array_values($matches));
            }
        }
        http_response_code(404);
        echo "Ruta no encontrada";
    }
}

