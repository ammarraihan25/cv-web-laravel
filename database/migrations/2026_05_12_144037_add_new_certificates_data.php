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
        \DB::table('certificates')->insert([
            [
                'title' => 'Sertifikat Akademik 4',
                'organization' => 'Lembaga Pendidikan',
                'image' => 'row2_4.png',
                'category' => 'academic',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sertifikat Akademik 5',
                'organization' => 'Lembaga Pendidikan',
                'image' => 'row2_5.png',
                'category' => 'academic',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sertifikat Kegiatan 6',
                'organization' => 'Organisasi Terkait',
                'image' => 'row2_6.png',
                'category' => 'academic',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sertifikat Kegiatan 7',
                'organization' => 'Organisasi Terkait',
                'image' => 'row2_7.png',
                'category' => 'academic',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        \DB::table('certificates')->whereIn('image', [
            'row2_4.png',
            'row2_5.png',
            'row2_6.png',
            'row2_7.png'
        ])->delete();
    }
};
