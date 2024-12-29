<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengaju>
 */
class PengajuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pengaju' => fake()->name(),
            'nim' => fake()->numberBetween(112, 255),
            'tgl_pengajuan' => fake()->dateTimeThisYear(),
            'jenis' => fake()->randomElement(['Buku', 'Modul']),
            'judul_buku' => fake()->name(),
        ];
    }
}
