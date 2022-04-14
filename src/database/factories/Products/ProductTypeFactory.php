<?php

namespace Database\Factories\Products;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $types = [
            'deck',
            'trucks',
            'wheels',
            'bearings',
            'bushings',
            'griptape',
            'hardware',
            'accessories'
        ];


        return [
            'type' => $this->faker->word()
        ];
    }
}
