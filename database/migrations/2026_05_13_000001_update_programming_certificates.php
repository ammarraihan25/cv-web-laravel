<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Remove existing placeholders or old programming certificates
        DB::table('certificates')->where('category', 'programming')->delete();

        // Add new certificates
        DB::table('certificates')->insert([
            [
                'title' => 'Belajar Dasar AI',
                'organization' => 'Dicoding Indonesia',
                'image' => 'row1_1.png',
                'category' => 'programming',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Memulai Pemrograman dengan Python',
                'organization' => 'Dicoding Indonesia',
                'image' => 'row1_2.png',
                'category' => 'programming',
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
        DB::table('certificates')->whereIn('image', ['row1_1.png', 'row1_2.png'])->delete();
        
        // Note: Restoring previous placeholders is not strictly necessary as they were placeholders,
        // but if needed, they could be re-inserted here. For now, we leave it clean.
    }
};
