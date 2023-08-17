<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnggotaUKM>
 */
class AnggotaUKMFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ukm_id' => $this->faker->numberBetween(1, 10),
            'mahasiswa_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
