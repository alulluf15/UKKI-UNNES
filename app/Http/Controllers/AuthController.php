<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    public function showLogin(): View|RedirectResponse
    {
        if (Auth::check()) {
            return redirect()->route('admin');
        }
        return view('pages.admin-login', [
            'pageTitle' => 'Masuk Admin - UKKI UNNES'
        ]);
    }

    public function login(Request $request): View|RedirectResponse
    {
        $username = trim((string) $request->input('username', ''));
        $password = trim((string) $request->input('password', ''));

        if (Auth::attempt($username, $password)) {
            $request->session()->regenerate();
            return redirect()->route('admin');
        }

        return view('pages.admin-login', [
            'error' => 'Nama pengguna atau kata sandi salah!',
            'pageTitle' => 'Masuk Admin - UKKI UNNES'
        ]);
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('beranda');
    }
}
