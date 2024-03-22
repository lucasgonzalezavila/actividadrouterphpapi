<?php

namespace App\Controllers;

class UserController {
    public function index() {
        echo "Mostrar todos los usuarios";
        
    }

    public function show($id) {
        echo "Mostrar usuario con ID: " . $id;
    }
}

