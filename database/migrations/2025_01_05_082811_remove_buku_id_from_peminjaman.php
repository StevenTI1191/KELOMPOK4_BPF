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
        Schema::table('peminjaman', function (Blueprint $table) {
            // Hapus foreign key constraint dari buku_id
            $table->dropForeign(['buku_id']);
            // Hapus kolom buku_id
            $table->dropColumn('buku_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peminjaman', function (Blueprint $table) {
            // Menambahkan kembali kolom buku_id jika migrasi dibalik
            $table->foreignId('buku_id')->constrained('pengajuan_buku')->onDelete('cascade');
        });
    }
};
