<?php

namespace Database\Factories\Products;

use App\Models\Products\ProductBrands;
use App\Models\Products\ProductType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type_id' => ProductType::factory(),
            'brand_id' => ProductBrands::factory(),
            'model' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'serial_number' => $this->faker->ean13(),
            'price' => $this->faker->randomDigit()
        ];
    }
}
