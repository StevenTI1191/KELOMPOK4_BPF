<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPengajuanBuku extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_buku'; // Matches the table name in the database

    protected $fillable = ['user_id', 'nama_pengajuan', 'identitas', 'tgl_pengajuan', 'jenis', 'judul_buku','referensi',
    'pengarang','penerbit','link_beli','status'];


}
