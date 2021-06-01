<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Barbie',
            'price' => 1999,
        ]);
        Product::create([
            'name' => 'Lego',
            'price' => 4999,
        ]);
        Product::create([
            'name' => 'iPhone',
            'price' => 109999,
        ]);
        Product::create([
            'name' => 'Samsung Galaxy Buds',
            'price' => 19999,
        ]);
    }
}
