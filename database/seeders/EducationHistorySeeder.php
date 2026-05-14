<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationHistorySeeder extends Seeder
{
    public function run()
    {
        DB::table('education_histories')->insert([
            [
                'school_name' => 'Politeknik Indonusa Surakarta',
                'degree' => 'D3 Teknologi Informasi',
                'start_year' => 2024,
                'end_year' => null,
            ],
        ]);
    }
}
