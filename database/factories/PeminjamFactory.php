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
        return [
            'nama_peminjam' => fake()->name(),
            'nim' => fake()->numberBetween(112, 255),
            'tgl_pinjam' => fake()->dateTimeThisYear(),
            'jenis' => fake()->randomElement(['Buku', 'Modul']),
            'judul_buku' => fake()->name(),
        ];
    }
}
