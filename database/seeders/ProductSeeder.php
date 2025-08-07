<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "name"=> "Gold",
            "price" => 100,
            "image"=> "gold.jpg",
        ]);
        Product::create([
            "name"=> "Silver",
            "price" => 50,
            "image"=> "silver.jpg",
        ]);
        Product::create([
            "name"=> "Platinum",
            "price" => 80,
            "image"=> "platinum.jpg",
        ]);
    }
}
