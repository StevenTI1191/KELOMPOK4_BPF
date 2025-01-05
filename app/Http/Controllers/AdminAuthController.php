<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AccountAdmin;
use Illuminate\Support\Facades\Hash;


class AdminAuthController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        return view('auth.Adminlogin');  // Form login admin
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard'); // Redirect ke dashboard admin setelah login sukses
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }


    // Proses logout
    public function logout()
    {
        Auth::guard('admin')->logout();  // Logout admin
        return redirect()->route('admin.login');  // Arahkan kembali ke halaman login
    }

    public function showRegisterForm()
    {
    return view('auth.Adminregister');  // Pastikan view sudah benar
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:account_admin,email',
            'password' => 'required|confirmed|min:8',
        ]);
    
        $admin = new AccountAdmin();
        $admin->name = $validated['name'];
        $admin->email = $validated['email'];
        $admin->password = bcrypt($validated['password']);
        $admin->save();
    
        return redirect()->route('admin.login');  // Setelah register berhasil, redirect ke halaman login
    }

    

}
