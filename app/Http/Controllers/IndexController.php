<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function andika()
    {
        return view('andika');
    }
    public function steven()
    {
        return view('steven');
    }
    public function fitra(){
        return view ('fitra');
    }
    public function mifta(){
        return view ('mifta');
    }
}
