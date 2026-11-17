<?php
/**
 * UKKI UNNES - Application Entry Point
 */

define('APP_START', microtime(true));

/** @var App\Core\Router $router */
$router = require_once __DIR__ . '/../bootstrap/app.php';

$router->resolve();
