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

        // Seeder untuk model Pengaju, bisa disesuaikan jika perlu
        
    }
}
