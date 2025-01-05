<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use Illuminate\Http\Request;
use App\Models\Buku;

class adminController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        $peminjam = Peminjam::all();
        return view('admin.dashboard');
    }

    public function buku()
    {
        return view('admin.buku');
    }

    public function pengajuan()
    {
        return view('admin.pengajuan');
    }

    public function peminjaman()
    {
        return view('admin.peminjaman');
    }

    public function pengembalian()
    {
        return view('admin.pengembalian');
    }

    public function riwayatPengajuan()
    {
        return view('admin.riwayatPengajuan');
    }

    public function riwayatPeminjaman()
    {
        $riwayatPeminjaman = Peminjam::where('status', 'Sudah')->paginate(10);
        return view('admin.riwayatPeminjaman', compact('riwayatPeminjaman'));
    }
}
