<?php
class WebController {
    private $contentFile;

    public function __construct() {
        $this->contentFile = __DIR__ . '/../../../storage/content.json';
        if (!file_exists($this->contentFile)) {
            if (!is_dir(dirname($this->contentFile))) {
                mkdir(dirname($this->contentFile), 0755, true);
            }
            $defaultContent = [
                'hero_title' => 'UKKI UNNES',
                'hero_subtitle' => 'KABINET SATU SIMFONI',
                'hero_desc' => 'UKKI UNNES (Unit Kegiatan Kerohanian Islam UNNES) adalah Lembaga Dakwah Kampus tingkat universitas yang berkedudukan di Universitas Negeri Semarang dengan sekretariat di Kompleks Masjid Ulul Albab.'
            ];
            file_put_contents($this->contentFile, json_encode($defaultContent));
        }
    }

    protected function getContent() {
        return json_decode(file_get_contents($this->contentFile), true);
    }

    public function beranda() {
        $content = $this->getContent();
        $pageTitle = "UKKIUNNes - Desktop - Light Mode";
        $activePage = "beranda";
        include __DIR__ . '/../../../resources/views/pages/beranda.php';
    }
    public function kegiatan() {
        $pageTitle = "Kegiatan UKKI UNNES";
        $activePage = "kegiatan";
        include __DIR__ . '/../../../resources/views/pages/kegiatan.php';
    }
    public function berita() {
        $pageTitle = "Berita UKKI UNNES";
        $activePage = "berita";
        include __DIR__ . '/../../../resources/views/pages/berita.php';
    }
    public function informasi() {
        $pageTitle = "Informasi UKKI UNNES";
        $activePage = "informasi";
        include __DIR__ . '/../../../resources/views/pages/informasi.php';
    }
    public function profil() {
        $pageTitle = "Profil UKKI UNNES";
        $activePage = "profil";
        include __DIR__ . '/../../../resources/views/pages/profil.php';
    }
    public function kabinet() {
        $pageTitle = "Kabinet Segara Langkah";
        $activePage = "kabinet";
        include __DIR__ . '/../../../resources/views/pages/kabinet.php';
    }
    public function departemen() {
        $pageTitle = "Departemen dan Biro UKKI UNNES";
        $activePage = "departemen";
        include __DIR__ . '/../../../resources/views/pages/departemen.php';
    }
    public function lembaga() {
        $pageTitle = "Lembaga Dakwah UNNES";
        $activePage = "lembaga";
        include __DIR__ . '/../../../resources/views/pages/lembaga.php';
    }
    public function storeUkki() {
        $pageTitle = "Store UKKI & Peminjaman Inventaris";
        $activePage = "store-ukki";
        include __DIR__ . '/../../../resources/views/pages/store-ukki.php';
    }
    public function donasi() {
        $pageTitle = "Donasi Dakwah UKKI UNNES";
        $activePage = "donasi";
        include __DIR__ . '/../../../resources/views/pages/donasi.php';
    }
    public function lainnya() {
        $pageTitle = "Lainnya - UKKI UNNES";
        $activePage = "lainnya";
        include __DIR__ . '/../../../resources/views/pages/lainnya.php';
    }
    public function admin() {
        if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
            header('Location: /admin/login');
            exit;
        }
        $content = $this->getContent();
        $pageTitle = "Admin Dashboard - UKKI UNNES";
        $activePage = "admin";
        include __DIR__ . '/../../../resources/views/pages/admin.php';
    }
    public function adminLogin() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            if ($username === 'admin' && $password === 'ukkiunnes2026') {
                $_SESSION['is_admin'] = true;
                header('Location: /admin');
                exit;
            } else {
                $error = "Username atau Password salah!";
            }
        }
        $pageTitle = "Login Admin - UKKI UNNES";
        include __DIR__ . '/../../../resources/views/pages/admin-login.php';
    }
    public function adminLogout() {
        unset($_SESSION['is_admin']);
        session_destroy();
        header('Location: /beranda');
        exit;
    }
    public function adminUpdate() {
        if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
            header('Location: /admin/login');
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $content = $this->getContent();
            $content['hero_title'] = $_POST['hero_title'] ?? $content['hero_title'];
            $content['hero_subtitle'] = $_POST['hero_subtitle'] ?? $content['hero_subtitle'];
            $content['hero_desc'] = $_POST['hero_desc'] ?? $content['hero_desc'];

            if (isset($_FILES['hero_bg']) && $_FILES['hero_bg']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = __DIR__ . '/../../public/assets/img/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true);
                }
                move_uploaded_file($_FILES['hero_bg']['tmp_name'], $uploadDir . 'hero-bg.jpg');
            }

            file_put_contents($this->contentFile, json_encode($content));
            header('Location: /admin?success=1');
            exit;
        }
    }
}
