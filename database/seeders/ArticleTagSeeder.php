<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class ArticleTagSeeder extends Seeder
{
    public function run()
    {
        // Insert records into the pivot table 'article_tag'
        DB::table('article_tag')->insert([

            // Associating articles with tags
            ['article_id' => 1, 'tag_id' => 1], 
            ['article_id' => 1, 'tag_id' => 2], 
            ['article_id' => 2, 'tag_id' => 3], 
        ]);
    }
}
