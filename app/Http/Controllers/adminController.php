<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use App\Models\UserPengajuanBuku;
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
        $pengajuan = UserPengajuanBuku::paginate(10);  // Menggunakan paginate()
        return view('admin.pengajuan', compact('pengajuan'));

    }

    public function updateStatus(Request $request, $id)
    {
        $pengajuan = UserPengajuanBuku::findOrFail($id);
        $pengajuan->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Status pengajuan berhasil diperbarui.');
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
        // Ambil hanya data dengan status 'terima' dan lakukan pagination
        $pengajuan = UserPengajuanBuku::where('status', 'terima')->latest()->paginate(10);
    
        // Kirim data ke view
        return view('admin.riwayatPengajuan', compact('pengajuan'));
    }
    


    public function riwayatPeminjaman()
    {
        $riwayatPeminjaman = Peminjam::where('status', 'Sudah')->paginate(10);
        return view('admin.riwayatPeminjaman', compact('riwayatPeminjaman'));
    }

    
}
