<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        // Mengembalikan tampilan dashboard pengguna
        return view('dashboard'); // Ganti dengan nama tampilan Anda
    }
}