<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rekam>
 */
class RekamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dokterID' => rand(1, 5),
            'pasienID' => rand(1, 5),
            'kondisi' => 'Flu batuk',
            'suhu' => rand(350, 455)/10,
        ];
    }
}
