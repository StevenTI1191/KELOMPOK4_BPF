<?php
namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['buku'] = Buku::latest()->paginate(10);
        return view('admin.buku', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.buku_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_buku' => 'required|min:3',
            'status' => 'required|in:Tersedia,Kosong',
        ]);

        Buku::create($request->all());
        return redirect()->route('admin.buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }
}
