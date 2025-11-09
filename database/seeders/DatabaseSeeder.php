<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // buat 1 user test (sesuaikan password jika perlu)
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            // Pastikan factory User meng-hash password, kalau tidak tambahkan:
            'password' => bcrypt('password123'),
        ]);

        // panggil seeder lain
        $this->call([
            CategorySeeder::class,
            SubjectSeeder::class,
            ArticleSeeder::class,
            WriterSeeder::class,
        ]);
    }
}
