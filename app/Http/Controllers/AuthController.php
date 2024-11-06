<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Mengautentikasi user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Jika berhasil, redirect ke halaman dashboard
            return redirect()->intended('dashboard');
        }

        // Jika gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau Password yang Anda masukkan salah.',
        ]);
    }

    // Proses logout
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    // Menampilkan halaman dashboard (setelah login)
    public function dashboard()
    {
        return view('home');
    }
}
