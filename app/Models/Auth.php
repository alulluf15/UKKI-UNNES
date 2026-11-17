<?php
namespace App\Models;

class Auth {
    const ADMIN_USER = 'admin';
    const ADMIN_PASS = 'ukkiunnes2026';

    /**
     * Attempt login with credentials
     */
    public static function attempt(string $username, string $password): bool {
        if ($username === self::ADMIN_USER && $password === self::ADMIN_PASS) {
            $_SESSION['is_admin'] = true;
            $_SESSION['admin_user'] = $username;
            return true;
        }
        return false;
    }

    /**
     * Check if current session is authenticated as admin
     */
    public static function check(): bool {
        return isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true;
    }

    /**
     * Logout admin session
     */
    public static function logout(): void {
        unset($_SESSION['is_admin']);
        unset($_SESSION['admin_user']);
        session_destroy();
    }
}
