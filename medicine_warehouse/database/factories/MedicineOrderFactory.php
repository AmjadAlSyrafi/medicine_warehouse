<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicineOrder>
 */
class MedicineOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => $this->faker->randomElement(['in_preparation', 'sent', 'received']),
            'payment_status' => $this->faker->randomElement(['not_paid', 'paid']),
        ];
    }
}
