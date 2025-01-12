<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;  // Jangan lupa untuk import Buku model

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seeder untuk model Buku
        \App\Models\Buku::factory(50)->create(); // Ini akan menghasilkan 50 buku acak di tabel buku


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Buku::factory(50)->create();
        // \App\Models\Peminjam::factory(50)->create();
        // \App\Models\Pengaju::factory(50)->create();
    }
}
