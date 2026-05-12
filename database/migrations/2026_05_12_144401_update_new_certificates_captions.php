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
        \DB::table('certificates')->where('image', 'row2_4.png')->update([
            'title' => 'Univet Islamic Event (UIE) - Strategi Islamic Preneur',
            'organization' => 'UKMI Univet Bantara Sukoharjo',
        ]);

        \DB::table('certificates')->where('image', 'row2_5.png')->update([
            'title' => 'Seminar Kewarganegaraan - Media Museum',
            'organization' => 'Politeknun Indonusa Surakarta',
        ]);

        \DB::table('certificates')->where('image', 'row2_6.png')->update([
            'title' => 'Literasi Keuangan - Kelola Keuangan Pribadi',
            'organization' => 'Komunitas Pengusaha TDA Soloraya',
        ]);

        \DB::table('certificates')->where('image', 'row2_7.png')->update([
            'title' => 'Pelatihan Creative Thinking & Content Creator',
            'organization' => 'BEM Politeknik Indonusa Surakarta',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No need to revert specifically as titles will be reset if re-migrated
    }
};
