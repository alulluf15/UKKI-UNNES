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
        $kegiatanData = $this->getKegiatanData();
        return view('pages.kegiatan', [
            'kegiatanData' => $kegiatanData,
            'pageTitle' => 'Kegiatan & Agenda - UKKI UNNES',
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
                'logo' => '/assets/img/departemen/dna-cover.jpg',
                'cover' => '/assets/img/departemen/dna.jpg',
                'narration' => 'Biro DNA (Data dan Analisis) hadir sebagai pusat data strategis yang mengelola, menganalisis, dan menyajikan informasi guna mendukung pengambilan kebijakan serta arah gerak UKKI yang lebih terarah dan berdampak.',
                'members_images' => [
                    [
                        'src' => '/assets/img/departemen/dna-anggota-1.jpg',
                        'title' => 'Formasi Pimpinan & Staf Biro DnA (Bagian 1)',
                        'desc' => 'Rumaisha Kariemah (Kepala Biro), Zulfa Khusniyah (Sekretaris Biro), Shofi Syahidah Fathimah (Staf)',
                    ],
                    [
                        'src' => '/assets/img/departemen/dna-anggota-2.jpg',
                        'title' => 'Formasi Staf Biro DnA (Bagian 2)',
                        'desc' => 'Marsabila Antikasari (Staf Biro), Marselia Dewi Anggraeni (Staf Biro)',
                    ],
                ],
                'people' => [
                    [
                        'group' => 'Pimpinan Biro',
                        'members' => [
                            ['name' => 'Rumaisha Kariemah', 'position' => 'Kepala Biro DnA', 'major' => 'Arsitektur 2022'],
                            ['name' => 'Zulfa Khusniyah', 'position' => 'Sekretaris Biro DnA', 'major' => 'Arsitektur 2024'],
                        ]
                    ],
                    [
                        'group' => 'Staf Biro DnA',
                        'members' => [
                            ['name' => 'Shofi Syahidah Fathimah', 'position' => 'Staff Biro DnA', 'major' => 'Pend. Tata Boga 2025'],
                            ['name' => 'Marsabila Antikasari', 'position' => 'Staff Biro DnA', 'major' => 'Ekonomi Pembangunan 2023'],
                            ['name' => 'Marselia Dewi Anggraeni', 'position' => 'Staff Biro DnA', 'major' => 'Pend. Tata Kecantikan 2025'],
                        ]
                    ]
                ],
                'posters' => [
                    ['title' => 'Poster Bersama Biro DnA', 'src' => '/assets/img/departemen/dna-cover.jpg', 'caption' => 'Biro Data dan Analisis - Kabinet Satu Simfoni'],
                    ['title' => 'Poster Formasi Anggota (Bagian 1)', 'src' => '/assets/img/departemen/dna-anggota-1.jpg', 'caption' => 'Rumaisha Kariemah, Zulfa Khusniyah, Shofi Syahidah Fathimah'],
                    ['title' => 'Poster Formasi Anggota (Bagian 2)', 'src' => '/assets/img/departemen/dna-anggota-2.jpg', 'caption' => 'Marsabila Antikasari, Marselia Dewi Anggraeni'],
                ],
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
                'logo' => '/assets/img/departemen/mio-cover.jpg',
                'cover' => '/assets/img/departemen/mio.jpg',
                'narration' => 'Biro MIO berperan dalam memperkuat ukhuwah internal, mendukung koordinasi antar pengurus, serta melakukan monitoring dan evaluasi kinerja guna meningkatkan efektivitas organisasi.',
                'members_images' => [
                    [
                        'src' => '/assets/img/departemen/mio-anggota-1.jpg',
                        'title' => 'Formasi Anggota Biro MIO',
                        'desc' => "Arinal Haq Zhahira (Kepala Biro), Azka Fauziyah (Sekretaris Biro), Lu'lu' Yazidatul Chasanah (Staff), Yusuf Abdurrahman Faiz (Staff)",
                    ],
                ],
                'people' => [
                    [
                        'group' => 'Pimpinan Biro',
                        'members' => [
                            ['name' => 'Arinal Haq Zhahira', 'position' => 'Kepala Biro MIO', 'major' => 'PG PAUD 2022'],
                            ['name' => 'Azka Fauziyah', 'position' => 'Sekretaris Biro MIO', 'major' => 'Psikologi 2023'],
                        ]
                    ],
                    [
                        'group' => 'Staf Biro MIO',
                        'members' => [
                            ['name' => "Lu'lu' Yazidatul Chasanah", 'position' => 'Staff Biro MIO', 'major' => 'Pend. Tata Boga 2024'],
                            ['name' => 'Yusuf Abdurrahman Faiz', 'position' => 'Staff Biro MIO', 'major' => 'Ilmu Hukum 2024'],
                        ]
                    ]
                ],
                'posters' => [
                    ['title' => 'Poster Bersama Biro MIO', 'src' => '/assets/img/departemen/mio-cover.jpg', 'caption' => 'Biro Manajemen Internal Organisasi - Kabinet Satu Simfoni'],
                    ['title' => 'Poster Formasi Anggota Biro MIO', 'src' => '/assets/img/departemen/mio-anggota-1.jpg', 'caption' => "Arinal Haq Zhahira, Azka Fauziyah, Lu'lu' Yazidatul Chasanah, Yusuf Abdurrahman Faiz"],
                ],
            ],
            [
                'id' => 4,
                'slug' => 'training',
                'name' => 'Biro Training',
                'short_name' => 'Training',
                'type' => 'biro',
                'type_label' => 'Biro',
                'badge_class' => 'badge-biro',
                'desc' => 'Biro Training berperan dalam membangun sistem pelatihan kader yang berkelanjutan, terarah, dan profesional guna mencetak trainer serta kader dakwah yang berkualitas dan berdampak di lingkungan kampus.',
                'tagline' => 'Membangun Sistem Pelatihan Kader Berkelanjutan & Profesional',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => '/assets/img/departemen/training.jpg',
                'cover' => '/assets/img/departemen/training.jpg',
                'narration' => 'Biro Training berperan dalam membangun sistem pelatihan kader yang berkelanjutan, terarah, dan profesional guna mencetak trainer serta kader dakwah yang berkualitas dan berdampak di lingkungan kampus.',
                'members_images' => [
                    ['src' => '/assets/img/departemen/training-anggota-1.jpg', 'title' => 'Formasi Anggota Biro Training (Bagian 1)', 'desc' => 'Zahrona Luqmana Al-Fafa, Raihanah Jilan Nuha, Desnita Setya Nugraheni'],
                    ['src' => '/assets/img/departemen/training-anggota-2.jpg', 'title' => 'Formasi Anggota Biro Training (Bagian 2)', 'desc' => 'Silvia Rahmadani, Hanum Salsabila'],
                ],
                'personalia' => [
                    [
                        'group' => 'Pimpinan Biro Training',
                        'members' => [
                            ['name' => 'Zahrona Luqmana Al-Fafa', 'position' => 'Kepala Biro Training', 'major' => 'Ilmu Fisika 2023'],
                            ['name' => 'Raihanah Jilan Nuha', 'position' => 'Sekretaris Biro Training', 'major' => 'Ilmu Kimia 2023'],
                        ]
                    ],
                    [
                        'group' => 'Staf Biro Training',
                        'members' => [
                            ['name' => 'Desnita Setya Nugraheni', 'position' => 'Staff Biro Training', 'major' => 'Pend. Bahasa Jawa 2023'],
                            ['name' => 'Silvia Rahmadani', 'position' => 'Staff Biro Training', 'major' => 'PGSD 2024'],
                            ['name' => 'Hanum Salsabila', 'position' => 'Staff Biro Training', 'major' => 'PPKn 2023'],
                        ]
                    ]
                ],
                'posters' => [
                    ['title' => 'Poster Bersama Biro Training', 'src' => '/assets/img/departemen/training-cover.jpg', 'caption' => 'Biro Training - Kabinet Satu Simfoni'],
                    ['title' => 'Poster Formasi Anggota (Bagian 1)', 'src' => '/assets/img/departemen/training-anggota-1.jpg', 'caption' => 'Zahrona Luqmana Al-Fafa, Raihanah Jilan Nuha, Desnita Setya Nugraheni'],
                    ['title' => 'Poster Formasi Anggota (Bagian 2)', 'src' => '/assets/img/departemen/training-anggota-2.jpg', 'caption' => 'Silvia Rahmadani, Hanum Salsabila'],
                ],
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
                'logo' => '/assets/img/departemen/kaderisasi.png',
                'cover' => '/assets/img/departemen/kaderisasi.png',
                'structure' => null,
                'members_images' => [],
                'personalia' => [],
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
                'logo' => '/assets/img/departemen/pembinaan.png',
                'cover' => '/assets/img/departemen/pembinaan.png',
                'structure' => null,
                'members_images' => [],
                'personalia' => [],
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
                'logo' => '/assets/img/departemen/syiar.png',
                'cover' => '/assets/img/departemen/syiar.png',
                'structure' => null,
                'members_images' => [],
                'personalia' => [],
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
                'logo' => '/assets/img/departemen/pelayanan-umat.png',
                'cover' => '/assets/img/departemen/pelayanan-umat.png',
                'structure' => null,
                'members_images' => [],
                'personalia' => [],
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
                'desc' => 'Departemen Kominfo mensyiarkan konten dakwah yang informatif dan kreatif melalui media digital serta menjadi pusat publikasi kegiatan UKKI. Dengan pemanfaatan teknologi, Kominfo memperluas jangkauan dakwah dan memperkuat branding organisasi.',
                'tagline' => 'Kreatif Menyapa, Bijak Menyampaikan Makna',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => '/assets/img/departemen/kominfo.jpg',
                'cover' => '/assets/img/departemen/kominfo.jpg',
                'narration' => 'Departemen Kominfo mensyiarkan konten dakwah yang informatif dan kreatif melalui media digital serta menjadi pusat publikasi kegiatan UKKI. Dengan pemanfaatan teknologi, Kominfo memperluas jangkauan dakwah dan memperkuat branding organisasi.',
                'members_images' => [
                    ['src' => '/assets/img/departemen/kominfo-anggota-1.jpg', 'title' => 'Formasi Anggota Departemen Kominfo (Bagian 1)', 'desc' => 'Nandini Fathul Firdaus, Nadzifa Amalia Hannissaa, Maulidya Halim Mabruroh'],
                    ['src' => '/assets/img/departemen/kominfo-anggota-2.jpg', 'title' => 'Formasi Anggota Departemen Kominfo (Bagian 2)', 'desc' => 'Aisyah Azkannisa Rahman, Stivany Gracea Gibrania, Fauzan Abdillah Khatami'],
                ],
                'personalia' => [
                    [
                        'group' => 'Pimpinan Departemen Kominfo',
                        'members' => [
                            ['name' => 'Nandini Fathul Firdaus', 'position' => 'Kepala Departemen Kominfo', 'major' => 'Pend. Bahasa Arab 2023'],
                            ['name' => 'Nadzifa Amalia Hannissaa', 'position' => 'Sekretaris Departemen Kominfo', 'major' => 'Pend. Bahasa Inggris 2023'],
                        ]
                    ],
                    [
                        'group' => 'Staf Departemen Kominfo',
                        'members' => [
                            ['name' => 'Maulidya Halim Mabruroh', 'position' => 'Staff Departemen Kominfo', 'major' => 'PG PAUD 2024'],
                            ['name' => 'Aisyah Azkannisa Rahman', 'position' => 'Staff Departemen Kominfo', 'major' => 'Pend. Bahasa Arab 2024'],
                            ['name' => 'Stivany Gracea Gibrania', 'position' => 'Staff Departemen Kominfo', 'major' => 'Sastra Indonesia 2023'],
                            ['name' => 'Fauzan Abdillah Khatami', 'position' => 'Staff Departemen Kominfo', 'major' => 'Teknologi Pendidikan 2023'],
                        ]
                    ]
                ],
                'posters' => [
                    ['title' => 'Poster Bersama Departemen Kominfo', 'src' => '/assets/img/departemen/kominfo-cover.jpg', 'caption' => 'Departemen Kominfo - Kabinet Satu Simfoni'],
                    ['title' => 'Poster Formasi Anggota (Bagian 1)', 'src' => '/assets/img/departemen/kominfo-anggota-1.jpg', 'caption' => 'Nandini Fathul Firdaus, Nadzifa Amalia Hannissaa, Maulidya Halim Mabruroh'],
                    ['title' => 'Poster Formasi Anggota (Bagian 2)', 'src' => '/assets/img/departemen/kominfo-anggota-2.jpg', 'caption' => 'Aisyah Azkannisa Rahman, Stivany Gracea Gibrania, Fauzan Abdillah Khatami'],
                ],
            ],
            [
                'id' => 10,
                'slug' => 'kemuslimahan',
                'name' => 'Departemen Kemuslimahan',
                'short_name' => 'Kemuslimahan',
                'type' => 'departemen',
                'type_label' => 'Departemen',
                'badge_class' => 'badge-departemen',
                'desc' => 'Departemen Kemuslimahan berfokus pada pembinaan dan pemberdayaan muslimah melalui pembelajaran Islam, penguatan akhlak, serta pengembangan potensi diri agar siap berdakwah dan memberi manfaat di kampus maupun masyarakat.',
                'tagline' => 'Anggun dalam Akhlak, Cerdas dalam Karya',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => '/assets/img/departemen/kemuslimahan.jpg',
                'cover' => '/assets/img/departemen/kemuslimahan.jpg',
                'narration' => 'Departemen Kemuslimahan berfokus pada pembinaan dan pemberdayaan muslimah melalui pembelajaran Islam, penguatan akhlak, serta pengembangan potensi diri agar siap berdakwah dan memberi manfaat di kampus maupun masyarakat.',
                'members_images' => [
                    ['src' => '/assets/img/departemen/kemuslimahan-anggota-1.jpg', 'title' => 'Formasi Anggota Departemen Kemuslimahan (Bagian 1)', 'desc' => 'Ony Wulan Rahmasari, Averina Dewi Amanda, Indah Rahmawati'],
                    ['src' => '/assets/img/departemen/kemuslimahan-anggota-2.jpg', 'title' => 'Formasi Anggota Departemen Kemuslimahan (Bagian 2)', 'desc' => 'Salsabila Anjani Putri, Nurul Fauziah, Fatimah Nasya Auliya'],
                ],
                'personalia' => [
                    [
                        'group' => 'Pimpinan Departemen Kemuslimahan',
                        'members' => [
                            ['name' => 'Ony Wulan Rahmasari', 'position' => 'Kepala Departemen Kemuslimahan', 'major' => 'Pend. Geografi 2023'],
                            ['name' => 'Averina Dewi Amanda', 'position' => 'Sekretaris Departemen Kemuslimahan', 'major' => 'Pend. Kepelatihan Olahraga 2023'],
                        ]
                    ],
                    [
                        'group' => 'Staf Departemen Kemuslimahan',
                        'members' => [
                            ['name' => 'Indah Rahmawati', 'position' => 'Staff Departemen Kemuslimahan', 'major' => 'Pend. IPS 2024'],
                            ['name' => 'Salsabila Anjani Putri', 'position' => 'Staff Departemen Kemuslimahan', 'major' => 'PPKn 2024'],
                            ['name' => 'Nurul Fauziah', 'position' => 'Staff Departemen Kemuslimahan', 'major' => 'Pend. Sosiologi dan Antropologi 2023'],
                            ['name' => 'Fatimah Nasya Auliya', 'position' => 'Staff Departemen Kemuslimahan', 'major' => 'Psikologi 2025'],
                        ]
                    ]
                ],
                'posters' => [
                    ['title' => 'Poster Bersama Departemen Kemuslimahan', 'src' => '/assets/img/departemen/kemuslimahan-cover.jpg', 'caption' => 'Departemen Kemuslimahan - Kabinet Satu Simfoni'],
                    ['title' => 'Poster Formasi Anggota (Bagian 1)', 'src' => '/assets/img/departemen/kemuslimahan-anggota-1.jpg', 'caption' => 'Ony Wulan Rahmasari, Averina Dewi Amanda, Indah Rahmawati'],
                    ['title' => 'Poster Formasi Anggota (Bagian 2)', 'src' => '/assets/img/departemen/kemuslimahan-anggota-2.jpg', 'caption' => 'Salsabila Anjani Putri, Nurul Fauziah, Fatimah Nasya Auliya'],
                ],
            ],
            [
                'id' => 11,
                'slug' => 'mentoring',
                'name' => 'Departemen Mentoring',
                'short_name' => 'Mentoring',
                'type' => 'departemen',
                'type_label' => 'Departemen',
                'badge_class' => 'badge-departemen',
                'desc' => 'Departemen Mentoring berfokus pada pembinaan Mahasiswa Baru UNNES melalui kegiatan seperti asistensi PAI guna menumbuhkan pemahaman Islam yang baik. Selain itu, departemen ini melakukan monitoring dan evaluasi untuk memastikan keberjalanan program yang optimal dan berkelanjutan.',
                'tagline' => 'Rangkul Sahabat Baru dalam Dekapan Dakwah',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => '/assets/img/departemen/mentoring.jpg',
                'cover' => '/assets/img/departemen/mentoring.jpg',
                'narration' => 'Departemen Mentoring berfokus pada pembinaan Mahasiswa Baru UNNES melalui kegiatan seperti asistensi PAI guna menumbuhkan pemahaman Islam yang baik. Selain itu, departemen ini melakukan monitoring dan evaluasi untuk memastikan keberjalanan program yang optimal dan berkelanjutan.',
                'members_images' => [
                    ['src' => '/assets/img/departemen/mentoring-anggota-1.jpg', 'title' => 'Formasi Anggota Departemen Mentoring (Bagian 1)', 'desc' => 'Rantisi Syahidah, Maisa Lutfia Rahman, Shofiy Nur Fadilah'],
                    ['src' => '/assets/img/departemen/mentoring-anggota-2.jpg', 'title' => 'Formasi Anggota Departemen Mentoring (Bagian 2)', 'desc' => 'Lulu Fauziyah, Nasya Aulia Putri'],
                ],
                'personalia' => [
                    [
                        'group' => 'Pimpinan Departemen Mentoring',
                        'members' => [
                            ['name' => 'Rantisi Syahidah', 'position' => 'Kepala Departemen Mentoring', 'major' => 'Ilmu Hukum 2023'],
                            ['name' => 'Maisa Lutfia Rahman', 'position' => 'Sekretaris Departemen Mentoring', 'major' => 'Pend. Teknik Informatika 2024'],
                        ]
                    ],
                    [
                        'group' => 'Staf Departemen Mentoring',
                        'members' => [
                            ['name' => 'Shofiy Nur Fadilah', 'position' => 'Staff Departemen Mentoring', 'major' => 'Teknik Sipil 2024'],
                            ['name' => 'Lulu Fauziyah', 'position' => 'Staff Departemen Mentoring', 'major' => 'Teknik Komputer 2024'],
                            ['name' => 'Nasya Aulia Putri', 'position' => 'Staff Departemen Mentoring', 'major' => 'Pend. Kimia 2025'],
                        ]
                    ]
                ],
                'posters' => [
                    ['title' => 'Poster Bersama Departemen Mentoring', 'src' => '/assets/img/departemen/mentoring-cover.jpg', 'caption' => 'Departemen Mentoring - Kabinet Satu Simfoni'],
                    ['title' => 'Poster Formasi Anggota (Bagian 1)', 'src' => '/assets/img/departemen/mentoring-anggota-1.jpg', 'caption' => 'Rantisi Syahidah, Maisa Lutfia Rahman, Shofiy Nur Fadilah'],
                    ['title' => 'Poster Formasi Anggota (Bagian 2)', 'src' => '/assets/img/departemen/mentoring-anggota-2.jpg', 'caption' => 'Lulu Fauziyah, Nasya Aulia Putri'],
                ],
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
                'logo' => '/assets/img/departemen/kajian-strategis.png',
                'cover' => '/assets/img/departemen/kajian-strategis.png',
                'structure' => null,
                'members_images' => [],
                'personalia' => [],
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
                'desc' => 'Departemen Ekraf berperan dalam menjalin kerjasama eksternal serta mengembangkan unit usaha sebagai sarana fundraising guna mendukung keberlangsungan program kerja dan kemandirian finansial UKKI.',
                'tagline' => 'Mandiri Finansial, Berdaya untuk Dakwah',
                'kabinet' => 'Kabinet Satu Simfoni',
                'logo' => '/assets/img/departemen/ekonomi-kreatif.jpg',
                'cover' => '/assets/img/departemen/ekonomi-kreatif.jpg',
                'narration' => 'Departemen Ekraf berperan dalam menjalin kerjasama eksternal serta mengembangkan unit usaha sebagai sarana fundraising guna mendukung keberlangsungan program kerja dan kemandirian finansial UKKI.',
                'members_images' => [
                    ['src' => '/assets/img/departemen/ekonomi-kreatif-anggota-1.jpg', 'title' => 'Formasi Anggota Departemen Ekraf (Bagian 1)', 'desc' => 'Irsyad Zidan Arrifqi, Hana Syakira, Lailia Bunga Nirmala, Nur Malikah'],
                    ['src' => '/assets/img/departemen/ekonomi-kreatif-anggota-2.jpg', 'title' => 'Formasi Anggota Departemen Ekraf (Bagian 2)', 'desc' => 'Shalsa Shabira Rahardjo, Kayla Nur Fadhila, Hasna Miki Rifdahtunnisa'],
                ],
                'personalia' => [
                    [
                        'group' => 'Pimpinan Departemen Ekonomi Kreatif',
                        'members' => [
                            ['name' => 'Irsyad Zidan Arrifqi', 'position' => 'Kepala Departemen Ekraf', 'major' => 'Ekonomi dan Keuangan Islam 2023'],
                            ['name' => 'Hana Syakira', 'position' => 'Sekretaris Departemen Ekraf', 'major' => 'Manajemen 2023'],
                        ]
                    ],
                    [
                        'group' => 'Staf Departemen Ekonomi Kreatif',
                        'members' => [
                            ['name' => 'Lailia Bunga Nirmala', 'position' => 'Staff Departemen Ekraf', 'major' => 'Pend. Bahasa Arab'],
                            ['name' => 'Nur Malikah', 'position' => 'Staff Departemen Ekraf', 'major' => 'Psikologi'],
                            ['name' => 'Shalsa Shabira Rahardjo', 'position' => 'Staff Departemen Ekraf', 'major' => 'Pend. Bahasa Arab 2023'],
                            ['name' => 'Kayla Nur Fadhila', 'position' => 'Staff Departemen Ekraf', 'major' => 'Pend. Tata Busana'],
                            ['name' => 'Hasna Miki Rifdahtunnisa', 'position' => 'Staff Departemen Ekraf', 'major' => 'Pend. Bahasa Arab'],
                        ]
                    ]
                ],
                'posters' => [
                    ['title' => 'Poster Bersama Departemen Ekonomi Kreatif', 'src' => '/assets/img/departemen/ekonomi-kreatif-cover.jpg', 'caption' => 'Departemen Ekraf - Kabinet Satu Simfoni'],
                    ['title' => 'Poster Formasi Anggota (Bagian 1)', 'src' => '/assets/img/departemen/ekonomi-kreatif-anggota-1.jpg', 'caption' => 'Irsyad Zidan Arrifqi, Hana Syakira, Lailia Bunga Nirmala, Nur Malikah'],
                    ['title' => 'Poster Formasi Anggota (Bagian 2)', 'src' => '/assets/img/departemen/ekonomi-kreatif-anggota-2.jpg', 'caption' => 'Shalsa Shabira Rahardjo, Kayla Nur Fadhila, Hasna Miki Rifdahtunnisa'],
                ],
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

    /**
     * Master data kegiatan dan agenda resmi UKKI UNNES
     */
    public function getKegiatanData(): array
    {
        return [
            'bulan_april' => [
                'nama_bulan' => 'April',
                'badge' => 'Bulan Berjalan',
                'items' => [
                    [
                        'id' => 'pkmit-1-akbar',
                        'title' => 'PKMIT 1 Akbar',
                        'badge' => 'Kaderisasi Akbar',
                        'category' => 'Pelatihan & Kepemimpinan',
                        'desc' => 'Kegiatan pelatihan kepemimpinan mahasiswa Islam tingkat 1 yang dilaksanakan serentak melibatkan LDJ, LDF, dan LDK se-UNNES Raya.',
                        'scope' => 'LDJ, LDF, dan LDK se-UNNES Raya',
                        'status' => 'Mendatang',
                    ],
                    [
                        'id' => 'sarasehan-1',
                        'title' => 'Sarasehan 1',
                        'badge' => 'Konsolidasi Dakwah',
                        'category' => 'Sinergi Kelembagaan',
                        'desc' => 'Kegiatan Sarasehan Lembaga Dakwah Kampus se-Unnes Raya untuk mempererat ukhuwah, menyelaraskan persepsi gerak, dan mengokohkan sinergi syiar kampus.',
                        'scope' => 'LDK se-UNNES Raya',
                        'status' => 'Mendatang',
                        'attachment_img' => '/assets/img/kegiatan/sarasehan-1447.jpg',
                    ],
                    [
                        'id' => 'go-toseba-growth-class',
                        'title' => 'Grand Opening TOSEBA x Growth Class',
                        'badge' => 'Mentoring & Kajian',
                        'category' => 'Kajian & Pemberdayaan',
                        'desc' => 'Kajian klasikal sekaligus pembukaan Toseba dan kelas mentoring Lembaga dakwah se-Unnes Raya.',
                        'scope' => 'Lembaga Dakwah se-UNNES Raya',
                        'status' => 'Mendatang',
                        'logo' => '/assets/img/kegiatan/logo-ukki-official.png',
                    ],
                    [
                        'id' => 'training-kaderisasi',
                        'title' => 'Training Kaderisasi',
                        'badge' => 'Pengembangan SDM',
                        'category' => 'Kaderisasi Internal',
                        'desc' => 'Pelatihan untuk membentuk, mendidik, dan mengembangkan anggota organisasi menjadi kader yang kompeten, loyal, dan militan.',
                        'scope' => 'Kader & Fungsionaris UKKI',
                        'status' => 'Mendatang',
                    ],
                    [
                        'id' => 'lokakarya-kaderisasi',
                        'title' => 'Lokakarya Kaderisasi',
                        'badge' => 'Perumusan Sistem',
                        'category' => 'Strategis & Kurikulum',
                        'desc' => 'Pertemuan yang bertujuan merumuskan, mengevaluasi, dan menyepakati sistem kaderisasi kedepannya.',
                        'scope' => 'Fungsionaris Kaderisasi se-UNNES',
                        'status' => 'Mendatang',
                    ],
                    [
                        'id' => 'upgrading-halalbihalal-1',
                        'title' => 'Up Grading dan Halal Bihalal 1',
                        'badge' => 'Harmoni Fungsionaris',
                        'category' => 'Internal Organisasi',
                        'desc' => 'Up grading internal fungsionaris UKKI sekaligus halal bihalal fungsionaris.',
                        'scope' => 'Seluruh Fungsionaris UKKI UNNES',
                        'status' => 'Mendatang',
                    ],
                ],
            ],
            'bulan_september' => [
                'nama_bulan' => 'September',
                'status_label' => 'Soon !!',
                'desc' => 'Agenda kebaikan dan syiar dakwah bulan September akan segera hadir. Pantau terus kanal informasi resmi UKKI UNNES!',
            ],
            'event_spesial' => [
                'title' => 'Event Spesial UKKI',
                'desc' => 'Event Spesial UKKI merupakan program unggulan yang diselenggarakan oleh UKKI Universitas Negeri Semarang sebagai bentuk kontribusi dakwah, edukasi, dan pelayanan umat dalam skala yang lebih luas dan berdampak. Kegiatan ini dirancang secara kreatif dan kolaboratif untuk menyatukan semangat keislaman, kepedulian sosial, dan kebersamaan sivitas akademika maupun masyarakat umum.',
                'quote' => 'Dakwah bukan hanya tentang bicara, tapi tentang gerak, karya, dan keteladanan.',
                'invitation' => 'Mari jadi bagian dari momen spesial ini. Gabung dan tebarkan kebermanfaatan bersama UKKI!',
                'items' => [
                    [
                        'title' => 'GRADIKA (Gema Ramadan di Kampus)',
                        'badge' => 'Syiar Ramadan',
                        'desc' => 'Program syiar tahunan bulan suci Ramadan dengan ragam agenda kebaikan, kajian menjelang berbuka, santunan, dan tarawih bersama di lingkungan kampus.',
                    ],
                    [
                        'title' => 'UNIFAW',
                        'badge' => 'Festival Islami',
                        'desc' => 'Lomba, bazar, dan pentas seni Islami, serta kajian akbar kepalestinaan yang menghimpun seluruh elemen mahasiswa.',
                    ],
                    [
                        'title' => 'Talkshow Kemuslimahan dan Lomba-lomba',
                        'badge' => 'Kemuslimahan',
                        'desc' => 'Pemberdayaan dan edukasi muslimah seputar isu kontemporer, kemandirian karya, serta aneka perlombaan kreatif keputrian.',
                    ],
                    [
                        'title' => 'Kajian Akbar bersama Narasumber Inspiratif',
                        'badge' => 'Kajian Nasional',
                        'desc' => 'Kajian akbar dengan menghadirkan dai dan tokoh inspiratif nasional untuk memperluas cakrawala keilmuan dan ruhiyah mahasiswa.',
                    ],
                    [
                        'title' => 'Aksi Sosial & Pelayanan Umat',
                        'badge' => 'Khidmat Umat',
                        'desc' => 'Aksi nyata kemanusiaan mencakup donor darah, santunan anak yatim dan dhuafa, serta aksi berbagi kebaikan bagi masyarakat.',
                    ],
                    [
                        'title' => 'Peluncuran Program & Gerakan Dakwah Kreatif',
                        'badge' => 'Inovasi Dakwah',
                        'desc' => 'Inisiasi gerakan kebaikan baru, transformasi digital media syiar, serta peresmian sarana penunjang aktivitas dakwah kampus.',
                    ],
                ],
            ],
            'publikasi_kegiatan' => [
                [
                    'title' => 'Pelantikan dan Rapat Kerja',
                    'category' => 'Organisasi',
                    'desc' => 'Pengukuhan resmi pengurus kabinet UKKI UNNES dan penetapan arah kebijakan serta program kerja strategis satu periode.',
                    'badge' => 'Terlaksana',
                ],
                [
                    'title' => 'Temu Perdana',
                    'category' => 'Ukhuwah',
                    'desc' => 'Pertemuan silaturahmi awal fungsionaris UKKI untuk membangun sinergi tim, kehangatan ukhuwah, dan komitmen amanah.',
                    'badge' => 'Terlaksana',
                ],
                [
                    'title' => 'Gradika (Gema Ramadan di Kampus)',
                    'category' => 'Syiar Ramadan',
                    'desc' => 'Rangkaian semarak bulan suci Ramadan di kampus UNNES dengan kajian inspiratif, buka puasa bersama, dan aksi kepedulian umat.',
                    'badge' => 'Terlaksana',
                ],
                [
                    'title' => 'Pesantren Kilat',
                    'category' => 'Edukasi & Pembinaan',
                    'desc' => 'Pembekalan dasar keislaman, tadarus Al-Qur\'an, dan pembinaan adab bagi mahasiswa dan generasi muda.',
                    'badge' => 'Terlaksana',
                ],
                [
                    'title' => 'Aksi Kepalestinaan',
                    'category' => 'Solidaritas Kemanusiaan',
                    'desc' => 'Suara kepedulian sivitas akademika UNNES untuk Palestina melalui edukasi keumatan, doa bersama, dan penyaluran donasi kemanusiaan.',
                    'badge' => 'Terlaksana',
                ],
                [
                    'title' => 'Temu Mentor',
                    'category' => 'Mentoring PAI',
                    'desc' => 'Konsolidasi dan pengarahan mentor PAI se-universitas guna mengawal pendampingan keagamaan mahasiswa baru.',
                    'badge' => 'Terlaksana',
                ],
                [
                    'title' => 'PKMIT 1 Akbar',
                    'category' => 'Kaderisasi',
                    'desc' => 'Pelatihan kepemimpinan mahasiswa Islam tingkat 1 se-UNNES Raya untuk membekali calon aktivis dakwah kampus.',
                    'badge' => 'Terlaksana',
                ],
            ],
            'lampiran' => [
                [
                    'id' => 'sarasehan-1447',
                    'title' => 'Sarasehan 1447/1448 H',
                    'subtitle' => 'Dokumentasi Konsolidasi Lembaga Dakwah se-UNNES Raya',
                    'type' => 'Dokumentasi Foto',
                    'image' => '/assets/img/kegiatan/sarasehan-1447.jpg',
                    'desc' => 'Dokumentasi fungsionaris UKKI UNNES bersama perwakilan pimpinan Lembaga Dakwah Fakultas (LDF) dan Lembaga Dakwah Jurusan (LDJ) se-UNNES Raya dalam forum Sarasehan Akbar di Masjid Ulul Albab UNNES.',
                    'badge' => 'Foto Kegiatan',
                ],
                [
                    'id' => 'go-muslimah-academy',
                    'title' => 'Grand Opening Muslimah Academy',
                    'subtitle' => 'Pusat Pembinaan & Aktualisasi Muslimah Berdaya',
                    'type' => 'Identitas Program',
                    'image' => '/assets/img/kegiatan/logo-ukki-official.png',
                    'desc' => 'Peresmian ruang belajar dan pembinaan berkala bagi mahasiswi muslimah UNNES untuk mendalami adab, keilmuan Islam, kepemimpinan, dan keterampilan mandiri.',
                    'badge' => 'Kemuslimahan',
                ],
                [
                    'id' => 'go-toseba-growth-class',
                    'title' => 'Grand Opening TOSEBA x Growth Class',
                    'subtitle' => 'Sinergi Kemandirian Finansial & Kapasitas Dakwah Kampus',
                    'type' => 'Identitas Program',
                    'image' => '/assets/img/kegiatan/logo-ukki-official.png',
                    'desc' => 'Peluncuran unit kewirausahaan TOSEBA dipadukan dengan kelas mentoring intensif Growth Class untuk menguatkan kompetensi kader dakwah di kampus.',
                    'badge' => 'Ekraf x Mentoring',
                ],
            ],
        ];
    }
}
