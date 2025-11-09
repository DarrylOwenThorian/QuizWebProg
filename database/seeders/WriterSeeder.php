<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    public function run()
    {
        Writer::insert([
            [
                'name' => 'John Doe',
                'description' => 'Expert in Data Science'
            ],
            [
                'name' => 'Jane Smith',
                'description' => 'Network Security Specialist'
            ],
        ]);
    }
}
