<?php

spl_autoload_register(function ($class) {

    $path = __DIR__ ."\\" .$class . '.php';
    $path = str_replace('\\', '/', $path);
    if (file_exists($path)) {
        require_once $path;
    }
});
