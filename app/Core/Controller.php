<?php
namespace App\Core;

abstract class Controller {
    /**
     * Render view with data
     */
    protected function render(string $view, array $data = []): void {
        View::render($view, $data);
    }

    /**
     * Redirect to another URL
     */
    protected function redirect(string $url): void {
        header("Location: {$url}");
        exit;
    }

    /**
     * Return JSON response
     */
    protected function json(array $data, int $status = 200): void {
        http_response_code($status);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
        exit;
    }
}
