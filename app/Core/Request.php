<?php
namespace App\Core;

class Request {
    /**
     * Get sanitized request path relative to public index
     */
    public static function getPath(): string {
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
        
        // Remove script directory if installed in subdirectory (e.g. XAMPP)
        $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
        if ($scriptDir !== '/' && !empty($scriptDir) && strpos($uri, $scriptDir) === 0) {
            $uri = substr($uri, strlen($scriptDir));
        }

        $path = trim($uri, '/');
        return $path === '' ? '/' : '/' . $path;
    }

    /**
     * Get HTTP request method
     */
    public static function getMethod(): string {
        return strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
    }

    /**
     * Check if request method matches
     */
    public static function isMethod(string $method): bool {
        return self::getMethod() === strtoupper($method);
    }

    /**
     * Get input data from POST or GET
     */
    public static function input(string $key, $default = null) {
        if (self::isMethod('POST')) {
            return $_POST[$key] ?? $default;
        }
        return $_GET[$key] ?? $default;
    }

    /**
     * Get all input data
     */
    public static function all(): array {
        return self::isMethod('POST') ? $_POST : $_GET;
    }

    /**
     * Get uploaded file
     */
    public static function file(string $key) {
        return $_FILES[$key] ?? null;
    }
}
