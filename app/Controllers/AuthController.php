<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Models\Auth;

class AuthController extends Controller {
    public function showLogin(): void {
        if (Auth::check()) {
            $this->redirect('/admin');
        }
        $this->render('pages/admin-login', [
            'pageTitle' => 'Login Admin - UKKI UNNES'
        ]);
    }

    public function login(): void {
        $username = trim((string) Request::input('username', ''));
        $password = trim((string) Request::input('password', ''));

        if (Auth::attempt($username, $password)) {
            $this->redirect('/admin');
        } else {
            $this->render('pages/admin-login', [
                'error' => 'Username atau Password salah!',
                'pageTitle' => 'Login Admin - UKKI UNNES'
            ]);
        }
    }

    public function logout(): void {
        Auth::logout();
        $this->redirect('/beranda');
    }
}
