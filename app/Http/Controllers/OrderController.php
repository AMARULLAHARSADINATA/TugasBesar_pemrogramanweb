<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function create()
    {
        // Logika untuk menampilkan halaman create.blade.php
        return view('order.create');
    }

    public function createAdmin()
    {
        // Logika untuk menampilkan halaman create_admin.blade.php
        return view('order.create_admin');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'order_date' => 'required|date',
            'tralis_type' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'color' => 'required|string|max:255',
        ]);

        // Simpan pesanan
        Order::create($request->all());

        // Mengembalikan respons JSON
        // return response()->json(['message' => 'Pesanan berhasil dikirim!']);
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id); // Ambil data order berdasarkan ID
        return view('orders.edit', compact('order')); // Pastikan nama view benar
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'order_date' => 'required|date',
            'tralis_type' => 'required|string|max:255',
            'material' => 'required|string|max:255',
            'color' => 'required|string|max:255',
        ]);

        $order->update($request->all());
        return redirect()->route('orders.index');

        $order = Order::findOrFail($id);
    return view('orders.edit', compact('order'));
    }


    public function destroy($id)
    {
        // Temukan order berdasarkan ID dan hapus
        $order = Order::findOrFail($id);
        $order->delete();
    
        // Redirect kembali dengan pesan sukses
        return redirect()->route('orders.index')->with('success', 'Order berhasil dihapus.');
    }

    public function index()
{
    $orders = Order::all(); // Ganti dengan model yang sesuai
    return view('orders', compact('orders'));
}
}