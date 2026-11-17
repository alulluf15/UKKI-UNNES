<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;
use App\Models\Auth;
use App\Models\Content;

class AdminController extends Controller {
    public function __construct() {
        if (!Auth::check()) {
            $this->redirect('/admin/login');
        }
    }

    public function index(): void {
        $content = Content::get();
        $this->render('pages/admin', [
            'content' => $content,
            'pageTitle' => 'Admin Dashboard - UKKI UNNES',
            'activePage' => 'admin'
        ]);
    }

    public function update(): void {
        $heroTitle = Request::input('hero_title');
        $heroSubtitle = Request::input('hero_subtitle');
        $heroDesc = Request::input('hero_desc');

        Content::update([
            'hero_title' => $heroTitle,
            'hero_subtitle' => $heroSubtitle,
            'hero_desc' => $heroDesc
        ]);

        $file = Request::file('hero_bg');
        if ($file && is_array($file) && $file['error'] === UPLOAD_ERR_OK) {
            $uploadDir = dirname(__DIR__, 2) . '/public/assets/img/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            move_uploaded_file($file['tmp_name'], $uploadDir . 'hero-bg.jpg');
        }

        $this->redirect('/admin?success=1');
    }
}
