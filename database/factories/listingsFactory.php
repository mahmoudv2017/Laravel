<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\listingsModel>
 */
class listingsFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'JobTitle' => $this->faker->name(),
            'location' => $this->faker->city(),
            'email' => $this->faker->email(),
            'company' => $this->faker->company(),
            'car' => $this->faker->buildingNumber(),
            'desc' => $this->faker->paragraph(5),
            'phone' => $this->faker->postcode(),
        ];

    }
}
