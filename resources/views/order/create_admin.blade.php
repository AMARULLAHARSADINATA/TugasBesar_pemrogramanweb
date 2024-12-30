<!DOCTYPE html>
<html  class= scroll-smooth lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>tambahkan order</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}
            </style>
        @endif
    </head>
<body class="bg-gray-200">
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg mt-10">
        <h1 class="text-2xl font-bold mb-6">Tambah Order</h1>

        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label for="order_date" class="block text-gray-600">Tanggal Pesan</label>
                <input type="date" id="order_date" name="order_date" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="tralis_type" class="block text-gray-600">Jenis Tralis</label>
                <input type="text" id="tralis_type" name="tralis_type" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="material" class="block text-gray-600">Material</label>
                <input type="text" id="material" name="material" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <div class="mb-4">
                <label for="color" class="block text-gray-600">Warna</label>
                <input type="text" id="color" name="color" required class="mt-1 block w-full border border-gray-300 rounded-md p-2">
            </div>

            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Simpan Order</button>
        </form>

        <div class="mt-4">
            <a href="{{ route('orders.index') }}" class="inline-block px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Kembali ke Daftar Orders</a>
        </div>
    </div>
</body>
</html>