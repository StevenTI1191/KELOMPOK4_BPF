<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use App\Models\UserPengajuanBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengembalianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Tampilkan daftar pengembalian untuk user yang sedang login
    public function index()
    {
        $pengembalian = Pengembalian::where('user_id', Auth::id())->paginate(10);
        return view('user.pengembalian', compact('pengembalian'));
    }

    // Proses pengembalian otomatis dari pengajuan buku
    public function store(Request $request)
    {
        $request->validate([
            'pengajuan_id' => 'required|exists:pengajuan_buku,id'
        ]);

        $pengajuan = UserPengajuanBuku::findOrFail($request->pengajuan_id);

        Pengembalian::create([
            'user_id' => Auth::id(),
            'pengajuan_id' => $pengajuan->id,
            'nama_pengajuan' => $pengajuan->nama_pengajuan,
            'judul_buku' => $pengajuan->judul_buku,
            'identitas' => $pengajuan->identitas,
            'jenis' => $pengajuan->jenis,
            'tgl_pengembalian' => now()->addDays(7), // 7 hari setelah pengajuan
            'status' => 'belum'
        ]);

        return redirect()->route('user.pengembalian')->with('success', 'Pengembalian berhasil diajukan.');
    }

    // Update status pengembalian
    public function update(Request $request, $id)
    {
        $pengembalian = Pengembalian::where('user_id', Auth::id())->findOrFail($id);

        $request->validate([
            'status' => 'required|in:sudah,belum'
        ]);

        $pengembalian->update([
            'status' => $request->status
        ]);

        return redirect()->route('pengembalian.index')->with('success', 'Status pengembalian diperbarui.');
    }

    // Hapus pengembalian
    public function destroy($id)
    {
        $pengembalian = Pengembalian::where('user_id', Auth::id())->findOrFail($id);
        $pengembalian->delete();

        return redirect()->route('pengembalian.index')->with('success', 'Pengembalian berhasil dihapus.');
    }
}
