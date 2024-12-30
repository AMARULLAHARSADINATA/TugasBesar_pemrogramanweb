<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html  class= scroll-smooth lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

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
    <body class="flex items-center justify-center min-h-screen bg-teal-700">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex w-full max-w-4xl">
        <div class="hidden md:block md:w-1/2 relative">
            <img alt="Background image of a modern office with people working" class="absolute inset-0 w-full h-full object-cover opacity-50" height="800" src="https://storage.googleapis.com/a1aa/image/Y4U2UK5zRZoDMFPNJEnoFYn5i0f8UBpmsMiesnhEb6B8uT9TA.jpg" width="600"/>
            <div class="absolute inset-0 bg-teal-700 opacity-75"></div>
        </div>
        <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
            <h2 class="text-3xl font-semibold text-gray-800">Welcome</h2>
            <p class="mt-2 text-gray-600">Log in to your account to continue</p>
            <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
                @csrf
                <div class="relative">
                    <input type="email" id="email" name="email" placeholder="awesome@user.com" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"/>
                    <i class="fas fa-envelope absolute left-3 top-3 text-gray-400"></i>
                </div>
                <div class="relative">
                    <input type="password" id="password" name="password" placeholder="Password" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"/>
                    <i class="fas fa-lock absolute left-3 top-3 text-gray-400"></i>
                </div>
                @if (session('error'))
                    <div class="text-red-500 text-sm mb-4">{{ session('error') }}</div>
                @endif
                <div class="flex justify-end">
                    <a class="text-sm text-teal-500 hover:underline" href="{{ url('/register') }}">Forgot your password?</a>
                </div>
                <button class="w-full py-2 bg-teal-500 text-white rounded-lg hover:bg-teal-600 focus:outline-none focus:ring-2 focus:ring-teal-500" type="submit">Log In</button>
            </form>
            <p class="mt-4 text-center text-gray-600">
                Don't have an account? <a class="text-teal-500 hover:underline" href="{{ url('/register') }}">Sign up!</a>
            </p>
            <div class="flex justify-center mt-4 space-x-4">
                <a class="text-gray-400 hover:text-gray-600" href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-gray-400 hover:text-gray-600" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-gray-400 hover:text-gray-600" href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
