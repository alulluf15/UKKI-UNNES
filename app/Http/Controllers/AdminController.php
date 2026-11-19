<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use App\Models\Content;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View|RedirectResponse
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $content = Content::get();
        return view('pages.admin', [
            'content' => $content,
            'pageTitle' => 'Dasbor Admin - UKKI UNNES',
            'activePage' => 'admin'
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $heroTitle = $request->input('hero_title');
        $heroSubtitle = $request->input('hero_subtitle');
        $heroDesc = $request->input('hero_desc');

        Content::update([
            'hero_title' => $heroTitle,
            'hero_subtitle' => $heroSubtitle,
            'hero_desc' => $heroDesc
        ]);

        if ($request->hasFile('hero_bg') && $request->file('hero_bg')->isValid()) {
            $uploadDir = public_path('assets/img');
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            $request->file('hero_bg')->move($uploadDir, 'hero-bg.jpg');
        }

        return redirect()->route('admin', ['success' => 1]);
    }
}
