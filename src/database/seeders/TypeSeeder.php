<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products\ProductType;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'deck',
            'trucks',
            'wheels',
            'bearings',
            'bushings',
            'hardware',
            'griptape',
            'accessories'
        ];

        foreach ($types as $type) {
            ProductType::firstOrcreate([
                'type' => $type
            ]);
        }
    }
}
