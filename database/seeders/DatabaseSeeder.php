<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ClassSeeder::class, // Wajib ada agar tabel classes terisi data
            MajorSeeder::class, // Wajib ada agar tabel majors terisi data
            StudentSeeder::class,
        ]);   
    }
}