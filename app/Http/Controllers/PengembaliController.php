<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use Illuminate\Http\Request;

class PengembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pengembali'] = \App\Models\Peminjam::latest()->paginate(10);
        return view('admin.pengembalian', $data);
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
        $pengembali = Peminjam::findOrFail($id);

        // Update status dan tanggal pengembalian
        if ($request->has('status') && $request->has('tgl_pengembali')) {
            $pengembali->status = $request->status;
            $pengembali->tgl_pengembali = $request->tgl_pengembali;
            $pengembali->save();

            return response()->json(['message' => 'Status dan Tanggal Pengembalian updated successfully']);
        }

        // Jika ada field lain yang diupdate, tambahkan logika di sini
        // ...

        return redirect()->route('pengembali.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
