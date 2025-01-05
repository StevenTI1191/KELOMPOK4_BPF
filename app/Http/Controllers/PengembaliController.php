<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PengembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengembalian = Peminjaman::latest()->paginate(10);
        return view('admin.pengembalian', compact('pengembalian'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pengembalian = Peminjaman::findOrFail($id);

        // Update status dan tanggal pengembalian
        if ($request->has('status') && $request->has('tgl_pengembali')) {
            $pengembalian->status = $request->status;
            $pengembalian->tgl_pengembali = $request->tgl_pengembali;
            $pengembalian->save();

            return response()->json(['message' => 'Status dan Tanggal Pengembalian updated successfully']);
        }

        // Jika ada field lain yang diupdate, tambahkan logika di sini
        // ...

        return redirect()->route('admin.pengembalian')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
