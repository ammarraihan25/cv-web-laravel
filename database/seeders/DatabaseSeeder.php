<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(EducationHistorySeeder::class); 
        $this->call(PortfolioSeeder::class);
        
        // Manual user creation to avoid dependency on Faker in production
        if (!User::where('email', 'ammarraihan2005@gmail.com')->exists()) {
            User::create([
                'name' => 'Muhamad Ammar Raihan Ardiyanto',
                'email' => 'ammarraihan2005@gmail.com',
                'password' => Hash::make('password'),
            ]);
        }
    }
}
