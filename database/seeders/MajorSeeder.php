<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Jangan lupa tambahkan ini

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('majors')->insert([
            ['name' => 'AKL'],
            ['name' => 'TKJ'],
            ['name' => 'BiD'],
        ]);
    }
}