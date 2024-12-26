<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function buku(){return view('admin.buku');}

    public function pengajuan(){return view('admin.pengajuan');}

    public function peminjaman(){return view('admin.peminjaman');}

    public function pengembalian(){return view('admin.pengembalian');}

    public function riwayatPengajuan(){return view('admin.riwayatPengajuan');}

    public function riwayatPeminjaman(){return view('admin.riwayatPeminjaman');}


}
