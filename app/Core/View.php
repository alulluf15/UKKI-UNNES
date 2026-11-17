<?php
namespace App\Core;

class View {
    /**
     * Render a view template with supplied data
     */
    public static function render(string $viewPath, array $data = []): void {
        extract($data);
        
        $file = dirname(__DIR__, 2) . '/resources/views/' . str_replace('.', '/', $viewPath) . '.php';

        if (file_exists($file)) {
            require $file;
        } else {
            http_response_code(404);
            echo "<h1>View [{$viewPath}] tidak ditemukan.</h1>";
        }
    }
}
