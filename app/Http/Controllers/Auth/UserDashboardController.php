<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        // Mengembalikan tampilan dashboard pengguna
        return view('dashboard'); // Ganti dengan nama tampilan Anda
    }
}
