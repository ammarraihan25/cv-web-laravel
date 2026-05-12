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
        \DB::table('work_experiences')->insert([
            'position' => 'Teknisi Komputer',
            'company' => 'Internasional Komputer',
            'period' => '10 Juli - 23 Desember 2023',
            'image' => 'experience1.png',
            'description' => 'Bertanggung jawab dalam pemeliharaan perangkat keras dan lunak. Melakukan perakitan PC sesuai spesifikasi, servis rutin komputer klien, instalasi sistem operasi, serta troubleshooting hardware.',
            'tags' => 'Hardware, Troubleshooting, PC Assembly, Software Installation',
            'type' => 'internship',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        \DB::table('work_experiences')->where('company', 'Internasional Komputer')->delete();
    }
};
