<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPengajuanBuku;
use Illuminate\Support\Facades\Auth;

class PengajuanController extends Controller
{
    // Menampilkan daftar pengajuan
    public function index()
    {
        $pengajuan = UserPengajuanBuku::latest()->paginate(10);
        return view('admin.pengajuan', compact('pengajuan'));
    }

    // Menampilkan form untuk membuat pengajuan baru
    public function create()
    {
        return view('admin.tambahPengajuanBuku');
    }

    // Menyimpan pengajuan baru ke database
    public function store(Request $request)
{
    // Validasi input dari pengguna
    $request->validate([
        'nama_pengajuan' => 'required|string|max:255',
        'identitas' => 'required|numeric',
        'tgl_pengajuan' => 'required|date',
        'jenis' => 'required|string|max:100',
        'judul_buku' => 'required|string|max:255',
    ]);

    // Simpan data ke tabel pengajuan_buku
    UserPengajuanBuku::create([
        'user_id' => Auth::id(), // Menghubungkan pengajuan dengan user yang sedang login
        'nama_pengajuan' => $request->nama_pengajuan,
        'identitas' => $request->identitas,
        'tgl_pengajuan' => $request->tgl_pengajuan,
        'jenis' => $request->jenis,
        'judul_buku' => $request->judul_buku,
        // Status tidak perlu diset karena default di database adalah 'tolak'
    ]);

    // Redirect ke halaman daftar pengajuan dengan pesan sukses
    return redirect()->route('admin.pengajuan')->with('success', 'Pengajuan berhasil ditambahkan.');
}


    // Menampilkan detail pengajuan
    public function show($id)
    {
        $pengajuan = UserPengajuanBuku::findOrFail($id);
        return view('admin.pengajuanShow', compact('pengajuan'));
    }

    // Menampilkan form untuk mengedit pengajuan
    public function edit($id)
    {
        $pengajuan = UserPengajuanBuku::findOrFail($id);
        return view('admin.pengajuanEdit', compact('pengajuan'));
    }

    // Mengupdate data pengajuan
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pengajuan' => 'required|string|max:255',
            'identitas' => 'required|numeric',
            'tgl_pengajuan' => 'required|date',
            'jenis' => 'required|string|max:100',
            'judul_buku' => 'required|string|max:255',
            'status' => 'required|string',
        ]);

        $pengajuan = UserPengajuanBuku::findOrFail($id);
        $pengajuan->update($request->all());

        return redirect()->route('admin.pengajuan')->with('success', 'Pengajuan berhasil diperbarui.');
    }

    // Menghapus pengajuan
    public function destroy($id)
    {
        $pengajuan = UserPengajuanBuku::findOrFail($id);
        $pengajuan->delete();

        return redirect()->route('admin.pengajuan')->with('success', 'Pengajuan berhasil dihapus.');
    }

    // Memperbarui status pengajuan
    public function updateStatus(Request $request, $id)
    {
        $pengajuan = UserPengajuanBuku::findOrFail($id);
        $pengajuan->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status pengajuan berhasil diperbarui.');
    }
}
