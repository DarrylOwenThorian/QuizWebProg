<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        Article::insert([
            [
                'subject_id' => 1,
                'writer_id'  => 1,
                'title'     => 'Machine Learning Basics',
                'content'   => 'Machine Learning adalah...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'subject_id' => 2,
                'writer_id'  => 1,
                'title'     => 'Deep Learning Concepts',
                'content'   => 'Deep Learning adalah...',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
