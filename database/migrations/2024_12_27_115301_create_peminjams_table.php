<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjams', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam'); // Nama peminjam
            $table->integer('nim'); // NIM peminjam
            $table->date('tgl_pinjam')->nullable(); // Tanggal pinjam, bisa null
            $table->date('tgl_pengembali')->nullable(); // Tanggal pengembali, null saat peminjaman dibuat
            $table->string('jenis'); // Jenis buku atau kategori
            $table->string('judul_buku'); // Judul buku yang dipinjam
            $table->string('status')->default('Belum'); // Status peminjaman, default "Belum"
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjams');
    }
};
