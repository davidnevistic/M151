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
            'name' => 'Rechen',
            'description' => 'BRW Laubrechen',
            'price' => '11.95',
            'image' => 'images\rechen.jpg'
        ]);

        Product::create([
            'name' => 'Hacke',
            'description' => 'Gartenhacke',
            'price' => '25.85',
            'image' => 'images\hacke.jpg'
        ]);
        Product::create([
            'name' => 'Schaufel',
            'description' => 'LUX Frankfurter Schaufel',
            'price' => '23.95',
            'image' => 'images\schaufel.jpg'
        ]);
    }
}
