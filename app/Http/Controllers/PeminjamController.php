<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjam = Peminjam::paginate(10);
        return view('admin.peminjaman', compact('peminjam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.peminjaman.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'nama_peminjam' => 'required|string|max:255',
            'nim' => 'required|string|max:50',
            'tgl_pinjam' => 'nullable|date', // Izinkan null agar default schema digunakan jika tidak diisi
            'jenis' => 'required|string',
            'judul_buku' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        Peminjam::create([
            'nama_peminjam' => $validated['nama_peminjam'],
            'nim' => $validated['nim'],
            'tgl_pinjam' => $validated['tgl_pinjam'] ?? null, // Biarkan null jika tidak diisi
            'tgl_pengembali' => null, // Awalnya kosong (nullable)
            'jenis' => $validated['jenis'],
            'judul_buku' => $validated['judul_buku'],
            'status' => 'Belum', // Status default
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.peminjaman')->with('success', 'Data peminjaman berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $peminjam = Peminjam::findOrFail($id);
            return response()->json($peminjam);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Data tidak ditemukan'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peminjam = Peminjam::findOrFail($id);
        return view('admin.peminjaman.update', compact('peminjam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjam $peminjam)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama_peminjam' => 'required|string|max:255',
            'nim' => 'required|string|max:20',
            'tgl_pinjam' => 'required|date',
            'jenis' => 'required|string|in:Buku,Modul',
            'judul_buku' => 'required|string|max:255',
        ]);

        // Update data satu per satu
        $peminjam->nama_peminjam = $validatedData['nama_peminjam'];
        $peminjam->nim = $validatedData['nim'];
        $peminjam->tgl_pinjam = $validatedData['tgl_pinjam'];
        $peminjam->jenis = $validatedData['jenis'];
        $peminjam->judul_buku = $validatedData['judul_buku'];

        // Simpan perubahan ke database
        $peminjam->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.peminjaman')->with('success', 'Data peminjaman berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjam $peminjam)
    {
        //
    }
    public function updateStatus(Request $request, $id)
    {
        $peminjam = Peminjam::findOrFail($id);
        $peminjam->update(['status' => $request->status]);

        return redirect()->route('peminjaman.index')->with('success', 'Status berhasil diperbarui.');
    }

}
