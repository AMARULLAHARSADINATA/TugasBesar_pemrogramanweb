<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.register_admin'); // Ubah ke register_admin
    }

    public function register(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Enkripsi password
        $validatedData['password'] = bcrypt($validatedData['password']);

        // Simpan data admin baru
        Admin::create($validatedData);

        return redirect()->route('admin.login')->with('success', 'Admin berhasil terdaftar.');// Validasi dan register logika di sini
    }
}
