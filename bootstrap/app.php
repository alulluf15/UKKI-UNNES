<?php
/**
 * Bootstrap the application
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/autoload.php';

use App\Core\Router;

$router = new Router();

// Load application routes
require_once __DIR__ . '/../routes/web.php';

return $router;
