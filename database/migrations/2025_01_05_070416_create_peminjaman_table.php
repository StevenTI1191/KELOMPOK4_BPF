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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key ke tabel users
            $table->foreignId('buku_id')->constrained('pengajuan_buku')->onDelete('cascade'); // Foreign key ke tabel pengajuan_buku
            $table->string('nama_peminjaman'); // Kolom untuk nama peminjaman
            $table->string('judul_buku'); // Kolom untuk judul buku
            $table->date('tgl_peminjaman');
            $table->date('tgl_batas_pengembalian');
            $table->enum('status', ['dipinjam', 'kembali'])->default('dipinjam'); // Status peminjaman
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
