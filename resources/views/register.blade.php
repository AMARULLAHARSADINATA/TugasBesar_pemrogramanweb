<!DOCTYPE html>
<html  class= scroll-smooth lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register</title>

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
    <body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Left Section -->
        <div class="w-full lg:w-1/2 bg-teal-900 text-white p-10 flex flex-col justify-center">
            <div class="max-w-md mx-auto">
                <img alt="Your logo" class="mb-8" height="40" src="{{ asset('img/las1.png') }}" width="100"/>
                <h1 class="text-4xl font-bold mb-4">We shape the metal. You shape the vision.™</h1>
                <p class="text-lg mb-8">
                Crafting durable gates, railings, and custom designs with precision. Secure your property, enhance your style, and bring your ideas to life with our expert welding and metalwork solutions.
                </p>
                <i class="fas fa-arrow-down text-2xl"></i>
            </div>
        </div>
        
        <!-- Right Section -->
        <div class="w-full lg:w-1/2 bg-white p-10 flex flex-col justify-center">
            <div class="max-w-md mx-auto">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Registrasi Akun</h2>

                <!-- Formulir Registrasi -->
                <form class="space-y-6" action="{{ route('register') }}" method="POST">
                    @csrf <!-- Token keamanan Laravel -->

                    <!-- Input Username -->
                    <div>
                        <label for="username" class="block text-gray-600 mb-2">Username</label>
                        <input type="text" name="username" id="username" required 
                               class="w-full p-3 border border-gray-300 rounded shadow-sm" placeholder="Username">
                    </div>

                    <!-- Input Email -->
                    <div>
                        <label for="email" class="block text-gray-600 mb-2">Email</label>
                        <input id="email" name="email" type="email" required
                               class="w-full p-3 border border-gray-300 rounded" placeholder="Alamat email">
                        @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Input Password -->
                    <div>
                        <label for="password" class="block text-gray-600 mb-2">Password</label>
                        <input id="password" name="password" type="password" required
                               class="w-full p-3 border border-gray-300 rounded" placeholder="Password">
                        @error('password') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <!-- Konfirmasi Password -->
                    <div>
                        <label for="password_confirmation" class="block text-gray-600 mb-2">Konfirmasi Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                               class="w-full p-3 border border-gray-300 rounded" placeholder="Konfirmasi Password">
                    </div>

                    <!-- Tombol Submit -->
                    <div>
                        <button type="submit"
                                class="w-full bg-teal-600 text-white p-3 rounded hover:bg-teal-700 focus:outline-none">
                            Daftar
                        </button>
                    </div>
                </form>

                <!-- Link ke halaman login -->
                <p class="text-center text-gray-600 mt-4">
                    Sudah punya akun?
                    <a href="{{ url('/login') }}" class="text-blue-500 hover:underline">Login di sini</a>
                </p>

                <!-- Pesan sukses -->
                @if (session('success'))
                    <div class="mt-4 text-green-600 text-center">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
    </html>