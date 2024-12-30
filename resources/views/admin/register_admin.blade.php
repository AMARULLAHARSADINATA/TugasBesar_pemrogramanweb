<!DOCTYPE html>
<html  class= scroll-smooth lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>admin register</title>

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
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-96">
        <h1 class="text-2xl font-semibold text-center text-gray-700 mb-6">
            <i class="fas fa-user-plus"></i> Register Admin
        </h1>
        <form action="{{ route('admin.register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Nama:</label>
                <input type="text" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email:</label>
                <input type="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password:</label>
                <input type="password" name="password" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-600">Konfirmasi Password:</label>
                <input type="password" name="password_confirmation" required class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring focus:ring-blue-500">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded hover:bg-blue-600 transition duration-300">Register</button>
        </form>
        <div class="mt-4 text-center">
            <p class="text-gray-600 text-sm">Sudah punya akun? <a href="{{ route('admin.login') }}" class="text-blue-500 hover:underline">Login di sini</a></p>
        </div>
        <div class="mt-4 text-center text-gray-600 text-sm">
            <p>© 2024 Your Company</p>
        </div>
    </div>
</body>
</html>