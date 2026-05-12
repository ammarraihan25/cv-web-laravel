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
        \DB::table('work_experiences')->where('id', 1)->update(['image' => 'row2_1.png']);
        \DB::table('work_experiences')->where('id', 2)->update(['image' => 'row2_2.jpeg']);
        \DB::table('work_experiences')->where('id', 3)->update(['image' => 'row2_3.jpeg']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        \DB::table('work_experiences')->whereIn('id', [1, 2, 3])->update(['image' => null]);
    }
};
