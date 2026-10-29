<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Jangan lupa tambahkan baris ini

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->insert([
            ['name' => '10 AKL'],
            ['name' => '11 AKL'],
            ['name' => '12 TKJ 1'],
            ['name' => '12 TKJ 2'],
        ]);
    }
}