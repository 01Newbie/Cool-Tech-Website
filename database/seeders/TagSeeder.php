<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag; 

class TagSeeder extends Seeder
{
    public function run()
    {
        // Define an array of tags with their names and slugs
        $tags = [
            ['name' => 'AI', 'slug' => 'ai'],
            ['name' => 'Google', 'slug' => 'google'],
            ['name' => 'High-Performance Computing', 'slug' => 'high-performance-computing'],
            ['name' => 'Singularity', 'slug' => 'singularity'],
        ];

        // Loop through each tag to insert or update in the database
        foreach ($tags as $tag) {
            Tag::updateOrCreate(
                ['name' => $tag['name']], 
                ['slug' => $tag['slug']]  
            );
        }
    }
}
