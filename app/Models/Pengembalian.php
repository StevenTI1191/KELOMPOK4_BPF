<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural form of the model name
    protected $table = 'pengembalians';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'user_id',
        'pengajuan_buku_id', // Foreign key referencing the pengajuan_buku table
        'status',
        'tgl_pengembalian',
    ];

    // Define the relationship to the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship to the UserPengajuanBuku model (pengajuan buku)
    public function pengajuanBuku()
    {
        return $this->belongsTo(UserPengajuanBuku::class, 'pengajuan_buku_id');
    }

    // Accessor to automatically set the 'tgl_pengembalian' 7 days after the 'tgl_pengajuan'
    public static function boot()
    {
        parent::boot();

        static::creating(function ($pengembalian) {
            if (empty($pengembalian->tgl_pengembalian) && $pengembalian->pengajuanBuku) {
                // Set tgl_pengembalian to 7 days after tgl_pengajuan if not set
                $pengembalian->tgl_pengembalian = \Carbon\Carbon::parse($pengembalian->pengajuanBuku->tgl_pengajuan)->addDays(7);
            }
        });
    }
}
