<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller

{

    public function index()
    {
        // Mengembalikan tampilan dashboard admin
        return view('admin.dashboard_admin'); // Ganti dengan nama tampilan Anda
    }
}
