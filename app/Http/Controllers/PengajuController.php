<?php

namespace App\Http\Controllers;
use App\Models\Pengaju;
use Illuminate\Http\Request;

class PengajuController extends Controller
{
    public function index()
    {
        $data['pengaju'] = \App\Models\Pengaju::latest()->paginate(10);
        return view('admin.pengajuan', $data);
    }
}
