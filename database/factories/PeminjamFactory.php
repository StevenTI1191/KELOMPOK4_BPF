<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjam>
 */
class PeminjamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tglPinjam = fake()->dateTimeThisYear();
        return [
            'nama_peminjam' => fake()->name(),
            'nim' => (string) fake()->numberBetween(1000000000, 9999999999),
            'tgl_pinjam' => $tglPinjam, // Tetap format timestamp
            'tgl_pengembali' => null, // Selalu null
            'jenis' => fake()->randomElement(['Buku', 'Modul']),
            'judul_buku' => fake()->sentence(3),
            'status' => 'Belum', // Selalu "Belum"
        ];
    }
}
