<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'product_name'=>$this->faker->name(),
            'product_description'=>$this->faker->text('25'),
            'product_status'=>$this->faker->name(),
            'product_price'=>rand(200,500),
            'category_id'=>rand(1,5),
            'discount_id'=>rand(1,2),
            'product_image'=>$this->faker->imageUrl($width = 400, $height = 400) ,

        ];
    }
}
