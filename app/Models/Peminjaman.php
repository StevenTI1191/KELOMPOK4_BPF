<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $fillable = [
        'user_id', 'buku_id', 'nama_peminjaman', 'judul_buku', 'tgl_peminjaman', 'tgl_batas_pengembalian', 'status'
    ];

    // Relasi ke model Buku
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }
}

