<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article; 

class ArticleSeeder extends Seeder
{
    public function run()
    {
        // Array of articles to be seeded
        $articles = [
            [
                'category_id' => 1, 
                'title' => 'The Future of Tech',
                'slug' => 'the-future-of-tech',
                'content' => 'An in-depth look at upcoming technologies...',
            ],
            [
                'category_id' => 2, 
                'title' => 'Top 5 Software of 2024',
                'slug' => 'top-5-software-2024',
                'content' => 'A review of the top software...',
            ],
            [
                'category_id' => 3, 
                'title' => 'Latest Hardware Innovations',
                'slug' => 'latest-hardware-innovations',
                'content' => 'Exploring the newest hardware technologies in 2024...',
            ],
            [
                'category_id' => 4, 
                'title' => 'Opinions on Emerging Tech',
                'slug' => 'opinions-on-emerging-tech',
                'content' => 'Thoughts on the future of technology and its impact...',
            ],
        ];

        // Loop through each article and insert or update
        foreach ($articles as $article) {
            Article::updateOrCreate(
                ['slug' => $article['slug']], 
                $article 
            );
        }
    }
}
