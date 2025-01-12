<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    // Menampilkan daftar peminjaman yang sudah ada
    public function index()
    {
        $peminjaman = Peminjaman::where('user_id', Auth::id())->paginate(10);

        return view('user.peminjaman', compact('peminjaman'));
    }

    public function indexPengembalian()
    {
        $peminjaman = Peminjaman::where('user_id', Auth::id())->paginate(10);

        return view('user.pengembalian', compact('peminjaman'));
    }

    public function indexRiwayatPeminjaman()
    {
        $peminjaman = Peminjaman::where('user_id', Auth::id())
                                ->where('status', 'kembali')
                                ->paginate(10);

        return view('user.riwayatPeminjaman', compact('peminjaman'));
    }

    // Menampilkan formulir untuk membuat peminjaman baru
    public function create()
    {
        $bukuList = Buku::where('status', 'Tersedia')->get();

        return view('user.tambahPeminjaman', compact('bukuList'));
    }

    // Menyimpan data peminjaman ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjaman' => 'required|string|max:255',
            'buku_id' => 'required|exists:bukus,id',
            'tgl_peminjaman' => 'required|date',
            'tgl_batas_pengembalian' => 'required|date|after_or_equal:tgl_peminjaman',
        ]);

        // Cek apakah buku tersedia
        $buku = Buku::find($request->buku_id);
        if (!$buku || $buku->status !== 'Tersedia') {
            return redirect()->back()->with('error', 'Buku tidak tersedia');
        }

        // Menyimpan data peminjaman
        Peminjaman::create([
            'user_id' => Auth::id(),
            'nama_peminjaman' => $request->nama_peminjaman,
            'buku_id' => $request->buku_id,
            'judul_buku' => $buku->judul_buku,
            'tgl_peminjaman' => $request->tgl_peminjaman,
            'tgl_batas_pengembalian' => $request->tgl_batas_pengembalian,
            'status' => 'dipinjam',
        ]);
        if (!in_array($request->status, ['Tersedia', 'Dipinjam', 'Kembali'])) {
            return redirect()->back()->with('error', 'Status tidak valid');
        }
        
        // Update status buku menjadi "Dipinjam"
        $buku->update(['status' => 'Dipinjam']);
        
        return redirect()->route('user.peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan');
    }
}
