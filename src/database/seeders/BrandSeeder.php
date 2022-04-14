<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products\ProductBrands;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            'Zero',
            'Jart',
            'Spitfire',
            'Creature',
            'Ricta',
            'Bones',
            'Plan-B',
            'Enjoi'
        ];

        foreach ($brands as $brand) {
            ProductBrands::firstOrcreate([
                'brand' => $brand
            ]);
        }
    }
}
