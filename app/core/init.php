<?php

// Autoload models
spl_autoload_register(function ($classname) {
    $modelPath = __DIR__ . '/../models/' . $classname . '.php';
    if (file_exists($modelPath)) {
        require_once $modelPath;
    } 
});

// Include core files
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/database.php";
require_once __DIR__ . "/Model.php";
require_once __DIR__ . "/controller.php";
require_once __DIR__ . "/app.php";
