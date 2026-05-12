<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        \DB::table('projects')->where('id', 2)->update([
            'title' => 'SIMARA: Sistem Informasi Masjid Rahayu',
            'description' => 'Website profile dan sistem manajemen informasi masjid yang mencakup jadwal kajian, pengelolaan donasi, dan dokumentasi kegiatan jamaah.',
            'tags' => 'PHP, Laravel, MySQL'
        ]);

        \DB::table('projects')->where('id', 3)->update([
            'title' => 'Sistem Kasir Coffeshop Temurindu',
            'description' => 'Aplikasi Point of Sale (POS) modern yang dirancang khusus untuk manajemen operasional coffee shop, mulai dari pemesanan hingga laporan keuangan.',
            'tags' => 'PHP, Laravel, MySQL, JS'
        ]);

        \DB::table('projects')->where('id', 4)->update([
            'title' => 'Sistem AI Chatbot Kesehatan Mental Mahasiswa',
            'description' => 'Chatbot berbasis kecerdasan buatan (AI) yang dirancang untuk memberikan dukungan awal dan edukasi mengenai kesehatan mental bagi mahasiswa.',
            'tags' => 'Python, AI, Flask, NLP'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
