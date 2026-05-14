<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Certificate;
use App\Models\WorkExperience;
use App\Models\Activity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data to prevent duplication
        Project::truncate();
        WorkExperience::truncate();
        Certificate::truncate();
        Activity::truncate();

        // 1. Projects (4 Projects Only)
        Project::create([
            'title' => 'SIMARA: Sistem Informasi Masjid Rahayu',
            'description' => 'Website profile dan sistem manajemen informasi masjid yang mencakup jadwal kajian, pengelolaan donasi, dan dokumentasi kegiatan jamaah.',
            'image' => 'project2_simara-img.png',
            'category' => 'fullstack',
            'tags' => 'PHP, Laravel, MySQL',
        ]);

        Project::create([
            'title' => 'Sistem Kasir Coffeshop Temurindu',
            'description' => 'Aplikasi Point of Sale (POS) modern yang dirancang khusus untuk manajemen operasional coffee shop, mulai dari pemesanan hingga laporan keuangan.',
            'image' => 'project3_sistemkasir-img.png',
            'category' => 'fullstack',
            'tags' => 'PHP, Laravel, MySQL, JS',
        ]);

        Project::create([
            'title' => 'Aplikasi Mobile (Kodular)',
            'description' => 'Proyek aplikasi mobile yang dibangun menggunakan platform Kodular, berfokus pada pengalaman pengguna yang intuitif dan fungsionalitas yang responsif.',
            'image' => 'project-img.png',
            'category' => 'mobile',
            'tags' => 'Kodular, Android, Mobile',
            'demo_link' => 'https://kodular.app/GCW-SVU',
        ]);

        Project::create([
            'title' => 'Sistem AI Chatbot Kesehatan Mental Mahasiswa',
            'description' => 'Chatbot berbasis kecerdasan buatan (AI) yang dirancang untuk memberikan dukungan awal dan edukasi mengenai kesehatan mental bagi mahasiswa.',
            'image' => 'https://placehold.co/800x500/1a1a2e/00ff88?text=AI+Chatbot',
            'category' => 'backend',
            'tags' => 'Python, AI, Flask, NLP',
        ]);

        // 2. Work Experiences (Only PRAKERIN)
        WorkExperience::create([
            'position' => 'Teknisi Komputer',
            'company' => 'Internasional Komputer',
            'period' => '10 Juli - 23 Desember 2023',
            'image' => 'experience1.png',
            'description' => 'Bertanggung jawab dalam pemeliharaan perangkat keras dan lunak. Melakukan perakitan PC sesuai spesifikasi, servis rutin komputer klien, instalasi sistem operasi, serta troubleshooting hardware.',
            'tags' => 'Hardware, Troubleshooting, PC Assembly, Software Installation',
            'type' => 'internship',
        ]);

        // 3. Certificates (Programming & Academic)
        Certificate::create([
            'title' => 'Belajar Dasar AI',
            'organization' => 'Dicoding Indonesia',
            'image' => 'row1_1.png',
            'category' => 'programming',
        ]);

        Certificate::create([
            'title' => 'Memulai Pemrograman dengan Python',
            'organization' => 'Dicoding Indonesia',
            'image' => 'row1_2.png',
            'category' => 'programming',
        ]);

        Certificate::create([
            'title' => 'Univet Islamic Event (UIE) - Strategi Islamic Preneur',
            'organization' => 'UKMI Univet Bantara Sukoharjo',
            'image' => 'row2_4.png',
            'category' => 'academic',
        ]);

        Certificate::create([
            'title' => 'Seminar Kewarganegaraan - Media Museum',
            'organization' => 'Politeknun Indonusa Surakarta',
            'image' => 'row2_5.png',
            'category' => 'academic',
        ]);

        Certificate::create([
            'title' => 'Literasi Keuangan - Kelola Keuangan Pribadi',
            'organization' => 'Komunitas Pengusaha TDA Soloraya',
            'image' => 'row2_6.png',
            'category' => 'academic',
        ]);

        Certificate::create([
            'title' => 'Pelatihan Creative Thinking & Content Creator',
            'organization' => 'BEM Politeknik Indonusa Surakarta',
            'image' => 'row2_7.png',
            'category' => 'academic',
        ]);

        // 4. Activities & Organizations (7 Items)
        $activities = [
            [
                'title' => 'PKM Pancasila',
                'organization' => 'Politeknik Indonusa Surakarta',
                'image' => '/activities &orgnizations/PKM Pancasila_25 jan 2026.jpeg',
                'summary' => 'Program Kegiatan Mahasiswa bidang Pancasila pada 25 Januari 2026.',
                'content' => '<p>Program Kegiatan Mahasiswa (PKM) bidang Pendidikan Pancasila yang dilaksanakan pada 25 Januari 2026. Kegiatan ini memperkuat pemahaman dan penghayatan nilai-nilai Pancasila sebagai dasar negara dalam kehidupan bermasyarakat dan bernegara.</p>',
                'date' => '25 Januari 2026',
            ],
            [
                'title' => "Studi Banding LDK IMMI AS-SHAFFAT × UKMI NURUL 'ILMI",
                'organization' => "LDK IMMI AS-SHAFFAT",
                'image' => "/activities &orgnizations/Studi Banding LDK IMMI AS-SHAFFAT X UKMI NURUL 'ILMI 2025.jpeg",
                'summary' => "Studi Banding antara LDK IMMI AS-SHAFFAT and UKMI NURUL 'ILMI tahun 2025.",
                'content' => "<p>Kegiatan Studi Banding yang mempertemukan dua organisasi kemahasiswaan Islam, LDK IMMI AS-SHAFFAT dan UKMI NURUL 'ILMI pada tahun 2025. Kegiatan ini bertujuan untuk berbagi pengalaman, program kerja, dan mempererat tali silaturahmi antar organisasi.</p>",
                'date' => '2025',
            ],
            [
                'title' => 'Panitia Idul Adha 1446 H',
                'organization' => 'LDK IMMI AS-SHAFFAT',
                'image' => '/activities &orgnizations/Panitia Idul Adha 1446 H 7 juni 2025.jpeg',
                'summary' => 'Berperan sebagai panitia kegiatan Idul Adha 1446 H pada 7 Juni 2025.',
                'content' => '<p>Berpartisipasi sebagai panitia dalam kegiatan peringatan Hari Raya Idul Adha 1446 H yang dilaksanakan pada 7 Juni 2025. Kegiatan ini merupakan wujud kepedulian sosial dan kebersamaan dalam lingkungan organisasi kemahasiswaan.</p>',
                'date' => '7 Juni 2025',
            ],
            [
                'title' => 'PKM AI (Artificial Intelligence)',
                'organization' => 'Politeknik Indonusa Surakarta',
                'image' => '/activities &orgnizations/PKM AI 23 jan 2025.jpeg',
                'summary' => 'Program Kegiatan Mahasiswa bidang Kecerdasan Buatan (AI) pada 23 Januari 2025.',
                'content' => '<p>Program Kegiatan Mahasiswa (PKM) bidang Kecerdasan Buatan (Artificial Intelligence) yang dilaksanakan pada 23 Januari 2025. Kegiatan ini membahas perkembangan teknologi AI dan implementasinya dalam kehidupan sehari-hari serta dunia profesional.</p>',
                'date' => '23 Januari 2025',
            ],
            [
                'title' => 'PKM Aplikasi Perkantoran',
                'organization' => 'Politeknik Indonusa Surakarta',
                'image' => '/activities &orgnizations/PKM Aplikasi Perkantoran 21 nov 2024.jpeg',
                'summary' => 'Program Kegiatan Mahasiswa Aplikasi Perkantoran pada 21 November 2024.',
                'content' => '<p>Program Kegiatan Mahasiswa (PKM) bidang Aplikasi Perkantoran yang diselenggarakan pada 21 November 2024. Kegiatan ini meningkatkan kompetensi mahasiswa dalam penggunaan aplikasi perkantoran modern untuk mendukung produktivitas kerja.</p>',
                'date' => '21 November 2024',
            ],
            [
                'title' => 'PKKMB POLINUS Angkatan 2024',
                'organization' => 'Politeknik Indonusa Surakarta',
                'image' => '/activities &orgnizations/PKKMB POLINUS ANGKATAN 2024.jpeg',
                'summary' => 'Pengenalan Kehidupan Kampus bagi Mahasiswa Baru Politeknik Indonusa Surakarta Angkatan 2024.',
                'content' => '<p>Kegiatan Pengenalan Kehidupan Kampus bagi Mahasiswa Baru (PKKMB) di Politeknik Indonusa Surakarta (POLINUS) untuk angkatan 2024. Kegiatan ini bertujuan memperkenalkan lingkungan kampus, budaya akademik, dan organisasi kemahasiswaan kepada mahasiswa baru.</p>',
                'date' => '2024',
            ],
            [
                'title' => 'PRAKERIN Internasional Komputer Solo',
                'organization' => 'Internasional Komputer Solo',
                'image' => '/activities &orgnizations/PRAKERIN INTERNASIONAL KOMPUTER SOLO 2023.jpeg',
                'summary' => 'Praktik Kerja Industri di Internasional Komputer Solo tahun 2023.',
                'content' => '<p>Praktik Kerja Industri (PRAKERIN) yang dilaksanakan di Internasional Komputer Solo pada tahun 2023. Kegiatan ini memberikan pengalaman kerja nyata di bidang teknologi komputer dan informatika.</p>',
                'date' => '2023',
            ],
        ];

        foreach ($activities as $activity) {
            Activity::create($activity);
        }
    }
}
