<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\SchoolClass;
use App\Models\Major;
use App\Models\User; // <-- Tambahkan import User
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'nis' => fake()->unique()->numerify('####'),
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'class_id' => SchoolClass::inRandomOrder()->first()?->id ?? 1,
            'major_id' => Major::inRandomOrder()->first()?->id ?? 1,
            'user_id' => User::inRandomOrder()->first()?->id ?? null, 
        ];
    }
}