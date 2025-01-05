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
        Schema::table('Pengajuan_Buku', function (Blueprint $table) {
            $table->enum('status', ['terima', 'tolak'])->default('tolak')->after('judul_buku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Pengajuan_Buku', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
