<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function beranda(): View
    {
        $content = Content::get();
        return view('pages.beranda', [
            'content' => $content,
            'pageTitle' => 'Beranda - UKKI UNNES',
            'activePage' => 'beranda'
        ]);
    }

    public function kegiatan(): View
    {
        return view('pages.kegiatan', [
            'pageTitle' => 'Kegiatan UKKI UNNES',
            'activePage' => 'kegiatan'
        ]);
    }

    public function berita(): View
    {
        return view('pages.berita', [
            'pageTitle' => 'Berita UKKI UNNES',
            'activePage' => 'berita'
        ]);
    }

    public function informasi(): View
    {
        return view('pages.informasi', [
            'pageTitle' => 'Informasi UKKI UNNES',
            'activePage' => 'informasi'
        ]);
    }

    public function profil(): View
    {
        return view('pages.profil', [
            'pageTitle' => 'Profil UKKI UNNES',
            'activePage' => 'profil'
        ]);
    }

    public function kabinet(): View
    {
        return view('pages.kabinet', [
            'pageTitle' => 'Kabinet Segara Langkah',
            'activePage' => 'kabinet'
        ]);
    }

    public function departemen(): View
    {
        $departments = $this->getDepartmentsData();
        return view('pages.departemen', [
            'departments' => $departments,
            'pageTitle' => 'Departemen dan Biro UKKI UNNES',
            'activePage' => 'departemen'
        ]);
    }

    public function departemenDetail(string $slug): View
    {
        $departments = $this->getDepartmentsData();
        $dept = collect($departments)->firstWhere('slug', $slug);

        if (!$dept) {
            abort(404);
        }

        return view('pages.departemen-detail', [
            'dept' => $dept,
            'pageTitle' => $dept['name'] . ' - UKKI UNNES',
            'activePage' => 'departemen'
        ]);
    }

    /**
     * Data master 13 Departemen dan Biro UKKI UNNES
     */
    public function getDepartmentsData(): array
    {
        return [
            [
                'id' => 1,
                'slug' => 'ph',
                'name' => 'Pengurus Harian (PH)',
                'short_name' => 'PH',
                'type' => 'ph',
                'type_label' => 'Pengurus Harian',
                'badge_class' => 'badge-ph',
                'desc' => 'Poros kepemimpinan utama, perumus kebijakan strategis, dan pengarah koordinasi sinergi dakwah UKKI UNNES.',
                'tagline' => 'Satukan Sinergi, Selaraskan Aksi',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => '/assets/img/departemen/ph-logo.png',
                'cover' => '/assets/img/departemen/ph.png',
                'structure' => [
                    'masul' => [
                        'title' => "Mas'ul",
                        'role' => "Ketua Umum UKKI UNNES",
                        'name' => "Khoirul Anam",
                        'major' => "PPKn 2023",
                        'photo' => "/assets/img/departemen/ph-masul.jpg",
                    ],
                    'wamasul' => [
                        'title' => "Wamas'ul",
                        'role' => "Wakil Ketua Umum UKKI UNNES",
                        'name' => "Khalid Iswahyudi",
                        'major' => "Kesehatan Masyarakat 2023",
                        'photo' => "/assets/img/departemen/ph-wamasul.jpg",
                    ],
                    'korwat' => [
                        'title' => "Korwat (Koordinator Akhwat)",
                        'role' => "Koordinator Pengurus Putri UKKI UNNES",
                        'name' => "Sumayyah",
                        'major' => "Ekonomi Pembangunan 2023",
                        'photo' => "/assets/img/departemen/ph-korwat.jpg",
                    ],
                    'sekum' => [
                        'title' => "Sekum (Sekretaris Umum)",
                        'role' => "Tata Kelola Administrasi, Persuratan & Kesekretariatan",
                        'cover' => "/assets/img/departemen/ph-sekum-cover.jpg",
                        'members_photo' => "/assets/img/departemen/ph-sekum-members.jpg",
                        'members' => [
                            ['name' => "Sandy Aulia", 'position' => "Sekretaris Umum 1", 'major' => "Sastra Indonesia 2022"],
                            ['name' => "Fathinatussholihah", 'position' => "Sekretaris Umum 2", 'major' => "Pend. Matematika 2022"],
                            ['name' => "Risma Setianingrum", 'position' => "Sekretaris Umum 3", 'major' => "Pend. Ekonomi 2023"],
                        ],
                    ],
                    'bendum' => [
                        'title' => "Bendum (Bendahara Umum)",
                        'role' => "Pengelolaan Keuangan Transparan & Akuntabel",
                        'desc' => "Bendahara Umum merupakan bagian dari Pengurus Harian yang bertanggung jawab dalam pengelolaan keuangan UKKI secara transparan dan akuntabel, mulai dari perencanaan anggaran hingga pelaporan guna mendukung keberlangsungan program kerja organisasi.",
                        'cover' => "/assets/img/departemen/ph-bendum-cover.jpg",
                        'members_photo' => "/assets/img/departemen/ph-bendum-members.jpg",
                        'members' => [
                            ['name' => "Khalisa Salsabila", 'position' => "Bendahara Umum 1", 'major' => "Teknologi Pendidikan 2022"],
                            ['name' => "Nisrina Masita", 'position' => "Bendahara Umum 2", 'major' => "Pend. Bahasa Arab 2023"],
                            ['name' => "Rani Alfina", 'position' => "Bendahara Umum 3", 'major' => "Pend. Biologi 2024"],
                        ],
                    ],
                ],
                'posters' => [
                    ['title' => "Poster Mas'ul", 'src' => "/assets/img/departemen/ph-masul.jpg", 'caption' => "Khoirul Anam - Mas'ul (PPKn 2023)"],
                    ['title' => "Poster Wamas'ul", 'src' => "/assets/img/departemen/ph-wamasul.jpg", 'caption' => "Khalid Iswahyudi - Wamas'ul (Kesehatan Masyarakat 2023)"],
                    ['title' => "Poster Korwat", 'src' => "/assets/img/departemen/ph-korwat.jpg", 'caption' => "Sumayyah - Koordinator Akhwat (Ekonomi Pembangunan 2023)"],
                    ['title' => "Poster Sekum (Cover)", 'src' => "/assets/img/departemen/ph-sekum-cover.jpg", 'caption' => "Sekretaris Umum - Kabinet Satu Simfoni"],
                    ['title' => "Poster Formasi Sekum", 'src' => "/assets/img/departemen/ph-sekum-members.jpg", 'caption' => "Sandy Aulia, Fathinatussholihah, Risma Setianingrum"],
                    ['title' => "Poster Bendum (Cover)", 'src' => "/assets/img/departemen/ph-bendum-cover.jpg", 'caption' => "Bendahara Umum - Kabinet Satu Simfoni"],
                    ['title' => "Poster Formasi Bendum", 'src' => "/assets/img/departemen/ph-bendum-members.jpg", 'caption' => "Khalisa Salsabila, Nisrina Masita, Rani Alfina"],
                ],
            ],
            [
                'id' => 2,
                'slug' => 'dna',
                'name' => 'Biro Data dan Analisis (DnA)',
                'short_name' => 'DnA',
                'type' => 'biro',
                'type_label' => 'Biro',
                'badge_class' => 'badge-biro',
                'desc' => 'Pusat pengelolaan bank data organisasi, riset keumatan, dan analisis kebutuhan dakwah kampus terpadu.',
                'tagline' => 'Presisi Data untuk Arah Gerak Dakwah Nyata',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => null,
                'cover' => null,
                'structure' => null,
                'posters' => [],
            ],
            [
                'id' => 3,
                'slug' => 'mio',
                'name' => 'Biro Manajemen Internal Organisasi (MIO)',
                'short_name' => 'MIO',
                'type' => 'biro',
                'type_label' => 'Biro',
                'badge_class' => 'badge-biro',
                'desc' => 'Pengawalan tata kelola administrasi, kearsipan persuratan, dan harmonisasi internal pengurus.',
                'tagline' => 'Harmoni Internal, Tertata dan Bersinergi',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => null,
                'cover' => null,
                'structure' => null,
                'posters' => [],
            ],
            [
                'id' => 4,
                'slug' => 'training',
                'name' => 'Biro Training',
                'short_name' => 'Training',
                'type' => 'biro',
                'type_label' => 'Biro',
                'badge_class' => 'badge-biro',
                'desc' => 'Pengembangan skill, penguatan kompetensi manajerial, dan penyelenggaraan pelatihan kepemimpinan dakwah.',
                'tagline' => 'Tempa Kapasitas, Cetak Pemimpin Berkarakter',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => null,
                'cover' => null,
                'structure' => null,
                'posters' => [],
            ],
            [
                'id' => 5,
                'slug' => 'kaderisasi',
                'name' => 'Departemen Kaderisasi',
                'short_name' => 'Kaderisasi',
                'type' => 'departemen',
                'type_label' => 'Departemen',
                'badge_class' => 'badge-departemen',
                'desc' => 'Pintu gerbang regenerasi dakwah, rekrutmen anggota baru, dan pengelolaan jenjang kaderisasi kampus.',
                'tagline' => 'Menyemai Benih Kebaikan, Merawat Regenerasi',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => null,
                'cover' => null,
                'structure' => null,
                'posters' => [],
            ],
            [
                'id' => 6,
                'slug' => 'pembinaan',
                'name' => 'Departemen Pembinaan',
                'short_name' => 'Pembinaan',
                'type' => 'departemen',
                'type_label' => 'Departemen',
                'badge_class' => 'badge-departemen',
                'desc' => 'Penguatan ruhiyah, pembinaan tsaqafah Islam berkelanjutan, dan pemantapan karakter aktivis dakwah.',
                'tagline' => 'Kokohkan Iman, Teguhkan Akhlak Mulia',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => null,
                'cover' => null,
                'structure' => null,
                'posters' => [],
            ],
            [
                'id' => 7,
                'slug' => 'syiar',
                'name' => 'Departemen Syiar',
                'short_name' => 'Syiar',
                'type' => 'departemen',
                'type_label' => 'Departemen',
                'badge_class' => 'badge-departemen',
                'desc' => 'Pelopor syiar nilai-nilai Islam, penyelenggara kajian akbar, dan semarak dakwah di lingkungan UNNES.',
                'tagline' => 'Gaungkan Cahaya Islam ke Seluruh Sudut Kampus',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => null,
                'cover' => null,
                'structure' => null,
                'posters' => [],
            ],
            [
                'id' => 8,
                'slug' => 'pelayanan-umat',
                'name' => 'Departemen Pelayanan Umat',
                'short_name' => 'Pelayanan Umat',
                'type' => 'departemen',
                'type_label' => 'Departemen',
                'badge_class' => 'badge-departemen',
                'desc' => 'Aksi sosial kemanusiaan, advokasi kemaslahatan, dan khidmat pengabdian nyata bagi mahasiswa & masyarakat.',
                'tagline' => 'Tebar Maslahat, Berkhidmat untuk Umat',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => null,
                'cover' => null,
                'structure' => null,
                'posters' => [],
            ],
            [
                'id' => 9,
                'slug' => 'kominfo',
                'name' => 'Departemen Kominfo',
                'short_name' => 'Kominfo',
                'type' => 'departemen',
                'type_label' => 'Departemen',
                'badge_class' => 'badge-departemen',
                'desc' => 'Corong publikasi syiar digital, pers dakwah, kreasi multimedia, dan pengelolaan platform informasi UKKI.',
                'tagline' => 'Kreatif Menyapa, Bijak Menyampaikan Makna',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => null,
                'cover' => null,
                'structure' => null,
                'posters' => [],
            ],
            [
                'id' => 10,
                'slug' => 'kemuslimahan',
                'name' => 'Departemen Kemuslimahan',
                'short_name' => 'Kemuslimahan',
                'type' => 'departemen',
                'type_label' => 'Departemen',
                'badge_class' => 'badge-departemen',
                'desc' => 'Pembinaan karakter muslimah kampus, kajian keputrian tematik, dan pemberdayaan mahasiswi UNNES.',
                'tagline' => 'Anggun dalam Akhlak, Cerdas dalam Karya',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => null,
                'cover' => null,
                'structure' => null,
                'posters' => [],
            ],
            [
                'id' => 11,
                'slug' => 'mentoring',
                'name' => 'Departemen Mentoring',
                'short_name' => 'Mentoring',
                'type' => 'departemen',
                'type_label' => 'Departemen',
                'badge_class' => 'badge-departemen',
                'desc' => 'Pengawalan program bimbingan keislaman pekanan bagi mahasiswa muslim baru di tingkat universitas dan fakultas.',
                'tagline' => 'Rangkul Sahabat Baru dalam Dekapan Dakwah',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => null,
                'cover' => null,
                'structure' => null,
                'posters' => [],
            ],
            [
                'id' => 12,
                'slug' => 'kajian-strategis',
                'name' => 'Departemen Kajian Strategis',
                'short_name' => 'Kajian Strategis',
                'type' => 'departemen',
                'type_label' => 'Departemen',
                'badge_class' => 'badge-departemen',
                'desc' => 'Pusat kajian isu strategis keumatan, respon kebijakan kampus dan kebangsaan secara kritis & solutif.',
                'tagline' => 'Kritis Menelaah, Solutif Bertindak',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => null,
                'cover' => null,
                'structure' => null,
                'posters' => [],
            ],
            [
                'id' => 13,
                'slug' => 'ekonomi-kreatif',
                'name' => 'Departemen Ekonomi Kreatif',
                'short_name' => 'Ekonomi Kreatif',
                'type' => 'departemen',
                'type_label' => 'Departemen',
                'badge_class' => 'badge-departemen',
                'desc' => 'Kemandirian finansial dakwah, kewirausahaan kreatif mahasiswa, dan pengelolaan unit Store UKKI UNNES.',
                'tagline' => 'Mandiri Finansial, Berdaya untuk Dakwah',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => null,
                'cover' => null,
                'structure' => null,
                'posters' => [],
            ],
        ];
    }

    /**
     * Data Jaringan Sinergi Lembaga Dakwah UNNES (LDF & LDJ)
     */
    public function getLembagaData(): array
    {
        return [
            'ldf' => [
                [
                    'id' => 1,
                    'slug' => 'kmi-fk',
                    'name' => 'Keluarga Mahasiswa Islam Fakultas Kedokteran',
                    'short_name' => 'KMI FK',
                    'type' => 'ldf',
                    'type_label' => 'Lembaga Dakwah Fakultas',
                    'faculty' => 'Fakultas Kedokteran (FK)',
                    'faculty_short' => 'FK',
                    'cluster' => 'Kesehatan & Medis',
                    'desc' => 'Wadah pembinaan mahasiswa kedokteran dalam penguatan nilai-nilai keislaman, etika bioetika kedokteran Islami, dan aksi sosial kemanusiaan kesehatan.',
                    'focus' => 'Bioetika Islam & Pelayanan Medis Umat',
                ],
                [
                    'id' => 2,
                    'slug' => 'lumm-fbs',
                    'name' => 'Lingkar Ukhuwah Mahasiswa Muslim Bahasa dan Seni',
                    'short_name' => 'LUMM FBS',
                    'type' => 'ldf',
                    'type_label' => 'Lembaga Dakwah Fakultas',
                    'faculty' => 'Fakultas Bahasa dan Seni (FBS)',
                    'faculty_short' => 'FBS',
                    'cluster' => 'Bahasa & Seni',
                    'desc' => 'Wadah syiar dan pembinaan keislaman mahasiswa bahasa dan seni dengan pendekatan estetika sastra, budaya santun, dan seni bernafaskan Islam.',
                    'focus' => 'Syiar Kreatif, Sastra Islam & Budaya Santun',
                ],
                [
                    'id' => 3,
                    'slug' => 'fummi-fipp',
                    'name' => 'Forum Ukhuwah Mahasiswa Muslim Fakultas Ilmu Pendidikan dan Psikologi',
                    'short_name' => 'FUMMI FIPP',
                    'type' => 'ldf',
                    'type_label' => 'Lembaga Dakwah Fakultas',
                    'faculty' => 'Fakultas Ilmu Pendidikan dan Psikologi (FIPP)',
                    'faculty_short' => 'FIPP',
                    'cluster' => 'Pendidikan & Psikologi',
                    'desc' => 'Wadah pembinaan karakter pendidik muslim, penguatan ukhuwah civitas akademika kependidikan, dan syiar edukatif di lingkungan FIPP.',
                    'focus' => 'Pendidikan Karakter & Pedagogi Islami',
                ],
                [
                    'id' => 4,
                    'slug' => 'kim-fik',
                    'name' => 'Keluarga Islam Mahasiswa Fakultas Ilmu Keolahragaan',
                    'short_name' => 'KIM FIK',
                    'type' => 'ldf',
                    'type_label' => 'Lembaga Dakwah Fakultas',
                    'faculty' => 'Fakultas Ilmu Keolahragaan (FIK)',
                    'faculty_short' => 'FIK',
                    'cluster' => 'Olahraga & Kesehatan',
                    'desc' => 'Menghimpun mahasiswa keolahragaan dalam integrasi nilai sportivitas islami, kebugaran jasmani, dan keteguhan ruhiyah aktivis dakwah.',
                    'focus' => 'Sportivitas Islami & Gaya Hidup Sehat Sunnah',
                ],
                [
                    'id' => 5,
                    'slug' => 'ristek-ft',
                    'name' => 'Kerohanian Islam Teknik',
                    'short_name' => 'RISTEK FT',
                    'type' => 'ldf',
                    'type_label' => 'Lembaga Dakwah Fakultas',
                    'faculty' => 'Fakultas Teknik (FT)',
                    'faculty_short' => 'FT',
                    'cluster' => 'Teknik & Rekayasa',
                    'desc' => 'Pusat pergerakan dakwah keteknikan yang memadukan keahlian teknologi dengan integritas moral, etika insinyur muslim, dan syiar solutif.',
                    'focus' => 'Sains Terapan & Dakwah Keteknikan Solutif',
                ],
                [
                    'id' => 6,
                    'slug' => 'kifh',
                    'name' => 'Keluarga Islam Fakultas Hukum',
                    'short_name' => 'KIFH',
                    'type' => 'ldf',
                    'type_label' => 'Lembaga Dakwah Fakultas',
                    'faculty' => 'Fakultas Hukum (FH)',
                    'faculty_short' => 'FH',
                    'cluster' => 'Hukum & Keadilan',
                    'desc' => 'Komunitas dakwah mahasiswa hukum UNNES yang berfokus pada advokasi keadilan, penanaman syariat, dan etika hukum profetik di kampus.',
                    'focus' => 'Kajian Fikih Kontemporer & Advokasi Kebajikan',
                ],
                [
                    'id' => 7,
                    'slug' => 'kifs-fisip',
                    'name' => 'Kerohanian Islam Ilmu Sosial dan Ilmu Poitik',
                    'short_name' => 'KIFS FISIP',
                    'type' => 'ldf',
                    'type_label' => 'Lembaga Dakwah Fakultas',
                    'faculty' => 'Fakultas Ilmu Sosial dan Ilmu Politik (FISIP)',
                    'faculty_short' => 'FISIP',
                    'cluster' => 'Sosial & Politik',
                    'desc' => 'Penggerak dakwah sosial-politik kampus yang responsif, berwawasan kebangsaan rahmatan lil alamin, dan memperkokoh kepedulian keumatan.',
                    'focus' => 'Kajian Sosial Keumatan & Kepedulian Publik',
                ],
                [
                    'id' => 8,
                    'slug' => 'eksis-feb',
                    'name' => 'Ekonomi Syiar Islam Fakultas Ekonomi dan Bisnis',
                    'short_name' => 'EKSIS FEB',
                    'type' => 'ldf',
                    'type_label' => 'Lembaga Dakwah Fakultas',
                    'faculty' => 'Fakultas Ekonomi dan Bisnis (FEB)',
                    'faculty_short' => 'FEB',
                    'cluster' => 'Ekonomi & Bisnis',
                    'desc' => 'Lembaga dakwah ekonomi yang mengedukasi literasi ekonomi syariah, kewirausahaan islami, dan pembinaan kader akademisi ekonomi berintegritas.',
                    'focus' => 'Literasi Ekonomi Syariah & Entrepreneurship',
                ],
                [
                    'id' => 9,
                    'slug' => 'fmi-fmipa',
                    'name' => 'Forum Mahasiswa Islam Fakultas Matematika dan Ilmu Pengetahuan Alam',
                    'short_name' => 'FMI FMIPA',
                    'type' => 'ldf',
                    'type_label' => 'Lembaga Dakwah Fakultas',
                    'faculty' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam (FMIPA)',
                    'faculty_short' => 'FMIPA',
                    'cluster' => 'MIPA & Sains Alam',
                    'desc' => 'Wadah sinergi dan penguatan tsaqafah mahasiswa MIPA dalam mentadabburi ayat-ayat kauniyah dan membumikan sains berbasis tauhid.',
                    'focus' => 'Tadabbur Ayat Kauniyah & Integrasi Sains-Islam',
                ],
            ],
            'ldj' => [
                [
                    'id' => 1,
                    'slug' => 'sigma',
                    'name' => 'SIGMA (Study Islamic Group of Mathematics)',
                    'short_name' => 'SIGMA',
                    'fullName_display' => 'Study Islamic Group of Mathematics',
                    'type' => 'ldj',
                    'type_label' => 'Lembaga Dakwah Jurusan',
                    'faculty' => 'Jurusan Matematika - FMIPA',
                    'faculty_short' => 'Matematika',
                    'desc' => 'Komunitas studi Islam dan kerohanian mahasiswa matematika yang memadukan ketajaman analisis logika dengan keluhuran akhlak islami.',
                    'focus' => 'Kajian Keislaman & Lingkar Belajar Matematika',
                ],
                [
                    'id' => 2,
                    'slug' => 'fkif',
                    'name' => 'FKIF',
                    'short_name' => 'FKIF',
                    'fullName_display' => 'Forum Kajian Islam Fisika',
                    'type' => 'ldj',
                    'type_label' => 'Lembaga Dakwah Jurusan',
                    'faculty' => 'Jurusan Fisika - FMIPA',
                    'faculty_short' => 'Fisika',
                    'desc' => 'Badan semi otonom kerohanian Islam jurusan fisika yang membina spiritualitas civitas fisika dan tadabbur kebesaran ciptaan Allah lewat sains.',
                    'focus' => 'Kajian Rutin Fisika Islami & Tadabbur Alam',
                ],
                [
                    'id' => 3,
                    'slug' => 'ski',
                    'name' => 'SKI',
                    'short_name' => 'SKI',
                    'fullName_display' => 'Studi Kerohanian Islam',
                    'type' => 'ldj',
                    'type_label' => 'Lembaga Dakwah Jurusan',
                    'faculty' => 'Jurusan Kimia - FMIPA',
                    'faculty_short' => 'Kimia',
                    'desc' => 'Wadah pembinaan rohani mahasiswa kimia dalam mempererat ukhuwah, menghidupkan majelis ilmu, dan pengabdian kebaikan di tingkat jurusan.',
                    'focus' => 'Pembinaan Ruhiyah & Mentoring Jurusan',
                ],
                [
                    'id' => 4,
                    'slug' => 'familia',
                    'name' => 'Familia',
                    'short_name' => 'Familia',
                    'fullName_display' => 'Forum Silaturahmi Mahasiswa Muslim Biologi',
                    'type' => 'ldj',
                    'type_label' => 'Lembaga Dakwah Jurusan',
                    'faculty' => 'Jurusan Biologi - FMIPA',
                    'faculty_short' => 'Biologi',
                    'desc' => 'Lembaga dakwah jurusan biologi yang berfokus pada ukhuwah harmonis keluarga muslim, tadabbur ciptaan hayati, dan syiar ramah lingkungan.',
                    'focus' => 'Ukhuwah Kekeluargaan & Konservasi Nilai Islam',
                ],
                [
                    'id' => 5,
                    'slug' => 'al-usna',
                    'name' => 'Al-Usna',
                    'short_name' => 'Al-Usna',
                    'fullName_display' => 'Kerohanian Islam Pendidikan IPA',
                    'type' => 'ldj',
                    'type_label' => 'Lembaga Dakwah Jurusan',
                    'faculty' => 'Jurusan IPA Terpadu - FMIPA',
                    'faculty_short' => 'IPA Terpadu',
                    'desc' => 'Wadah kerohanian Islam mahasiswa IPA Terpadu yang mencetak calon pendidik sains berkarakter religius serta mengintegrasikan sains dan nilai tauhid.',
                    'focus' => 'Integrasi Sains-Agama & Edukasi Keislaman',
                ],
                [
                    'id' => 6,
                    'slug' => 'morse',
                    'name' => 'Morse',
                    'short_name' => 'Morse',
                    'fullName_display' => 'Muslim of Robotic and Software Engineering',
                    'type' => 'ldj',
                    'type_label' => 'Lembaga Dakwah Jurusan',
                    'faculty' => 'Rumpun Rekayasa & Keteknikan',
                    'faculty_short' => 'Teknik / Rekayasa',
                    'desc' => 'Komunitas kerohanian Islam mahasiswa bidang rekayasa dan teknologi informasi untuk saling menguatkan dalam dakwah digital dan karya inovatif.',
                    'focus' => 'Karakter Muslim Era Digital & Karya Inovasi',
                ],
                [
                    'id' => 7,
                    'slug' => 'firdaus',
                    'name' => 'Firdaus',
                    'short_name' => 'Firdaus',
                    'fullName_display' => 'Forum Studi Islam Jurusan',
                    'type' => 'ldj',
                    'type_label' => 'Lembaga Dakwah Jurusan',
                    'faculty' => 'Tingkat Jurusan / Program Studi',
                    'faculty_short' => 'Jurusan',
                    'desc' => 'Kelompok kajian dan pembinaan keislaman yang menaungi mahasiswa di tingkat jurusan untuk menjaga konsistensi ibadah harian dan ukhuwah.',
                    'focus' => 'Kajian Fikih Ibadah & Penguatan Akhlak',
                ],
                [
                    'id' => 8,
                    'slug' => 'obesesi',
                    'name' => 'Obesesi',
                    'short_name' => 'Obesesi',
                    'fullName_display' => 'Organisasi Bimbingan & Edukasi Studi Islam',
                    'type' => 'ldj',
                    'type_label' => 'Lembaga Dakwah Jurusan',
                    'faculty' => 'Tingkat Jurusan / Program Studi',
                    'faculty_short' => 'Jurusan',
                    'desc' => 'Wadah bimbingan edukasi Islam bagi mahasiswa jurusan dalam mengasah pemahaman agama, akhlak karimah, dan kepedulian sosial kemahasiswaan.',
                    'focus' => 'Bimbingan Keagamaan & Mentoring Sebaya',
                ],
                [
                    'id' => 9,
                    'slug' => 'kalimasada',
                    'name' => 'Kalimasada',
                    'short_name' => 'Kalimasada',
                    'fullName_display' => 'Keluarga Mahasiswa Islam Studi Terpadu',
                    'type' => 'ldj',
                    'type_label' => 'Lembaga Dakwah Jurusan',
                    'faculty' => 'Tingkat Jurusan / Program Studi',
                    'faculty_short' => 'Jurusan',
                    'desc' => 'Komunitas kerohanian Islam yang berlandaskan ukhuwah, kajian tematik mahasiswa, dan keterlibatan aktif dalam syiar kampus yang bersahabat.',
                    'focus' => 'Silaturahmi Lintas Angkatan & Majelis Ilmu',
                ],
            ]
        ];
    }

    public function lembaga(): View
    {
        $lembagaData = $this->getLembagaData();

        return view('pages.lembaga', [
            'pageTitle' => 'Lembaga Dakwah UNNES',
            'activePage' => 'lembaga',
            'ldfList' => $lembagaData['ldf'],
            'ldjList' => $lembagaData['ldj'],
        ]);
    }

    public function storeUkki(): View
    {
        return view('pages.store-ukki', [
            'pageTitle' => 'Store UKKI & Peminjaman Inventaris',
            'activePage' => 'store-ukki'
        ]);
    }

    public function donasi(): View
    {
        return view('pages.donasi', [
            'pageTitle' => 'Donasi Dakwah UKKI UNNES',
            'activePage' => 'donasi'
        ]);
    }

    public function lainnya(): View
    {
        return view('pages.lainnya', [
            'pageTitle' => 'Lainnya - UKKI UNNES',
            'activePage' => 'lainnya'
        ]);
    }
}
