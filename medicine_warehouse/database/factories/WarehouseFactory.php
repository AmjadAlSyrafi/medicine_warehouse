<?php

namespace Database\Factories;

use App\Models\MedicineOrder;
use App\Models\Classification;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Warehouse>
 */
class WarehouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'classification_id' => Classification::factory(),
            'order_id' => MedicineOrder::factory(),
        ];
    }
}
