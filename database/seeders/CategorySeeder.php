<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; 
use Illuminate\Support\Facades\DB; 

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Define the categories to be seeded
        $categories = [
            ['name' => 'Tech news', 'slug' => 'tech-news'],
            ['name' => 'Software reviews', 'slug' => 'software-reviews'],
            ['name' => 'Hardware reviews', 'slug' => 'hardware-reviews'],
            ['name' => 'Opinion pieces', 'slug' => 'opinion-pieces'],
        ];

        // Loop through each category and update or create in the database
        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['name' => $category['name']], 
                ['slug' => $category['slug']]  
            );
        }
    }
}
