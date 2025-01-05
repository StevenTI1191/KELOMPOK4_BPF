<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjams', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('nim');
            $table->timestamp('tgl_pinjam')->default(DB::raw('CURRENT_TIMESTAMP')); // Ganti date dengan timestamp
            $table->timestamp('tgl_pengembali')->nullable(); // Bisa nullable
            $table->string('jenis');
            $table->string('judul_buku');
            $table->string('status')->default('Belum');
            $table->timestamps(); // created_at dan updated_at
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
