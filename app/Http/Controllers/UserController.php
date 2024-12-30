<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Mengambil semua data pengguna
        try {
            $users = User::all(); // Mengambil semua pengguna dari database
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi saat pengambilan data
            return response()->json(['error' => 'Failed to retrieve users: ' . $e->getMessage()], 500);
        }

        // Tampilkan view dengan data pengguna
        return view('users.index', compact('users'));
    }

    public function edit($id)
{
    // Ambil data user berdasarkan ID
    $user = User::findOrFail($id);

    // Kembalikan tampilan edit dengan data user
    return view('users.edit', compact('user'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $id,
        'role' => 'required|string',
    ]);

    $user = User::findOrFail($id);
    $user->update($validatedData);

    return redirect()->route('users.index')->with('success', 'User berhasil diperbarui.');
}

public function destroy($id)
{
    // Temukan user berdasarkan ID dan hapus
    $user = User::findOrFail($id);
    $user->delete();

    // Redirect kembali dengan pesan sukses
    return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
}

public function create()
{
    return view('users.create'); // Pastikan Anda memiliki tampilan untuk membuat user
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $validatedData['password'] = bcrypt($validatedData['password']); // Enkripsi password

    User::create($validatedData); // Simpan user baru

    return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan.');
}
}