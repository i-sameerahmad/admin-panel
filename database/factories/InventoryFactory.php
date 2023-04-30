<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
'color_id'=>rand(1,1),
'size_id'=>rand(1,1),

'quantity'=>rand(20,100),
'product_id'=>rand(1,50),
        ];
    }
}
