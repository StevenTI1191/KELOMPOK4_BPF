<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    // Tentukan nama tabel secara eksplisit jika nama tabel berbeda
    protected $table = 'bukus';  // Pastikan sesuai dengan nama tabel di database

    protected $guarded = [];
}

