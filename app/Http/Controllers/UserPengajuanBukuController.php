<?php

namespace App\Http\Controllers;

use App\Models\UserPengajuanBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPengajuanBukuController extends Controller
{
    // Constructor to ensure the user is authenticated
    public function __construct()
    {
        // Ensure only authenticated users can access these methods
        $this->middleware('auth');
    }

    // Fetch paginated list of pengajuan data for the authenticated user
    public function index()
    {
    // Fetch pengajuan data only for the authenticated user
    $pengajuan = UserPengajuanBuku::where('user_id', Auth::user()->id)->paginate(10);

    // Return the view with the paginated pengajuan data
    return view('user.pengajuanBuku', compact('pengajuan'));
    }


    // Show form to create a new pengajuan
    public function create()
    {
        // Return the view to create a new pengajuan
        return view('user.tambahpengajuanBuku'); // Ensure the file exists
    }

    // Store new pengajuan record for the authenticated user
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'nama_pengajuan' => 'required|string|max:255',
            'identitas' => 'required|integer',
            'tgl_pengajuan' => 'required|date',
            'jenis' => 'required|string|max:255',
            'judul_buku' => 'required|string|max:255',
        ]);

        // Add user_id to the validated data
        $validated['user_id'] = Auth::user()->id;  // Add the logged-in user's ID

        // Store the new pengajuan in the database
        UserPengajuanBuku::create($validated);

        // Fetch the updated list of pengajuan for the user with pagination
        $pengajuan = UserPengajuanBuku::where('user_id', Auth::user()->id)->paginate(10);

        // Return the view with the updated pengajuan data
        return view('user.pengajuanBuku', compact('pengajuan'));
    }

    // Show specific pengajuan based on ID for the authenticated user
    public function show($id)
    {
        // Fetch the pengajuan for the logged-in user
        $pengajuan = UserPengajuanBuku::where('user_id', Auth::user()->id)
                                      ->where('id', $id)
                                      ->firstOrFail();

        // Return the view to show the pengajuan details
        return view('user.showPengajuan', compact('pengajuan')); // Ensure the file exists
    }

    // Show form to edit an existing pengajuan for the authenticated user
    public function edit($id)
    {
        // Fetch the pengajuan for the logged-in user
        $pengajuan = UserPengajuanBuku::where('user_id', Auth::user()->id)
                                      ->where('id', $id)
                                      ->firstOrFail();

        // Return the view to edit the pengajuan
        return view('user.editPengajuan', compact('pengajuan')); // Ensure the file exists
    }

    // Update the existing pengajuan record for the authenticated user
    public function update(Request $request, $id)
    {
        // Validate the updated input data
        $validated = $request->validate([
            'nama_pengajuan' => 'required|string|max:255',
            'identitas' => 'required|integer',
            'tgl_pengajuan' => 'required|date',
            'jenis' => 'required|string|max:255',
            'judul_buku' => 'required|string|max:255',
        ]);

        // Fetch the pengajuan record for the logged-in user and the specified ID
        $pengajuan = UserPengajuanBuku::where('user_id', Auth::user()->id)
                                      ->where('id', $id)
                                      ->firstOrFail();

        // Update the pengajuan record with the validated data
        $pengajuan->update($validated);

        // Redirect to the index route with a success message
        return redirect()->route('user.pengajuanBuku.index')->with('success', 'Pengajuan berhasil diperbarui.');
    }

    // Delete the pengajuan record for the authenticated user
    public function destroy($id)
    {
        // Fetch the pengajuan record for the logged-in user
        $pengajuan = UserPengajuanBuku::where('user_id', Auth::user()->id)
                                      ->where('id', $id)
                                      ->firstOrFail();

        // Delete the pengajuan record
        $pengajuan->delete();

        // Redirect to the index route with a success message
        return redirect()->route('user.pengajuanBuku.index')->with('success', 'Pengajuan berhasil dihapus.');
    }
}
