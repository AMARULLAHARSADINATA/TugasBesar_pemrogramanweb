<!DOCTYPE html>
<html  class= scroll-smooth lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pesan Tralis</title>

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
<body class="bg-gray-200 p-8">
<a href="{{ route('home') }}" class="mt-4 inline-block bg-gray-500 text-white p-2 rounded text-center">Kembali ke Beranda</a>
    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <h1 class="text-xl font-bold mb-4">Input Pesanan Tralis</h1>

        @if(session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('order.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="order_date" class="block mb-2">Tanggal Pesan:</label>
                <input type="date" name="order_date" id="order_date" class="border rounded w-full p-2" required>
            </div>
            <div class="mb-4">
                <label for="tralis_type" class="block mb-2">Jenis Tralis:</label>
                <input type="text" name="tralis_type" id="tralis_type" class="border rounded w-full p-2" required>
            </div>
            <div class="mb-4">
                <label for="material" class="block mb-2">Material:</label>
                <input type="text" name="material" id="material" class="border rounded w-full p-2" required>
            </div>
            <div class="mb-4">
                <label for="color" class="block mb-2">Warna yang Diinginkan:</label>
                <input type="text" name="color" id="color" class="border rounded w-full p-2" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Kirim</button>
        </form>
    </div>
</body>
</html>