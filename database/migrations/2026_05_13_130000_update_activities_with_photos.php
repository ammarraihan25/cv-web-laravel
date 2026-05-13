<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Hapus semua data lama
        DB::table('activities')->truncate();

        // Isi dengan data baru dari folder "activities &orgnizations"
        DB::table('activities')->insert([
            [
                'title'        => 'PRAKERIN Internasional Komputer Solo',
                'organization' => 'Internasional Komputer Solo',
                'image'        => '/activities &orgnizations/PRAKERIN INTERNASIONAL KOMPUTER SOLO 2023.jpeg',
                'summary'      => 'Praktik Kerja Industri di Internasional Komputer Solo tahun 2023.',
                'content'      => '<p>Praktik Kerja Industri (PRAKERIN) yang dilaksanakan di Internasional Komputer Solo pada tahun 2023. Kegiatan ini memberikan pengalaman kerja nyata di bidang teknologi komputer dan informatika.</p>',
                'date'         => '2023',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'title'        => 'PKKMB POLINUS Angkatan 2024',
                'organization' => 'Politeknik Indonusa Surakarta',
                'image'        => '/activities &orgnizations/PKKMB POLINUS ANGKATAN 2024.jpeg',
                'summary'      => 'Pengenalan Kehidupan Kampus bagi Mahasiswa Baru Politeknik Indonusa Surakarta Angkatan 2024.',
                'content'      => '<p>Kegiatan Pengenalan Kehidupan Kampus bagi Mahasiswa Baru (PKKMB) di Politeknik Indonusa Surakarta (POLINUS) untuk angkatan 2024. Kegiatan ini bertujuan memperkenalkan lingkungan kampus, budaya akademik, dan organisasi kemahasiswaan kepada mahasiswa baru.</p>',
                'date'         => '2024',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'title'        => 'PKM Aplikasi Perkantoran',
                'organization' => 'Politeknik Indonusa Surakarta',
                'image'        => '/activities &orgnizations/PKM Aplikasi Perkantoran 21 nov 2024.jpeg',
                'summary'      => 'Program Kegiatan Mahasiswa Aplikasi Perkantoran pada 21 November 2024.',
                'content'      => '<p>Program Kegiatan Mahasiswa (PKM) bidang Aplikasi Perkantoran yang diselenggarakan pada 21 November 2024. Kegiatan ini meningkatkan kompetensi mahasiswa dalam penggunaan aplikasi perkantoran modern untuk mendukung produktivitas kerja.</p>',
                'date'         => '21 November 2024',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'title'        => 'PKM AI (Artificial Intelligence)',
                'organization' => 'Politeknik Indonusa Surakarta',
                'image'        => '/activities &orgnizations/PKM AI 23 jan 2025.jpeg',
                'summary'      => 'Program Kegiatan Mahasiswa bidang Kecerdasan Buatan (AI) pada 23 Januari 2025.',
                'content'      => '<p>Program Kegiatan Mahasiswa (PKM) bidang Kecerdasan Buatan (Artificial Intelligence) yang dilaksanakan pada 23 Januari 2025. Kegiatan ini membahas perkembangan teknologi AI dan implementasinya dalam kehidupan sehari-hari serta dunia profesional.</p>',
                'date'         => '23 Januari 2025',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'title'        => 'Panitia Idul Adha 1446 H',
                'organization' => 'LDK IMMI AS-SHAFFAT',
                'image'        => '/activities &orgnizations/Panitia Idul Adha 1446 H 7 juni 2025.jpeg',
                'summary'      => 'Berperan sebagai panitia kegiatan Idul Adha 1446 H pada 7 Juni 2025.',
                'content'      => '<p>Berpartisipasi sebagai panitia dalam kegiatan peringatan Hari Raya Idul Adha 1446 H yang dilaksanakan pada 7 Juni 2025. Kegiatan ini merupakan wujud kepedulian sosial dan kebersamaan dalam lingkungan organisasi kemahasiswaan.</p>',
                'date'         => '7 Juni 2025',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'title'        => "Studi Banding LDK IMMI AS-SHAFFAT × UKMI NURUL 'ILMI",
                'organization' => "LDK IMMI AS-SHAFFAT",
                'image'        => "/activities &orgnizations/Studi Banding LDK IMMI AS-SHAFFAT X UKMI NURUL 'ILMI 2025.jpeg",
                'summary'      => "Studi Banding antara LDK IMMI AS-SHAFFAT dan UKMI NURUL 'ILMI tahun 2025.",
                'content'      => "<p>Kegiatan Studi Banding yang mempertemukan dua organisasi kemahasiswaan Islam, LDK IMMI AS-SHAFFAT dan UKMI NURUL 'ILMI pada tahun 2025. Kegiatan ini bertujuan untuk berbagi pengalaman, program kerja, dan mempererat tali silaturahmi antar organisasi.</p>",
                'date'         => '2025',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'title'        => 'PKM Pancasila',
                'organization' => 'Politeknik Indonusa Surakarta',
                'image'        => '/activities &orgnizations/PKM Pancasila_25 jan 2026.jpeg',
                'summary'      => 'Program Kegiatan Mahasiswa bidang Pancasila pada 25 Januari 2026.',
                'content'      => '<p>Program Kegiatan Mahasiswa (PKM) bidang Pendidikan Pancasila yang dilaksanakan pada 25 Januari 2026. Kegiatan ini memperkuat pemahaman dan penghayatan nilai-nilai Pancasila sebagai dasar negara dalam kehidupan bermasyarakat dan bernegara.</p>',
                'date'         => '25 Januari 2026',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('activities')->truncate();
    }
};
