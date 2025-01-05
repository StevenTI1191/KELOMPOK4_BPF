<?php

namespace App\Http\Controllers;

use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengembalianController extends Controller
{
    // Constructor to ensure the user is authenticated
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Fetch paginated list of pengembalian data
    public function index()
    {
        // Use Auth::user() to get the authenticated user
        $userId = Auth::user()->id;

        // Fetch pengembalian records where user_id matches the logged-in user
        $pengembalian = Pengembalian::where('user_id', $userId)->paginate(10);

        // Return the view with pengembalian data
        return view('user.pengembalian.index', compact('pengembalian'));
    }

    // Show the details of a specific pengembalian record
    public function show($id)
    {
        // Use Auth::user() to get the authenticated user
        $userId = Auth::user()->id;

        // Fetch pengembalian record for the logged-in user
        $pengembalian = Pengembalian::where('user_id', $userId)->where('id', $id)->firstOrFail();

        // Return the view with the pengembalian details
        return view('user.pengembalian.show', compact('pengembalian'));
    }

    // Show the form to edit a specific pengembalian record
    public function edit($id)
    {
        // Use Auth::user() to get the authenticated user
        $userId = Auth::user()->id;

        // Find the pengembalian record for the logged-in user
        $pengembalian = Pengembalian::where('user_id', $userId)->where('id', $id)->firstOrFail();

        // Return the edit view
        return view('user.pengembalian.edit', compact('pengembalian'));
    }

    // Update the pengembalian record
    public function update(Request $request, $id)
    {
        // Validate the updated input data
        $validated = $request->validate([
            'status' => 'required|string|in:sudah,belum', // Only 'sudah' or 'belum'
            'tgl_pengembalian' => 'nullable|date|required_if:status,sudah', // Ensure 'tgl_pengembalian' is provided if the status is 'sudah'
        ]);

        // Use Auth::user() to get the authenticated user
        $userId = Auth::user()->id;

        // Find the pengembalian record for the logged-in user
        $pengembalian = Pengembalian::where('user_id', $userId)->where('id', $id)->firstOrFail();

        // Update the pengembalian record
        $pengembalian->update($validated);

        // Redirect to the index route with a success message
        return redirect()->route('pengembalian.index')->with('success', 'Pengembalian berhasil diperbarui.');
    }

    // Delete the pengembalian record
    public function destroy($id)
    {
        // Use Auth::user() to get the authenticated user
        $userId = Auth::user()->id;

        // Find the pengembalian record for the logged-in user
        $pengembalian = Pengembalian::where('user_id', $userId)->where('id', $id)->firstOrFail();

        // Delete the record
        $pengembalian->delete();

        // Redirect to the index route with a success message
        return redirect()->route('pengembalian.index')->with('success', 'Pengembalian berhasil dihapus.');
    }
}
