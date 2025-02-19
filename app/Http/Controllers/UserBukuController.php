<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['buku'] = \App\Models\Buku::latest()->paginate(10);
        return view('user.buku', $data);
    }

    public function indexDashboard()
    {
        return view('user.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'judul_buku' => 'required|min:3',
            'status' => 'required|in:tersedia,kosong',
        ]);
        $buku = new \App\Models\Buku(); //membuat objek kosong di variabel model
        $buku->fill($requestData); //mengisi var model dengan data yang sudah divalidasi requestData
        $buku->save();
        return back();
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
