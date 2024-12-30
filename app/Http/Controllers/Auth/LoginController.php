<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan ada view 'auth/login.blade.php'
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba untuk login
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Cek peran pengguna dan arahkan ke halaman yang sesuai
            if ($user->role === 'admin') {
                return redirect()->route('home_admin'); // Redirect ke halaman admin
            } else {
                return redirect()->route('home'); // Redirect ke halaman pengguna biasa
            }
            
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Metode untuk logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login.form'); // Ganti dengan rute login Anda
    }
}
