<?php

namespace App\Models;

class Auth
{
    /**
     * Attempt login with credentials
     */
    public static function attempt(string $username, string $password): bool
    {
        $adminUser = env('ADMIN_USER', 'admin');
        $adminPass = env('ADMIN_PASS', 'ukkiunnes2026');

        if ($username === $adminUser && $password === $adminPass) {
            session([
                'is_admin' => true,
                'admin_user' => $username
            ]);
            return true;
        }

        return false;
    }

    /**
     * Check if current session is authenticated as admin
     */
    public static function check(): bool
    {
        return session('is_admin') === true;
    }

    /**
     * Logout admin session
     */
    public static function logout(): void
    {
        session()->forget(['is_admin', 'admin_user']);
        session()->regenerate();
    }
}
