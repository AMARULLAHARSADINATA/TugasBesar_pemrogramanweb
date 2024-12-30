<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    

    public function dashboard()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return view('admin.dashboard'); // Pastikan ada view 'admin/dashboard.blade.php'
        } elseif ($user->role === 'user') {
            return view('user.dashboard'); // Pastikan ada view 'user/dashboard.blade.php'
        } else {
            return redirect()->route('home')->with('error', 'Unauthorized access');
        }
    }

    public function showLoginForm()
    {
        return view('auth.login'); // Pastikan ada view 'auth/login.blade.php'
    }

    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Proses login dilakukan di LoginController
    }

    // Menampilkan halaman registrasi
    public function create()
    {
        return view('register'); // Sesuaikan dengan lokasi file view Anda
    }

    // Memproses data registrasi
    public function register(Request $request)
    {
        // Validasi input registrasi
        $request->validate([
            'username' => 'required|string|max:255|unique:users,username',  // Username harus unik
            'email' => 'required|email|unique:users,email',  // Email harus unik
            'password' => 'required|min:8|confirmed',  // Password minimal 8 karakter
        ]);

        // Membuat user baru
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),  // Hash password
        ]);

        return redirect()->route('login.form')->with('success', 'Registrasi berhasil. Silakan login.');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Proses logout
        return redirect('/login'); // Arahkan kembali ke halaman login setelah logout
    }
}