<?php

return [
    'database' => [
        'dsn' => 'mysql:host=localhost;dbname=nombre_basedatos',
        'username' => 'usuario',
        'password' => 'contraseña',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
];
