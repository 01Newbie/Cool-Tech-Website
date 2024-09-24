<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the individual seeders to populate the database
        $this->call([
            CategorySeeder::class,
            TagSeeder::class,     
            ArticleSeeder::class, 
        ]);
    }
}
