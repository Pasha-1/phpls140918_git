<?php
//путь
define('APPLICATION_PATH', getcwd() . '/app/');
//config
require_once APPLICATION_PATH . '/app/Core/config.php';
//composer psr-4
require_once APPLICATION_PATH . 'vendor/autoload.php';
try {
    $migration = new \App\Controllers\Migration;
    $migration->start();
    echo 'success';
} catch (Exception $e) {
    require APPLICATION_PATH . "/app/errors/showError.php";
}