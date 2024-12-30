<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $orders = Order::all(); // Ambil semua data orders
        $users = User::all();   // Ambil semua data users
    
        // Debugging
        if ($orders->isEmpty()) {
            \Log::info('Tidak ada data orders.');
        }
    
        return view('home_admin', compact('orders', 'users'));

         // Logika untuk menampilkan halaman admin
         return view('home_admin'); // Pastikan file view ini ada di resources/views
    }
}