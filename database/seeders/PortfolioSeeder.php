<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Certificate;
use App\Models\WorkExperience;
use App\Models\Activity;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Projects
        Project::create([
            'title' => 'Aplikasi Mobile (Kodular)',
            'description' => 'Proyek aplikasi mobile yang dibangun menggunakan platform Kodular, berfokus pada pengalaman pengguna yang intuitif dan fungsionalitas yang responsif.',
            'image' => 'project-img.png',
            'category' => 'mobile',
            'tags' => 'Kodular, Android, Mobile',
            'demo_link' => 'https://kodular.app/GCW-SVU',
            'code_link' => null,
        ]);

        Project::create([
            'title' => 'Sistem Informasi Masjid (SIM)',
            'description' => 'Website untuk manajemen kas masjid, jadwal kajian, inventaris, dan publikasi artikel untuk jamaah sekitar.',
            'image' => 'https://placehold.co/800x500/1a1a2e/00ff88?text=SIM+Masjid',
            'category' => 'fullstack',
            'tags' => 'PHP, Laravel, MySQL',
            'demo_link' => '#',
            'code_link' => '#',
        ]);

        Project::create([
            'title' => 'REST API E-Commerce',
            'description' => 'Layanan backend tangguh dengan autentikasi JWT, manajemen produk, cart, dan sistem checkout. Teruji dengan Postman.',
            'image' => 'https://placehold.co/800x500/1a1a2e/00ff88?text=E-Commerce+API',
            'category' => 'backend',
            'tags' => 'Python, MySQL, REST API',
            'demo_link' => null,
            'code_link' => '#',
        ]);

        Project::create([
            'title' => 'Modern Landing Page',
            'description' => 'Desain landing page responsif dengan animasi smooth scroll dan dark mode, difokuskan pada UI/UX yang elegan.',
            'image' => 'https://placehold.co/800x500/1a1a2e/00ff88?text=Landing+Page+UI',
            'category' => 'frontend',
            'tags' => 'HTML, CSS, JS',
            'demo_link' => '#',
            'code_link' => '#',
        ]);

        // Certificates - Programming
        Certificate::create([
            'title' => 'Advanced Laravel',
            'organization' => 'Udemy / Proweb',
            'image' => 'https://placehold.co/600x400/1a1a2e/00ff88?text=Laravel+Certificate',
            'category' => 'programming',
        ]);

        Certificate::create([
            'title' => 'React Mastery',
            'organization' => 'Dicoding Indonesia',
            'image' => 'https://placehold.co/600x400/1a1a2e/00ff88?text=React+Certificate',
            'category' => 'programming',
        ]);

        Certificate::create([
            'title' => 'Python for Data Science',
            'organization' => 'Coursera',
            'image' => 'https://placehold.co/600x400/1a1a2e/00ff88?text=Python+Certificate',
            'category' => 'programming',
        ]);

        Certificate::create([
            'title' => 'Fullstack Web Development',
            'organization' => 'Bangkit Academy',
            'image' => 'https://placehold.co/600x400/1a1a2e/00ff88?text=Fullstack+Certificate',
            'category' => 'programming',
        ]);

        // Certificates - Academic
        Certificate::create([
            'title' => 'Panitia Pelatihan Public Speaking',
            'organization' => 'Politeknik Indonusa Surakarta',
            'image' => 'row2_1.png',
            'category' => 'academic',
        ]);

        Certificate::create([
            'title' => 'Pelatihan Event Management & Sponsorship',
            'organization' => 'Politeknik Indonusa Surakarta',
            'image' => 'row2_2.jpeg',
            'category' => 'academic',
        ]);

        Certificate::create([
            'title' => 'Visiting Profesor: Big Data Trends',
            'organization' => 'Politeknik Indonusa Surakarta x INTI University',
            'image' => 'row2_3.jpeg',
            'category' => 'academic',
        ]);

        // Work Experiences
        WorkExperience::create([
            'position' => 'Freelance Junior Developer',
            'company' => 'Self-Employed',
            'period' => '2024 - Sekarang',
            'description' => 'Mengerjakan berbagai proyek klien seperti sistem informasi masjid, website portofolio, dan aplikasi mobile. Fokus pada Laravel, Flutter, dan pengembangan REST API yang terstruktur.',
            'tags' => 'Laravel, Flutter, REST API, MySQL',
            'type' => 'freelance',
            'icon' => 'fa-solid fa-laptop-code',
        ]);

        WorkExperience::create([
            'position' => 'Web Developer (Project Based)',
            'company' => 'Politeknik Indonusa Surakarta',
            'period' => '2023 - 2024',
            'description' => 'Berkontribusi dalam pengembangan sistem informasi kampus berbasis web. Menangani desain database, antarmuka pengguna, dan integrasi backend menggunakan PHP & MySQL.',
            'tags' => 'PHP, MySQL, HTML, CSS',
            'type' => 'internship',
            'icon' => 'fa-solid fa-school',
        ]);

        WorkExperience::create([
            'position' => 'Frontend Developer (Bootcamp)',
            'company' => 'Autodidak & Bootcamp Online',
            'period' => '2022 - 2023',
            'description' => 'Menyelesaikan program bootcamp intensif dalam web development. Membangun puluhan mini-project menggunakan HTML, CSS, JavaScript, dan mulai mengenal framework modern seperti React.',
            'tags' => 'HTML, CSS, JavaScript, React',
            'type' => 'self-employed',
            'icon' => 'fa-solid fa-code',
        ]);

        // Activities & Organizations
        Activity::create([
            'title' => 'Ketua Pelaksana Workshop Laravel',
            'organization' => 'Himpunan Mahasiswa Informatika',
            'image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?q=80&w=800&auto=format&fit=crop',
            'summary' => 'Mengkoordinasi acara workshop teknis untuk 100+ peserta mahasiswa.',
            'content' => 'Sebagai Ketua Pelaksana, saya bertanggung jawab atas seluruh rangkaian acara, mulai dari penyusunan materi, pencarian pemateri, hingga koordinasi logistik. Acara ini berhasil menarik minat banyak mahasiswa untuk mendalami framework Laravel dan membangun ekosistem developer di kampus.',
            'date' => 'Desember 2024',
        ]);

        Activity::create([
            'title' => 'Relawan Pengajar IT',
            'organization' => 'Komunitas Literasi Digital',
            'image' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=800&auto=format&fit=crop',
            'summary' => 'Memberikan pelatihan dasar koding untuk anak-anak di panti asuhan.',
            'content' => 'Dalam kegiatan ini, saya mengajarkan dasar-dasar logika pemrograman dan HTML/CSS sederhana. Tujuannya adalah untuk memberikan wawasan tentang dunia teknologi kepada anak-anak sejak dini dan menginspirasi mereka untuk mengeksplorasi potensi di bidang IT.',
            'date' => 'Agustus 2024',
        ]);

        Activity::create([
            'title' => 'Anggota Divisi Pengembangan Bakat',
            'organization' => 'BEM Politeknik Indonusa',
            'image' => 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=800&auto=format&fit=crop',
            'summary' => 'Terlibat dalam pengelolaan program kerja pengembangan kreativitas mahasiswa.',
            'content' => 'Bertanggung jawab dalam merancang dan mengeksekusi program-program kreatif seperti kompetisi koding internal dan diskusi teknologi bulanan. Pengalaman ini mengasah kemampuan kolaborasi tim dan manajemen waktu saya dalam lingkungan organisasi yang dinamis.',
            'date' => '2023 - 2024',
        ]);
    }
}
