<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_matkul' => $this->faker->unique()->numerify('MKK###'),
            'nama_matkul' => $this->faker->sentence(3),
            'sks_teori' => $this->faker->numberBetween(0, 3),
            'sks_praktikum' => $this->faker->numberBetween(0, 3),
        ];
    }
}
