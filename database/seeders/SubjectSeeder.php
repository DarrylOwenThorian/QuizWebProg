<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        Subject::insert([
            [
                'category_id' => 1,
                'title' => 'Machine Learning',
                'description' => 'Introduction to ML',
            ],
            [
                'category_id' => 1,
                'title' => 'Deep Learning',
                'description' => 'Deep neural networks',
            ],
            [
                'category_id' => 2,
                'title' => 'Software Security',
                'description' => 'System security basics',
            ],
            [
                'category_id' => 2,
                'title' => 'Network Administration',
                'description' => 'Managing network infrastructure',
            ],
        ]);
    }
}
