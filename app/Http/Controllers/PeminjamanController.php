<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\UserPengajuanBuku;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    // Menampilkan daftar peminjaman yang sudah ada
    public function index()
{
    $peminjaman = Peminjaman::where('user_id', Auth::id())->paginate(10); // Ambil data peminjaman milik user yang sedang login

    return view('user.peminjaman', compact('peminjaman'));  // Ganti 'your-view-path' dengan nama view yang sesuai
}

    public function indexPengembalian()
    {
        $peminjaman = Peminjaman::where('user_id', Auth::id())->paginate(10); // Ambil data peminjaman milik user yang sedang login

        return view('user.pengembalian', compact('peminjaman'));  // Ganti 'your-view-path' dengan nama view yang sesuai
    }

    public function indexRiwayatPeminjaman()
    {
        // Ambil data peminjaman dengan status 'kembali' milik user yang sedang login
        $peminjaman = Peminjaman::where('user_id', Auth::id())
                                ->where('status', 'kembali')
                                ->paginate(10);

        // Kirim data ke view
        return view('user.riwayatPeminjaman', compact('peminjaman'));
    }
    // Menampilkan formulir untuk membuat peminjaman baru
    public function create()
    {
        // Mengambil data buku dari tabel buku yang tersedia
        $bukuList = Buku::where('status', 'Tersedia')->get();  // Ambil buku yang tersedia

        return view('user.tambahPeminjaman', compact('bukuList'));  // Kirim data buku ke view
    }

    // Menyimpan data peminjaman ke database
    // Jika Anda ingin menggunakan tabel buku
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'buku_id' => 'required|exists:bukus,id',  // Sesuaikan dengan nama tabel yang benar
            'tgl_peminjaman' => 'required|date',
            'tgl_batas_pengembalian' => 'required|date|after_or_equal:tgl_peminjaman',
        ]);
    
        // Cek apakah buku tersedia
        $buku = Buku::find($request->buku_id);
        if (!$buku) {
            return redirect()->back()->with('error', 'Buku tidak ditemukan');
        }
    
        // Menyimpan data peminjaman
        // Pastikan menggunakan tabel yang benar
        Peminjaman::create([
            'user_id' => Auth::id(),  // Gunakan ID buku dari tabel bukus
            'nama_peminjaman' => $request->nama_peminjaman,
            'judul_buku' => Buku::find($request->buku_id)->judul_buku, // Ambil judul dari tabel bukus
            'tgl_peminjaman' => $request->tgl_peminjaman,
            'tgl_batas_pengembalian' => $request->tgl_batas_pengembalian,
            'status' => 'dipinjam',
        ]);

    
        $peminjaman = Peminjaman::where('user_id', Auth::id())->paginate(10); // Ambil data peminjaman milik user yang sedang login

        return view('user.peminjaman', compact('peminjaman'));
    }
}    
