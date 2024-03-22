<?php

namespace App;

class Request {
    protected $method;
    protected $uri;
    protected $parameters;

    public function __construct() {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->uri = $_SERVER['REQUEST_URI'];
        $this->parameters = $_REQUEST; 
    }

    public function method() {
        return $this->method;
    }

    public function uri() {
        return $this->uri;
    }

    public function input($key, $default = null) {
        return isset($this->parameters[$key]) ? $this->parameters[$key] : $default;
    }
}
