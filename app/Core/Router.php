<?php
namespace App\Core;

class Router {
    protected array $routes = [
        'GET' => [],
        'POST' => []
    ];

    /**
     * Register a GET route
     */
    public function get(string $path, $handler): void {
        $this->routes['GET'][$this->normalizePath($path)] = $handler;
    }

    /**
     * Register a POST route
     */
    public function post(string $path, $handler): void {
        $this->routes['POST'][$this->normalizePath($path)] = $handler;
    }

    /**
     * Normalize URL path
     */
    protected function normalizePath(string $path): string {
        $trimmed = trim($path, '/');
        return $trimmed === '' ? '/' : '/' . $trimmed;
    }

    /**
     * Resolve the incoming request and dispatch handler
     */
    public function resolve() {
        $method = Request::getMethod();
        $path = Request::getPath();

        $handler = $this->routes[$method][$path] ?? null;

        // If not found in current method, check 404
        if (!$handler) {
            http_response_code(404);
            View::render('pages/404', [
                'pageTitle' => '404 - Halaman Tidak Ditemukan',
                'activePage' => '404'
            ]);
            return;
        }

        // Closure / callable
        if (is_callable($handler)) {
            return call_user_func($handler);
        }

        // [ControllerClass, 'methodName']
        if (is_array($handler)) {
            [$class, $action] = $handler;
            if (class_exists($class)) {
                $controller = new $class();
                if (method_exists($controller, $action)) {
                    return $controller->$action();
                }
            }
        }

        http_response_code(500);
        echo "<h1>500 - Handler error for route: {$path}</h1>";
    }
}
