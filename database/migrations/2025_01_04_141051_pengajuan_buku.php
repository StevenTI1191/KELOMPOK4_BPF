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
        Schema::create('Pengajuan_Buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Add user_id with foreign key
            $table->string('nama_pengajuan');
            $table->integer('identitas');
            $table->date('tgl_pengajuan');
            $table->string('jenis');
            $table->string('judul_buku');
            $table->string('referensi');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('link_beli');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pengajuan_Buku');
    }
};
