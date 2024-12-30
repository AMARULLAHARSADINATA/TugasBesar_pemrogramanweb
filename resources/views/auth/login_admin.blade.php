<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Tailwind CSS styling */
            *,::after,::before { box-sizing:border-box; border-width:0; border-style:solid; border-color:#e5e7eb; }
            ::after,::before { --tw-content:''; }
            :host,html { line-height:1.5; -webkit-text-size-adjust:100%; font-family:Figtree, ui-sans-serif, system-ui, sans-serif; }
        </style>
    @endif
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-96">
        <h1 class="text-2xl font-semibold text-center text-gray-700 mb-6">
            <i class="fas fa-user-lock"></i> Login Admin
        </h1>
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <div class="mt-4 text-center">
            <p class="text-gray-600 text-sm">Belum punya akun? <a href="{{ route('admin.register') }}" class="text-blue-500 hover:underline">Daftar di sini</a></p>
        </div>
        <div class="mt-4 text-center text-gray-600 text-sm">
            <p>© 2024 Your Company</p>
        </div>
    </div>
</body>
</html>