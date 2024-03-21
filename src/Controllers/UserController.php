<?php

namespace App\Controllers; // Namespace actualizado

class UserController {
    public function index() {
        echo "Mostrar todos los usuarios";
        
    }

    public function show($id) {
        echo "Mostrar usuario con ID: " . $id;
    }
}

