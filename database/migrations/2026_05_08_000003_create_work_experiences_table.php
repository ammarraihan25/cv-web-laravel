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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('position');           // Jabatan / posisi
            $table->string('company');            // Nama perusahaan / organisasi
            $table->string('period');             // Contoh: "2024 - Sekarang"
            $table->text('description');          // Deskripsi pekerjaan
            $table->string('tags');               // Comma-separated: "Laravel, MySQL, PHP"
            $table->string('type');               // full-time, freelance, internship, self-employed
            $table->string('icon')->nullable();   // Opsional: ikon FontAwesome class atau URL gambar
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experiences');
    }
};
