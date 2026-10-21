<?php

namespace Database\Factories;

use App\Models\SchoolClass; // Sesuaikan dengan nama model kelas Anda
use App\Models\Major;       // Sesuaikan dengan nama model jurusan Anda
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => fake()->unique()->numerify('####'),
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            // Mengambil ID secara acak dari tabel classes dan majors
            'class_id' => SchoolClass::inRandomOrder()->first()?->id ?? 1,
            'major_id' => Major::inRandomOrder()->first()?->id ?? 1,
        ];
    }
}