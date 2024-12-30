<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {


  // Tampilkan informasi pengguna

        // Pastikan user telah login
        // $username = Auth::user()->username ?? 'Guest';
        
        // return view('home', ['username' => $username]);
    }
}
