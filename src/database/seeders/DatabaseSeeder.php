<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(8)->create();
        // \App\Models\Products\ProductType::factory(15)->create();
        // \App\Models\Products\ProductBrands::factory(15)->create();
        

        $this->call([
            TypeSeeder::class,
            BrandSeeder::class
        ]);

        \App\Models\Products\Products::factory(8)->create();
    }
}
